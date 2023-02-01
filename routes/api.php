<?php

use Illuminate\Http\Request;
use App\Http\Controllers\FeederController;
use App\Http\Controllers\FeederUserController;
use App\Http\Controllers\FeedingTimeController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\UserController;
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
Route::get('feeders/{feeder}', [FeederController::class, 'show']);
Route::put('feeders/{feeder}', [FeederController::class, 'update']);

/**
 * UserFeederUserController routes:
 */
Route::get('feeder_user', [FeederUserController::class, 'index']);

/**
 * FeedingTimeController routes:
 */
Route::get('feeding_times', [FeedingTimeController::class, 'index']);
Route::post('feeding_times', [FeedingTimeController::class, 'store']);
Route::get('feeding_times/{feeding_time}', [FeedingTimeController::class, 'show']);
Route::put('feeding_times/{feeding_time}', [FeedingTimeController::class, 'update']);

/**
 * FoodController routes:
 */
Route::get('foods', [FoodController::class, 'index']);
Route::post('foods', [FoodController::class, 'store']);
Route::get('foods/{food}', [FoodController::class, 'show']);
Route::put('foods/{food}', [FoodController::class, 'update']);

/**
 * UserController routes:
 */
Route::get('users', [UserController::class, 'index']);
Route::post('users', [UserController::class, 'store']);
Route::get('users/{user}', [UserController::class, 'show']);
Route::put('users/{user}', [UserController::class, 'update']);
