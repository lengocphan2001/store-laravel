<?php

namespace App\Http\Controllers\User;

use App\Helpers\UserHelper;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $data['title'] = UserHelper::getPageTitle(trans('user.label.home'));

        return view('user.home.index')->with(['data' => $data]);
    }
}
