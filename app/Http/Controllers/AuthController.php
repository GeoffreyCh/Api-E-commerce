<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\card;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validate = Validator::make($request->all(),
        [
            'name' => 'required|string|max:255',
            'pseudo'=>'required|string|max:255',
            'email'=>'required|email|unique:users',
            'password'=>'required',
        ]);
        if($validate->fails()){
            return response()->json([
                'status'=>false,
                'message'=>'Validation failed',
                'errors'=>$validate->errors()
            ], 401);
        }

        // $user = User::create([
        //     'name' => $request->name,
        //     'pseudo' => $request->pseudo,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password)
        // ]);

        $user = new User();
        $user->pseudo = $request->pseudo;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        $card = new card();
        $card->nb_item = 0;
        $card->total_price = 0;

        $card->save();

        $user->cards_id = $card->id;

        $user->save();

        return response()->json([
            'status' => true,
            'message' => 'Utilisateur créé',
            'token'=> $user->createToken('Token')->plainTextToken
        ], 200);
    }

    public function login(Request $request)
    {
        if (!Auth::attempt($request->only('email', 'password'))) {
        return response()->json([
        'message' => 'Invalid login details'
                ], 401);
            }

        $user = User::where('email', $request['email'])->firstOrFail();

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
                'access_token' => $token,
                'message' => 'Utilisateur connecté',
                'token_type' => 'Bearer',
        ]);
    }

    public function me(Request $request)
    {
        return $request->user();
    }

    public function logout(Request $request)
    {
        // return $request->user()->currentAccessToken()->delete();
        $delete = $request->user()->currentAccessToken()->delete();

        return response()->json([
            'delete' => $delete,
            'message' => 'Utilisateur déconnecté',
    ]);
    }
}
