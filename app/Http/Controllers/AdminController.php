<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:ROLE_ADMIN');
    }


    public function index()
    {
        return redirect()->route('admin.adminDashboard');
    }

    public function dashboard()
    {
        return view('admin.adminDashboard');
    }
}
