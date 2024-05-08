<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class UserController extends Controller
{
    public function index(){
        return view('user');
    }

    public function create_ticket(){
        return view('create_ticket');
    }

    public function store_ticket() {
        Ticket::create(request()->all());
        return redirect('/');
    }


    //search for ticket handler
    public function search_ticket_page(){
        return view('preEdit_page');
    }
    public function find_ticket(Request $request){
        $inputData = $request->only(['name', 'email']);
        $ticket = Ticket::where($inputData)->first();
        if ($ticket) {
            // Object found, perform any action you need
            return redirect()->route('edit_page', ['id' => $ticket->id]);
        } else {
            // Object not found, display a message
            return redirect()->back()->with('error', 'Ticket not found.');
        }
    }

    #update ticket handler
    public function update_ticket($id){
        $ticket = Ticket::find($id);
        $ticket->update(request()->all());
        return redirect('/');
    }





}
