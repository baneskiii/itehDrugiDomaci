<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\UserController;
use App\Models\Reservation;
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

Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{id}', [UserController::class, 'show']);

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::resource('rooms', RoomController::class)->only(['index', 'show']);
Route::resource('guests', GuestController::class)->only(['index', 'show']);
Route::resource('reservations', ReservationController::class)->only(['index', 'show']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get(
        '/profile',
        function (Request $request) {
            return auth()->user();
        }
    );

    Route::resource('rooms', RoomController::class)->only(['update', 'store', 'destroy']);

    Route::resource('guests', GuestController::class)->only(['update', 'store', 'destroy']);

    Route::resource('reservations', ReservationController::class)->only(['update', 'store', 'destroy']);

    Route::post('/logout', [AuthController::class, 'logout']);
});