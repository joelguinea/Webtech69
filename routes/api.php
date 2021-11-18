<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\HotelController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// TEST-QUERY API
Route::get('test-query', [UserController::class, 'testQuery']);
Route::get('hotelname', [HotelController::class,'getHotelName']);
Route::get('address', [HotelController::class,'searchAddress']);

// LOG-IN AND REGISTER API
Route::post('login', [UserController::class, 'login']);
Route::post('register', [UserController::class, 'register']);
Route::post('booked', [UserController::class, 'booked']);
Route::post('reset-password', [UserController::class, 'resetPassword']);

// Hotel API
Route::get('get-all-hotels', [HotelController::class, 'getAllHotels']);
Route::get('get-hotel', [HotelController::class, 'getHotel']);
Route::get('search-hotel', [HotelController::class, 'searchHotel']);