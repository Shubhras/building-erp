<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CoApplicant;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CoApplicantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('CoApplicant.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    public function store(Request $request)
    {
        $request -> validate(
            [
                'name' => 'required',
                'email' => 'required' ,'email',  'email:filter',
                'phone' => 'required', 'max:11',
                ]
            );
            $data = $request->all();
            // print_r($data['role']); die;
            // echo '<pre>';
            $wordCount = count($data['name']);
            $data_test = array();
            //$request = new CoApplicant;
            for($i=0; $i<$wordCount; $i++){
            // print_r($data); die;
            $data_test[] = array(
            'user_id'=>$data['user_id'],
            'name'=> $data['name'][$i],
            'email' => $data['email'][$i],
            'phone' => $data['phone'][$i],
            'role' => $data['role'],
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'status' => 0
            );
            // $reg->save();
        }
        // echo '<pre>';
        // print_r($data_test); die;

        DB::table('co_applicants') -> insert($data_test);
            
            if ($data_test) {
                $this->send($request);
                
            }
        }
        public function send(Request $request)
        {
            $host = $request->getHttpHost();
            $getId = DB::table("users")->select("username")->where('tenant_id',$request['tenant_id'])->where('department_id' , 1)->first();
            $urlFull = $host.'/h/'.$getId->username;
            // print_r($urlFull); die;
            $data = $this->validate($request, [
                'email' => 'required','email',
            ]);
            $invite_link = $urlFull;            
            $data['invite_link'] = $invite_link;
            
            Mail::send('invitationemails.invite', $data, function ($message) use ($data) {
                $message->to($data['email'])->subject('Invitation to join our platform');
            });
            return view('documents.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CoApplicant  $coApplicant
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $search = $request['search'] ?? "";
        if($search != ""){
            $views = CoApplicant::where('name', 'LIKE', "%$search%")->orwhere('email', 'LIKE', "%$search%")->get();
        }else{
            $views = CoApplicant::paginate(10);
            
        }
        $data=compact('views');
        return view('CoApplicant.index')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CoApplicant  $coApplicant
     * @return \Illuminate\Http\Response
     */
    public function edit(CoApplicant $coApplicant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CoApplicant  $coApplicant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CoApplicant $coApplicant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CoApplicant  $coApplicant
     * @return \Illuminate\Http\Response
     */
    public function destroy(CoApplicant $coApplicant)
    {
        //
    }
}