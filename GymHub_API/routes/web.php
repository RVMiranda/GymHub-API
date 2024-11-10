<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\loginController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/eduardinho', [HomeController::class, 'Eduardo']);
Route::get('/home', [HomeController::class, 'Home']);
Route::get('/login', [loginController::class, 'login']);