<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\User;
use App\Http\Requests\StoreorderRequest;
use App\Http\Requests\UpdateorderRequest;

class OrderController extends Controller
{

    public function index()
    {
        $orders = order::all();

        return response()->json($orders);
    }


    public function newOrder(User $user)
    {
        echo $user;
        echo $user->cards;

        $order = new order();
        $order->no_order = mt_rand(1000000, 9999999);
        $order->cards_id = $user->cards[0]->id;
        $order->users_id = $user->id;
        $order->save();

        return response()->json($order);
    }


    public function validateOrder(order $order)
    {

    }
}
