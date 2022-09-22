<?php

use App\Http\Controllers\AuthController;
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

Route::post('/register', [AuthController::class, 'register']);

Route::post('/login', [AuthController::class, 'login']);

Route::get('/me', [AuthController::class, 'me'])->middleware('auth:sanctum');

Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

// Route::resource('user', App\Http\Controllers\UsersController::class);
// Route::resource('items', App\Http\Controllers\ItemsController::class);
Route::resource('cards', App\Http\Controllers\CardController::class)->middleware('auth:sanctum');

Route::post('items', [App\Http\Controllers\ItemsController::class, 'saveItems'])->middleware('auth:sanctum');
Route::get('items/{id}', [App\Http\Controllers\ItemsController::class, 'showItems']);
Route::post('addItems/{item}/{cards}', [App\Http\Controllers\ItemsController::class, 'addCard'])->middleware('auth:sanctum');
Route::post('delItems/{item}/{cards}', [App\Http\Controllers\ItemsController::class, 'deleteCard'])->middleware('auth:sanctum');

// Route::post('api/user', [App\Http\Controllers\UsersController::class, 'saveUsers']);
Route::post('editUser/{id}', [App\Http\Controllers\UsersController::class, 'updateUser'])->middleware('auth:sanctum');
Route::get('user/{id}', [App\Http\Controllers\UsersController::class, 'showUsers'])->middleware('auth:sanctum');
