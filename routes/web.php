<?php

use App\Http\Controllers\Admin\LoginController as AdminLoginController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboadController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::group(['prefix' => 'account'], function () {
    Route::group(['middleware' => 'guest'], function () {



        Route::get('login', [LoginController::class, 'index'])->name('login');
        Route::get('register', [LoginController::class, 'RegisterView'])->name('register');
        Route::post('registeruser', [LoginController::class, 'Register'])->name('Storeregister');
        Route::post('login/authenticate', [LoginController::class, 'Authenticate'])->name('loginAuthenticate');
    });


    Route::group(['middleware' => 'auth'], function () {

        Route::get('logout', [LoginController::class, 'logout'])->name('logout');
        Route::get('dashboard', [DashboadController::class, 'Dashboard'])->name('dashboard');
    });
});







Route::group(['prefix' => 'admin'], function () {
    Route::group(['middleware' => 'admin.guest'], function () {



        Route::get('login', [AdminLoginController::class, 'Adminlogin'])->name('adminlogin');
        Route::post('login/authenticate', [AdminLoginController::class, 'Authenticate'])->name('adminloginauthenticate');
       
    });


    Route::group(['middleware' => 'admin.auth'], function () {

        Route::get('admindashboard', [AdminLoginController::class, 'Admindashboard'])->name('admindashboard');
        Route::get('logout', [AdminLoginController::class, 'Adminlogout'])->name('adminlogout');
    });
});
