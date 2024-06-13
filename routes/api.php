<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('login', 'Auth\LoginController@login');
Route::post('register', 'Auth\RegisterController@register');

Route::get('teams', 'TeamController@index');
Route::post('teams', 'TeamController@store');

Route::get('users', 'UserController@index');
Route::get('users/{id}', 'UserController@show');
Route::patch('users/{id}', 'UserController@update');