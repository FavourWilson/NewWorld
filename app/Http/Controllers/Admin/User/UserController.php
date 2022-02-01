<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function view()
    {
        $user = User::all();
        return view('Admin/Users/view',compact('user'));
    }
}
