<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//------------------------------------Users------------------------------------------
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/me', [AuthController::class, 'me'])->middleware('auth:sanctum');
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

Route::post('editUser/{id}', [App\Http\Controllers\UsersController::class, 'updateUser'])->middleware('auth:sanctum');
Route::get('user/{id}', [App\Http\Controllers\UsersController::class, 'showUsers'])->middleware('auth:sanctum');
Route::get('users', [App\Http\Controllers\UsersController::class, 'index']);


//------------------------------------Cards------------------------------------------
Route::resource('cards', App\Http\Controllers\CardController::class)->middleware('auth:sanctum');


//------------------------------------Items------------------------------------------
Route::get('items', [App\Http\Controllers\ItemsController::class, 'index']);
Route::post('saveItems', [App\Http\Controllers\ItemsController::class, 'saveItems'])->middleware('auth:sanctum');
Route::get('items/{id}', [App\Http\Controllers\ItemsController::class, 'showItems']);
Route::post('addItems/{item}/{cards}', [App\Http\Controllers\ItemsController::class, 'addCard'])->middleware('auth:sanctum');
Route::post('delItems/{item}/{cards}', [App\Http\Controllers\ItemsController::class, 'deleteCard'])->middleware('auth:sanctum');


//------------------------------------Orders------------------------------------------
Route::get('orders', [App\Http\Controllers\OrderController::class, 'index'])->middleware('auth:sanctum');
Route::post('newOrder/{user}', [App\Http\Controllers\OrderController::class, 'newOrder'])->middleware('auth:sanctum');
Route::post('validateOrder/{order}', [App\Http\Controllers\OrderController::class, 'validateOrder'])->middleware('auth:sanctum');
Route::get('showHistoric/{user}', [App\Http\Controllers\OrderController::class, 'showHistoric']);


