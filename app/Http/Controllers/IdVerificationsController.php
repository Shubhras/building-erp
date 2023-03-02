<?php

namespace App\Http\Controllers;
use App;
use App\Http\Requests\CreateAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use App\Models\User;
use App\Repositories\IdVerificationsRepository;
use Flash;
use Illuminate\Http\Request;
use App\Models\Patient;
class IdVerificationsController extends AppBaseController
{
    /** @var IdVerificationsRepository $IdVerificationsRepository */
    private $idVerificationsRepository;

    public function __construct(IdVerificationsRepository $adminRepo)
    {
        $this->idVerificationsRepository = $adminRepo;
    }
 /**
     * Display a listing of the Patient.
     *
     * @param  Request  $request
     *
     * @throws Exception
     *
     * @return Factory|View
     */
    public function idVerifications(Request $request)
    {
        $data['statusArr'] = Patient::STATUS_ARR;

        return view('super_id_verification.idverifications',$data);
    }
}


