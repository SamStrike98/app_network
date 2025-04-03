<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

// Protected from authenticated users
Route::middleware('guest')->controller(AuthController::class)->group(function(){
    Route::get('/register', 'showRegister')->name('show.register');
    Route::get('/login', 'showLogin')->name('show.login');
    Route::post('/register', 'register')->name('register');
    Route::post('/login', 'login')->name('login');
});



Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// Protected from unauthenticated users
Route::middleware('auth')->controller(AppController::class)->group(function(){
    Route::get('/apps', 'index')->name('apps.index');
    Route::get('/apps/create', 'create')->name('apps.create')->middleware('auth');
    Route::get('/apps/{app}', 'show')->name('apps.show');
    Route::post('/apps', 'store')->name('apps.store');
    Route::delete('/apps/{app}', 'destroy')->name('apps.destroy');
});
