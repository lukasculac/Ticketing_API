<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', function (){
    return view('user');
});

# create a new route for the agent page
Route::get('/agent', function () {
    return view('agent');
});

#Create ticket page
Route::get('/create_ticket', function () {
    return view('create_ticket');
});

Route::post('/tickets', function () {
    \App\Models\Ticket::create([
        'name' => request('name'),
        'email' => request('email'),
        'department' => request('department'),
        'message' => request('message')
    ]);
});


