<?php

use Illuminate\Http\Request;
use App\Http\Controllers\FeederController;
use App\Http\Controllers\FeederUserController;
use App\Http\Controllers\FeedingTimeController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\DayController;
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
 * AuthenticateController routes:
 */
Route::post('register', [AuthenticateController::class, 'register']);
Route::post('login', [AuthenticateController::class, 'login']);
Route::group(['middleware' => ['auth:sanctum']], function (){
    
    /**
     * FeederController routes:
     */
    Route::get('feeders', [FeederController::class, 'index']);
    Route::post('feeders', [FeederController::class, 'store']);
    Route::get('feeders/{feeder}', [FeederController::class, 'show']);
    Route::put('feeders/{feeder}', [FeederController::class, 'update']);
    Route::delete('feeders/{feeder}', [FeederController::class, 'destroy']);
    Route::get('feeders/{feeder}/users', [FeederController::class, 'show_users']);
    Route::get('feeders/get_id/{code_id}', [FeederController::class, 'get_id']);
    Route::get('feeders/{feeder}/feeding_times', [FeederController::class, 'show_feeding_times']);
    Route::get('feeders/{feeder}/records', [FeederController::class, 'show_records']);

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
    Route::delete('feeding_times/{feeding_time}', [FeedingTimeController::class, 'destroy']);

    /**
     * FoodController routes:
     */
    Route::get('foods', [FoodController::class, 'index']);
    Route::post('foods', [FoodController::class, 'store']);
    Route::get('foods/{food}', [FoodController::class, 'show']);
    Route::put('foods/{food}', [FoodController::class, 'update']);
    Route::delete('foods/{food}', [FoodController::class, 'destroy']);

    /**
     * UserController routes:
     */
    Route::get('users', [UserController::class, 'index']);
    Route::post('users', [UserController::class, 'store']);
    Route::get('users/{user}', [UserController::class, 'show']);
    Route::put('users/{user}', [UserController::class, 'update']);
    Route::delete('users/{user}', [UserController::class, 'destroy']);
    Route::get('users/{user}/feeders', [UserController::class, 'show_feeders']);
    
    /**
    * RecordController routes:
    */
    Route::get('records', [RecordController::class, 'index']);
    Route::post('records', [RecordController::class, 'store']);
    Route::get('records/{record}', [RecordController::class, 'show']);
    Route::put('records/{record}', [RecordController::class, 'update']);
    Route::delete('records/{record}', [RecordController::class, 'destroy']);

     /**
    * DayController routes:
    */
    Route::get('days', [DayController::class, 'index']);
    Route::post('days', [DayController::class, 'store']);
    Route::get('days/{day}', [DayController::class, 'show']);
    Route::put('days/{day}', [DayController::class, 'update']);
    Route::delete('days/{day}', [DayController::class, 'destroy']);

    
    /**
     * Logout
     */
    Route::post('logout', [AuthenticateController::class, 'logout']);
});
