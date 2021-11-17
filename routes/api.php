<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\APIController;
use App\Http\Controllers\API\PostController;

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
Route::get('test-query', [UsersController::class, 'testQuery']);

// LOG-IN AND REGISTER API
Route::post('login', [APIController::class, 'login']);
Route::post('register', [APIController::class, 'register']);

// POST API
Route::get('get-all-posts', [PostController::class, 'getAllPosts']);
Route::get('get-post', [PostController::class, 'getPost']);
Route::get('search-post', [PostController::class, 'searchPost']);