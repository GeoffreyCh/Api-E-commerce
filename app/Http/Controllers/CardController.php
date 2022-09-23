<?php

namespace App\Http\Controllers;

use App\Models\card;
use App\Models\items;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Requests\StorecardRequest;
use App\Http\Requests\UpdatecardRequest;

class CardController extends Controller
{

    public function index()
    {
        // $cards = card::all();
        $cards = Auth::user()->cards()->with('items')->get();

        return response()->json($cards);
    }


    public function show(card $card)
    {
        $items = $card->items;

        return response()->json($card);
    }



    // public function deleteItem(card $card, item $item)
    // {

}
