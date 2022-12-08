<?php

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
Route::get('/rooms', [RoomController::class, 'index']);

Route::get('/users/{id}', [UserController::class, 'show']);
Route::get('/rooms/{id}', [RoomController::class, 'show']);

Route::resource('guests', GuestController::class);
Route::resource('reservations', ReservationController::class);