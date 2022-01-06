<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\UserController;
// use App\Http\Controllers\Api\VisitedController;
use App\Models\User;
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
    return  $request->user();
});

Route::middleware('auth:sanctum')->get('/user-visited', function (Request $request) {
    // $user = User::findOrFail(2); 

    return response()->json([
        $request->user(),
        // $user->places

    ],200);
});

Route::resource('user-visited', UserController::class)
  ->only(['show'])
  ->middleware('auth:sanctum');

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::resource('places',App\Http\Controllers\Api\PlacesController::class)->only(['index', 'store', 'update', 'show', 'destroy']);

Route::resource('visited',App\Http\Controllers\Api\VisitedController::class)->only(['store', 'destroy']);

