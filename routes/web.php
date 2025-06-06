<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('/users','App\Http\Controllers\UserController');

Route::resource('/articles','App\Http\Controllers\ArticleController');