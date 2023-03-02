<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use App\Models\User;
use App\Repositories\AdminRepository;
use Flash;
use Illuminate\Http\Request;


class IncomeverificationController extends AppBaseController
{
    /** @var AdminRepository $adminRepository */
    private $adminRepository;

    public function __construct(AdminRepository $adminRepo)
    {
        $this->adminRepository = $adminRepo;
    }

    /**
     * Display a listing of the Admin.
     *
     * @param Request $request
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function Incomeverifycall(Request $request)
    {
        return view('super_income_verification.incomeverify');
    }
}

