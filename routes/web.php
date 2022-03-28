<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RoomtypeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\BookingController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('dashboard', function () {
    return view('dashboard');
});

Route::get('/', function () {
    return view('Home');
});

//Admin login
Route::get('admin/login',[AdminController::class,'login'] );
Route::post('admin/login',[AdminController::class,'check_login']);
Route::get('admin/logout',[AdminController::class,'logout']);

//Admin dashboard
Route::get('admin', function () {
    return view('dashboard');
});

//For Proccessing page
Route::get('book', function () {
    return view('redirecting');
});


//Roomtype routes
Route::get('admin/roomtype/{id}/delete', [RoomtypeController::class,'destroy'] );
Route::resource('admin/roomtype', RoomtypeController::class );


//Room routes
Route::get('admin/room/{id}/delete', [RoomController::class,'destroy'] );
Route::resource('admin/room', RoomController::class );

//customer routes
Route::get('admin/customer/{id}/delete', [CustomerController::class,'destroy'] );
Route::resource('admin/customer', CustomerController::class );

// Booking
Route::get('admin/booking/{id}/delete',[BookingController::class,'destroy']);
Route::get('admin/booking/available-rooms/{checkin_date}',[BookingController::class,'available_rooms']);
Route::resource('admin/booking',BookingController::class);


Route::get('book/customerbooking',[BookingController::class,'front_booking']);
Route::post('book/customerbooking',[BookingController::class,'front_booking']);