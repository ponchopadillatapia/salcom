<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD
Route::get('/login', function () {
    return view('login');
=======
Route::get('/login1', function () {
    return view('login1');
>>>>>>> dd5c2201f7dcda7078d2d4994e92d282b0580979
});