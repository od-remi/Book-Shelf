<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PostController@index');
Route::get('/{post}','PostController@show');