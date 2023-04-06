<?php

namespace App\Services\User;

use App\Models\Order;
use App\Services\Service;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class OrderService extends Service
{
    /**
     * Get List Banners
     *
     * @return Builder[]|Collection
     */
    public function getListOrders($id): Collection|array
    {
        return Order::query()
            ->with(['user', 'user.userAddress.ward', 'user.userAddress.district', 'user.userAddress.province'])
            ->select(['id', 'user_id', 'payment', 'total','status'])
            ->where('user_id', $id)
            ->get();
    }

    public function getOrderDetail($id)
    {
        $order = Order::query()
        ->with(['orderDetails','orderDetails.productVariation.product','orderDetails.productVariation.size','orderDetails.productVariation.color'])
        ->where('id', $id)->first();
        if (!$order && $order['user_id'] != auth()->guard('web')->id()) {
            abort(404);
        }//end if

        return $order;
    }
}
