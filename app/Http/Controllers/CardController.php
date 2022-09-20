<?php

namespace App\Http\Controllers;

use App\Models\card;
use App\Http\Requests\StorecardRequest;
use App\Http\Requests\UpdatecardRequest;

class CardController extends Controller
{

    public function index()
    {
        $cards = card::all();

        return response()->json($cards);
    }


    public function create()
    {
        //
    }


    public function store(StorecardRequest $request)
    {
        //
    }


    public function show(card $card)
    {

    }


    public function edit(card $card)
    {
        //
    }


    public function update(UpdatecardRequest $request, card $card)
    {
        //
    }


    public function destroy(card $card)
    {
        //
    }
}
