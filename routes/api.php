<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ObjectController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FunderController;

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


Route::get('objects', [ObjectController::class, 'index']);
Route::get('objects/{id}', [ObjectController::class, 'show']);
Route::get('objects/owner/{id}', [ObjectController::class, 'showByOwnerId']);

Route::get('users', [UserController::class, 'index']);
Route::get('users/{id}', [UserController::class, 'show']);

Route::get('funders', [FunderController::class, 'index']);
Route::get('funders/{id}', [FunderController::class, 'show']);
