<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VehicleTypeController;
use Illuminate\Support\Facades\Route;

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



Route::view('/','client.home')->name('index');
Route::view('/about','client.about')->name('about');
Route::view('/contact','client.contact')->name('contact');
Route::view('/car','client.car')->name('car');

Auth::routes();

Route::group(['middleware' => ['auth']], function() {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);

    Route::group(['prefix'=>'vehicle'],function () {
        Route::get('/create',[VehicleTypeController::class,'create'])->name('vehicle.create');
        Route::post('/store',[VehicleTypeController::class,'store'])->name('vehicle.store');
        Route::get('/index',[VehicleTypeController::class,'index'])->name('vehicle.index');
        Route::post('/',[VehicleTypeController::class,'ajax'])->name('vehicle.ajax');
        Route::get('/{vehicleType}/edit',[VehicleTypeController::class,'edit'])->name('vehicle.edit');
        Route::put('/{vehicleType}/update',[VehicleTypeController::class,'update'])->name('vehicle.update');
        Route::get('/{vehicleType}/delete',[VehicleTypeController::class,'delete'])->name('vehicle.delete');
    });
    Route::group(['prefix'=>'driver'],function () {
        Route::get('/create',[DriverController::class,'create'])->name('driver.create');
        Route::post('/store',[DriverController::class,'store'])->name('driver.store');
        Route::get('/index',[DriverController::class,'index'])->name('driver.index');
        Route::post('/',[DriverController::class,'ajax'])->name('driver.ajax');
        Route::get('/{driver}/edit',[DriverController::class,'edit'])->name('driver.edit');
        Route::put('/{driver}/update',[DriverController::class,'update'])->name('driver.update');
        Route::get('/{driver}/delete',[DriverController::class,'delete'])->name('driver.delete');
    });
    Route::group(['prefix'=>'booking'],function () {
        // Route::get('/create',[DriverController::class,'create'])->name('driver.create');
        Route::post('/store',[BookingController::class,'store'])->name('booking.store');
        Route::get('/index',[BookingController::class,'index'])->name('booking.index');
        Route::post('/',[BookingController::class,'ajax'])->name('booking.ajax');
        Route::get('/{booking}/assignDriver',[BookingController::class,'assignDriver'])->name('booking.assignDriver');
        Route::put('/{booking}/update',[BookingController::class,'update'])->name('booking.update');
        Route::get('/{booking}/delete',[BookingController::class,'delete'])->name('booking.delete');
    });
});
