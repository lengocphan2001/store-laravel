<?php

namespace App\Http\Controllers\User;

use App\Helpers\UserHelper;
use App\Http\Controllers\Controller;
use App\Services\User\OrderService;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function formLogin()
    {
        return 'user';
        // return view('admin.login');
    }

    public function detail ($id)
    {
        $data['title'] = UserHelper::getPageTitle(trans('user.detail.account'));
        $data['orders'] = OrderService::getInstance()->getListOrders($id);

        return view('user.info.index')->with(['data' => $data]);
    }
}
