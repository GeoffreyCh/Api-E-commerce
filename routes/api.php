<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('user', App\Http\Controllers\UsersController::class);
Route::resource('items', App\Http\Controllers\ItemsController::class);
Route::resource('cards', App\Http\Controllers\CardController::class);

Route::post('api/items', [App\Http\Controllers\ItemsController::class, 'saveItems']);
Route::get('api/items/{id}', [App\Http\Controllers\ItemsController::class, 'showItems']);
Route::post('api/addItems/{item}/{cards}', [App\Http\Controllers\ItemsController::class, 'addCard']);
Route::post('api/delItems/{item}/{cards}', [App\Http\Controllers\ItemsController::class, 'deleteCard']);

Route::post('api/user', [App\Http\Controllers\UsersController::class, 'saveUsers']);
Route::post('api/editUser/{id}', [App\Http\Controllers\UsersController::class, 'updateUser']);
Route::get('api/user/{id}', [App\Http\Controllers\UsersController::class, 'showUsers']);
