<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\Ticket;

Route::get('/', [UserController::class, 'index']);

#Create ticket page
Route::get('/create_ticket', [UserController::class, 'create_ticket']);

#Store data from form
Route::post('/tickets', [UserController::class, 'store_ticket']);

#Search for ticket page
Route::get('/Search_ticket', [UserController::class, 'search_ticket_page']);
Route::post('/find_tickets', [UserController::class, 'find_ticket']);

# create a new route for the agent page
Route::get('/agent', function () {
    return view('agent');
});




