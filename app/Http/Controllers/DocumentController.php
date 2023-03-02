<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDocumentRequest;
use App\Http\Requests\UpdateDocumentRequest;
use App\Models\Document;
use App\Repositories\DocumentRepository;
use Exception;
use Flash;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use TomorrowIdeas\Plaid\Entities\User;
use TomorrowIdeas\Plaid\Plaid;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Storage;
use Str;

class DocumentController extends AppBaseController
{
    /** @var DocumentRepository */
    private $documentRepository;

    public function __construct(DocumentRepository $documentRepo)
    {
        $this->documentRepository = $documentRepo;
    }

    /**
     * Display a listing of the Document.
     *
     * @param  Request  $request
     *
     * @throws Exception
     *
     * @return Factory|View
     */
    public function index(Request $request)
    {
        $data = $this->documentRepository->getSyncList();

        return view('documents.index')->with($data);
    }

    /**
     * Store a newly created Document in storage.
     *
     * @param  CreateDocumentRequest  $request
     *
     * @return JsonResponse
     */
    public function store(CreateDocumentRequest $request)
    {
        $input = $request->all();

        $this->documentRepository->store($input);

        return $this->sendSuccess(__('messages.flash.document_saved'));
    }

    /**
     * @param  Document  $document
     *
     * @return Application|Factory|View
     */
    public function show(Document $document)
    {
        if (!canAccessRecord(Document::class, $document->id)) {
            Flash::error(__('messages.flash.not_allow_access_record'));

            return Redirect::back();
        }

        $documents = $this->documentRepository->find($document->id);
        $data = $this->documentRepository->getSyncList();
        $data['documents'] = $documents;

        return view('documents.show')->with($data);
    }

    /**
     * Show the form for editing the specified Document.
     *
     * @param  Document  $document
     *
     * @return JsonResponse
     */
    public function edit(Document $document)
    {
        if (!canAccessRecord(Document::class, $document->id)) {
            return $this->sendError(__('messages.flash.not_allow_access_record'));
        }

        if (getLoggedInUser()->hasRole('Patient')) {
            if (getLoggedInUser()->owner_id != $document->patient_id) {
                return $this->sendError(__('messages.flash.document_not_found'));
            }
        }

        return $this->sendResponse($document, __('messages.flash.document_retrieved'));
    }

    /**
     * Update the specified Document in storage.
     *
     * @param  Document  $document
     *
     * @param  UpdateDocumentRequest  $request
     *
     * @return JsonResponse
     */
    public function update(Document $document, UpdateDocumentRequest $request)
    {
        $this->documentRepository->updateDocument($request->all(), $document->id);

        return $this->sendSuccess(__('messages.flash.document_updated'));
    }

    /**
     * Remove the specified Document from storage.
     *
     * @param  Document  $document
     * @throws Exception
     *
     * @return JsonResponse
     */
    public function destroy(Document $document)
    {
        if (!canAccessRecord(Document::class, $document->id)) {
            return $this->sendError(__('messages.flash.document_not_found'));
        }

        if (getLoggedInUser()->hasRole('Patient')) {
            if (getLoggedInUser()->owner_id != $document->patient_id) {
                return $this->sendError(__('messages.flash.document_not_found'));
            }
        }

        $this->documentRepository->deleteDocument($document->id);

        return $this->sendSuccess(__('messages.flash.document_deleted'));
    }

    /**
     * @param  Document  $document
     *
     * @throws FileNotFoundException
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function downloadMedia(Document $document)
    {
        if (!canAccessRecord(Document::class, $document->id)) {
            return Redirect::back();
        }

        if (getLoggedInUser()->hasRole('Patient')) {
            if (getLoggedInUser()->owner_id != $document->patient_id) {
                return Redirect::back();
            }
        }

        $documentMedia = $document->media[0];
        $documentPath = $documentMedia->getPath();
        if (config('app.media_disc') === 'public') {
            $documentPath = (Str::after($documentMedia->getUrl(), '/uploads'));
        }

        $file = Storage::disk(config('app.media_disc'))->get($documentPath);

        $headers = [
            'Content-Type' => $document->media[0]->mime_type,
            'Content-Description' => 'File Transfer',
            'Content-Disposition' => "attachment; filename={$document->media[0]->file_name}",
            'filename' => $document->media[0]->file_name,
        ];

        return response($file, 200, $headers);
    }
    public function plaidVerification()
    {
        $curl = curl_init();
        // $user1 = DB::table('users')->orderBy('created_at', 'desc')->first();
        $user1 = DB::table('users')->where('department_id', '=', 3)->orderBy('created_at', 'desc')->first();
        // print_r($user1);die;

        $userData = [
            "client_id" => "62a3bf596120ee001a3f65e7",
            "secret" => "9b0b7aab7c7bda82207c79f044690c",
            "template_id" => "idvtmp_ff6HWimW7FDnDN",
            "gave_consent" => true,
            "is_shareable" => true,
            "user" => [
                "client_user_id" => "user-sandbox-" . $user1->id,
                // "client_user_id" => "user-sandbox-b0e2c4ee-a763-4df5-bfe9-46a46bce99",
                "email_address" => $user1->email,
                // "email_address" => "null",
                "phone_number" => null,
                "date_of_birth" => null,
                "name" => [
                    "given_name" => $user1->first_name,
                    "family_name" => $user1->last_name,
                ],
                "address" => [
                    "street" => "100 Market Street",
                    "street2" => "Apt 1A",
                    "city" => "San Francisco",
                    "region" => "CA",
                    "postal_code" => "94103",
                    "country" => "US",
                ],
                "id_number" => [
                    "value" => "123456789",
                    "type" => "us_ssn",
                ],
            ],
        ];
        $dataGet = json_encode($userData);
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://sandbox.plaid.com/identity_verification/create',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $dataGet,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        $getData = json_decode($response);
        // print_r($getData);die;
        if ($getData->error_message) {
            $curl = curl_init();
            $userData1 = [
                "client_id" => "62a3bf596120ee001a3f65e7",
                "secret" => "9b0b7aab7c7bda82207c79f044690c",
                "template_id" => "idvtmp_ff6HWimW7FDnDN",
                "client_user_id" => "user-sandbox-" . $user1->id,
                "strategy" => "reset",
            ];
            $dataGet1 = json_encode($userData1);
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://sandbox.plaid.com/identity_verification/retry',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => $dataGet1,
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json',
                ),
            ));
            $response = curl_exec($curl);
            curl_close($curl);
            $getData1 = json_decode($response);
            return redirect($getData1->shareable_url);
            // print_r($getData->error_message);die();
        }
        return redirect($getData->shareable_url);
        // return view('web.home.index', $data);
    }
    // public function createLinkToken()
    // {
    //     Log::info('-----------------------------------------');
    //     Log::info('Creating new link token');
    //     $user_id = 1;
    //     $plaidUser = new User($user_id);
    //     $plaid = new Plaid(env('PLAID_CLIENT_ID'), env('PLAID_SECRET'), env('PLAID_ENV'));
    //     $response = $plaid->tokens->create('Plaid Test', 'en', ['US'], $plaidUser, ['investments'], env('PLAID_WEBHOOK'));
    //     Log::info('Plaid link_token - User: ' . $user_id . ', ' . json_encode($response));
    //     return response()->json([
    //         'result' => 'success',
    //         'data' => json_encode($response)
    //     ], 200);
    // }
}
