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
/**
 * FeederController routes:
 */
Route::get('feeders', [FeederController::class, 'index']);
Route::post('feeders', [FeederController::class, 'store']);

/**
 * UserFeederUserController routes:
 */
Route::get('feeder_user', [FeederUserController::class, 'index']);

/**
 * FeedingTimeController routes:
 */
Route::get('feeding_times', [FeedingTimeController::class, 'index']);
Route::post('feeding_times', [FeedingTimeController::class, 'store']);

/**
 * FoodController routes:
 */
Route::get('foods', [FoodController::class, 'index']);
Route::post('foods', [FoodController::class, 'store']);

/**
 * UserController routes:
 */
Route::get('users', [UserController::class, 'index']);
Route::post('users', [UserController::class, 'store']);
