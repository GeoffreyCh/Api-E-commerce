<?php

namespace App\Http\Controllers;

use App\Models\card_item;
use App\Http\Requests\Storecard_itemRequest;
use App\Http\Requests\Updatecard_itemRequest;

class CardItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storecard_itemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storecard_itemRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\card_item  $card_item
     * @return \Illuminate\Http\Response
     */
    public function show(card_item $card_item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\card_item  $card_item
     * @return \Illuminate\Http\Response
     */
    public function edit(card_item $card_item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatecard_itemRequest  $request
     * @param  \App\Models\card_item  $card_item
     * @return \Illuminate\Http\Response
     */
    public function update(Updatecard_itemRequest $request, card_item $card_item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\card_item  $card_item
     * @return \Illuminate\Http\Response
     */
    public function destroy(card_item $card_item)
    {
        //
    }
}
