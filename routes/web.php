<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('user', App\Http\Controllers\UsersController::class);
Route::resource('items', App\Http\Controllers\ItemsController::class);
Route::resource('cards', App\Http\Controllers\CardController::class);

Route::post('api/items', [App\Http\Controllers\ItemsController::class, 'saveItems']);
Route::get('api/items/{id}', [App\Http\Controllers\ItemsController::class, 'showItems']);
Route::post('api/addItems/{item}/{cards}', [App\Http\Controllers\ItemsController::class, 'addCard']);
Route::post('api/delItems/{item}/{cards}', [App\Http\Controllers\ItemsController::class, 'deleteCard']);

Route::post('api/user', [App\Http\Controllers\UsersController::class, 'saveUsers']);
Route::get('api/user/{id}', [App\Http\Controllers\UsersController::class, 'showUsers']);


