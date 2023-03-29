<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function formLogin()
    {
        return "ok";
        // return view('admin.login');
    }
}
