<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function formLogin()
    {
        return 'user';
        // return view('admin.login');
    }
}
