<?php

namespace App\Http\Controllers;

use App\Models\items;
use App\Models\card;
use App\Http\Requests\StoreitemsRequest;
use App\Http\Requests\UpdateitemsRequest;

class ItemsController extends Controller
{

    public function index()
    {
        $items = items::all();

        return response()->json($items);
    }


    public function create()
    {

    }


    public function saveItems(StoreitemsRequest $request)
    {
        $title = $request->input('title');
        $description = $request->input('description');
        $price = $request->input('price');
        $image_url = $request->input('image_url');

        if($title){
            $item = new items();
            $item->title = $title;
            $item->description = $description;
            $item->price = $price;
            $item->image_url = $image_url;
            $item->save();
            return response()->json("success");
        } else {
            return response()->json("error");
        }
    }


    public function showItems($id)
    {
        $item = items::find($id);

        return response()->json($item);
    }


    public function edit(items $items)
    {
        //
    }


    public function update(UpdateitemsRequest $request, items $items)
    {
        //
    }


    public function destroy(items $items)
    {
        //
    }


    public function addCard(items $item, $cards)
    {
        echo $item;
        echo $cards;

        $card = card::find($cards);

        $item->cards()->attach($card);

        $card->nb_item++;
        $card->total_price = $card->total_price + $item->price;

        $card->update();
    }


    public function deleteCard(items $item, $cards)
    {
        echo $item;
        echo $cards;

        $card = card::find($cards);

        $item->cards()->detach($card);

        $card->nb_item--;
        $card->total_price = $card->total_price - $item->price;

        $card->update();
    }
}
