<?php

namespace App\Http\Controllers;

use App\Models\card;
use App\Models\items;
use App\Http\Requests\StorecardRequest;
use App\Http\Requests\UpdatecardRequest;

class CardController extends Controller
{

    public function index()
    {
        $cards = card::all();

        return response()->json($cards);
    }


    // public function deleteItem(card $card, item $item)
    // {

}
