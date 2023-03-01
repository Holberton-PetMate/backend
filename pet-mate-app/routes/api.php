<?php

use Illuminate\Http\Request;
use App\Http\Controllers\FeederController;
use App\Http\Controllers\FeederUserController;
use App\Http\Controllers\FeedingTimeController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\FeedingRecordController;
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

// /**
//  * AuthenticateController routes:
//  */
// Route::post('register', [AuthenticateController::class, 'register']);
// Route::post('login', [AuthenticateController::class, 'login']);
// Route::group(['middleware' => ['auth:sanctum']], function (){

    /**
     * FeederController routes:
     */
    Route::get('feeders', [FeederController::class, 'index']);
    Route::post('feeders', [FeederController::class, 'store']);
    Route::get('feeders/check_redeemed', [FeederController::class, 'check_redeemed']);
    Route::get('feeders/{feeder}', [FeederController::class, 'show']);
    Route::put('feeders/{feeder}', [FeederController::class, 'update']);
    Route::delete('feeders/{feeder}', [FeederController::class, 'destroy']);
    Route::get('feeders/{feeder}/users', [FeederController::class, 'show_users']);
    Route::get('feeders/{feeder}/feeding_times', [FeederController::class, 'show_feeding_times']);
    Route::get('feeders/{feeder}/notifications', [FeederController::class, 'show_notifications']);
    Route::get('feeders/{feeder}/foods', [FeederController::class, 'show_foods']);
    Route::get('feeders/{feeder}/feeding_records', [FeederController::class, 'show_feeding_records']);

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
    Route::post('users/{user}/redeem/{feeder}', [UserController::class, 'redeem_feeder']);
    Route::delete('users/{user}/detach/{feeder}', [UserController::class, 'detach_feeder']);

    /**
    * NotificationController routes:
    */
    Route::get('notifications', [NotificationController::class, 'index']);
    Route::post('notifications', [NotificationController::class, 'store']);
    Route::get('notifications/{notification}', [NotificationController::class, 'show']);
    Route::put('notifications/{notification}', [NotificationController::class, 'update']);
    Route::delete('notifications/{notification}', [NotificationController::class, 'destroy']);

     /**
    * FeedingRecordController routes:
    */
    Route::get('feeding_records', [FeedingRecordController::class, 'index']);
    Route::post('feeding_records', [FeedingRecordController::class, 'store']);
    Route::get('feeding_records/{feeding_record}', [FeedingRecordController::class, 'show']);
    Route::put('feeding_records/{feeding_record}', [FeedingRecordController::class, 'update']);
    Route::delete('feeding_records/{feeding_record}', [FeedingRecordController::class, 'destroy']);


//     /**
//      * Logout
//      */
//     Route::post('logout', [AuthenticateController::class, 'logout']);
// });
