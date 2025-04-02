<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/apps', [AppController::class, 'index'])->name('apps.index');

Route::get('/apps/create', [AppController::class, 'create'])->name('apps.create');

Route::get('/apps/{app}', [AppController::class, 'show'])->name('apps.show');

Route::post('/apps', [AppController::class, 'store'])->name('apps.store');

Route::delete('/apps/{app}', [AppController::class, 'destroy'])->name('apps.destroy');