<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



# create a new route for the agent page
Route::get('/agent', function () {
    return view('agent');
});

#Create login page
Route::get('/login_page', function () {
    return view('login_page');
});

Route::post('/user', function () {
    dd(request()->all());
});