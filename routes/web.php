<?php

use App\Http\Controllers\user;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [user::class, 'home'])->name('home');
