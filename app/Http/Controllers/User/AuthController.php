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

    public function detail ()
    {
        $data['title'] = UserHelper::getPageTitle(trans('user.detail.account'));
        $data['orders'] = OrderService::getInstance()->getListOrders(2);

        return view('user.info.index')->with(['data' => $data]);
    }

    public function detailOrder($id)
    {   
        $data['title'] = UserHelper::getPageTitle(trans('user.detail.yourOrder'));
        // $data['orders'] = OrderService::getInstance()->getOrderDetail($id);

        return view('user.order.detail')->with(['data' => $data]);
    }
}
