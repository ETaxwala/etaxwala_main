<?php

namespace App\Http\Controllers;

use App\Models\CoreServices;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    function index(Request $request)
    {
        $coreservices  = CoreServices::all();
        return view('welcome', compact('coreservices'));
    }

    function showLoginForm(Request $request)
    {
        return view('admin.login');
    }

    function adminLogin(Request $request)
    {
        dd('login');
    }

    function adminLogout(Request $request)
    {
        dd('logout');
    }

}
