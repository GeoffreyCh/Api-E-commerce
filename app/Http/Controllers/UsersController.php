<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\card;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateUserRequest;

class UsersController extends Controller
{

    public function index()
    {
        $users = User::all();

        return response()->json($users);
    }


    // public function saveUsers(Request $request)
    // {
    //     $pseudo = $request->input('pseudo');
    //     $name = $request->input('name');
    //     $email = $request->input('email');
    //     $password = $request->input('password');

    //     if($name){
    //         $user = new User();
    //         $user->pseudo = $pseudo;
    //         $user->name = $name;
    //         $user->email = $email;
    //         $user->password = $password;

    //         $user->save();

    //         $card = new card();
    //         $card->nb_item = count($card->items);
    //         $card->total_price = 0;
    //         $card->users_id = $user->id;

    //         $card->save();

    //         // echo count($card->items);

    //         $user->cards_id = $card->id;

    //         $user->save();

    //         return response()->json("success");
    //     } else {
    //         return response()->json("error");
    //     }
    // }


    public function showUsers($id)
    {
        $user = User::find($id);

        return response()->json($user);
    }


    public function updateUser(Request $request, $id)
    {
        $user = User::find($id);

        $pseudo = $request->input('pseudo');
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');

        $user->pseudo = $pseudo;
        $user->name = $name;
        $user->email = $email;
        $user->password = $password;

        $user->update();

        return response()->json("success");
    }

}
