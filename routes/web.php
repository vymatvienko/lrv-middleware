<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/userinfo', [App\Http\Controllers\UserInfoController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/userinfo', [App\Http\Controllers\UserInfoController::class, 'index']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
