<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use Illuminate\Auth\SessionGuard;
use Session;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('Admin/Login/login');
    }
    public function login(Request $request)
    {
        if($request->email == 'admin@admin.com' && $request->password == 'password')
        {
            return redirect('Admin/index');
        }else
        {
            return redirect()->back();
        }
        
    }

    public function signOut()
    {
        SessionGuard::flush();
        Auth::logout();
        return Redirect('Admin/Login/login');
    }
}
