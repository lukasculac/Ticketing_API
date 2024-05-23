<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\Ticket;

//USER ROUTES
Route::get('/', [UserController::class, 'index']);

#Create ticket page
Route::get('/create_ticket', [UserController::class, 'create_ticket']);

#Store data from form
Route::post('/tickets', [UserController::class, 'store_ticket']);

#Search for ticket page
Route::get('/Search_ticket', [UserController::class, 'search_ticket_page']);
Route::post('/find_tickets', [UserController::class, 'find_ticket']);

#edit ticket page
Route::get('/edit_page/{id}', function ($id){
    return view('edit_page', ['id' => $id]);
})->name('edit_page');

#gets id from ticket and updates that ticket in the database
Route::post('update_ticket/{id}', [UserController::class, 'update_ticket'])->name('update_ticket');

#deletes files from database
Route::delete('/delete_file/{id}', [UserController::class, 'delete_file'])->name('delete_file');


//AGENT ROUTES

# create a new route for the agent page
Route::get('/agent', function () {
    return view('agent');
});




