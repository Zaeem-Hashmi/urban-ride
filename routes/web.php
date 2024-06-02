<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StaffController;
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
Route::view('/booking','client.booking')->name('booking');
Route::get('/bookings',[BookingController::class,'bookings'])->name('rides');

Auth::routes();

Route::group(['middleware' => ['auth']], function() {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::post('/home', [App\Http\Controllers\HomeController::class, 'ajax'])->name('ajax');

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
        Route::get('/driverInfo',[DriverController::class,'driverInfo'])->name('driverInfo.index');
        Route::get('/vehicle',[DriverController::class,'vehicle'])->name('diver.vehicle');
        Route::get('/bookings',[DriverController::class,'bookings'])->name('diver.bookings');
    });
    Route::group(['prefix'=>'booking'],function () {
        // Route::get('/create',[DriverController::class,'create'])->name('driver.create');
        Route::post('/store',[BookingController::class,'store'])->name('booking.store');
        Route::get('/index',[BookingController::class,'index'])->name('booking.index');
        Route::post('/',[BookingController::class,'ajax'])->name('booking.ajax');
        Route::get('/{booking}/assignDriver',[BookingController::class,'assignDriver'])->name('booking.assignDriver');
        Route::put('/{booking}/update',[BookingController::class,'update'])->name('booking.update');
        Route::get('/{booking}/jobDone',[BookingController::class,'jobDone'])->name('booking.jobDone');
        Route::get('/{booking}/delete',[BookingController::class,'delete'])->name('booking.delete');
    });
    Route::group(['prefix'=>'expense'],function () {
        Route::post('/store',[ExpenseController::class,'store'])->name('expense.store');
        Route::get('/create',[ExpenseController::class,'create'])->name('expense.create');
        Route::get('{exp}/edit',[ExpenseController::class,'edit'])->name('expense.edit');
        Route::get('/index',[ExpenseController::class,'index'])->name('expense.index');
        Route::post('/',[ExpenseController::class,'ajax'])->name('expense.ajax');
        Route::post('/{exp}/update',[ExpenseController::class,'update'])->name('expense.update');
        Route::get('/{exp}/delete',[ExpenseController::class,'delete'])->name('expense.delete');
    });
    Route::group(['prefix'=>'staff'],function () {
        Route::get('/create',[StaffController::class,'create'])->name('staff.create');
        Route::post('/store',[StaffController::class,'store'])->name('staff.store');
        Route::get('/index',[StaffController::class,'index'])->name('staff.index');
        Route::post('/',[StaffController::class,'ajax'])->name('staff.ajax');
        Route::get('/{staff}/edit',[StaffController::class,'edit'])->name('staff.edit');
        Route::put('/{staff}/update',[StaffController::class,'update'])->name('staff.update');
        Route::get('/{staff}/delete',[StaffController::class,'delete'])->name('staff.delete');
    });
});
