<?php

use Illuminate\Http\Request;
use App\Http\Controllers\API\FeederController;
use App\Http\Controllers\API\FeederUserController;
use App\Http\Controllers\API\FeedingTimeController;
use App\Http\Controllers\API\FoodController;
use App\Http\Controllers\API\UserController;
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

Route::get('FeederController', [FeederController::class, 'index']);
Route::get('FeederUser', [FeederUserController::class, 'index']);
Route::get('FeedingTime', [FeedingTimeController::class, 'index']);
Route::get('Food', [FoodController::class, 'index']);
Route::get('users', [UserController::class, 'index']);
