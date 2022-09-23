<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use App\Models\order;
use App\Models\card;
use App\Mail\sendMail;
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
        $user = User::find($order->users_id);

        $card = $user->cards->last();

        Mail::to('gc.geoffrey.c@gmail.com')->send(new sendMail($order));

        $card->date_achat = now();
        echo $card;
        $card->update();

        $newCard = new card();
        $newCard->nb_item = 0;
        $newCard->total_price = 0;
        $newCard->users_id = $user->id;

        $newCard->save();

        $user->cards_id = $newCard->id;

        $user->update();

    }
}
