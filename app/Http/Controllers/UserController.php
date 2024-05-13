<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\File;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index(){
        return view('user');
    }

    public function create_ticket(){
        return view('create_ticket');
    }

    public function search_ticket_page(){
        return view('preEdit_page');
    }

    ////////////////////////////////////////////////////////////////////////


    public function store_ticket(Request $request)
    {
        $ticket = new Ticket();
        $ticket->name = $request->name;
        $ticket->email = $request->email;
        $ticket->department = $request->department;
        $ticket->message = $request->message;
        $ticket->save();


        if($request->hasFile('files.*')) {

            foreach($request->file('files') as $file) {
                $fileName = $this->handleFile($file);
                if($fileName) {
                    $ticket->files()->create(['fileName' => $fileName]);
                }
            }
        }

        return redirect('/');
    }

    public function handleFile($file){
        $fileName = $file->getClientOriginalName();
        $path = $file->storeAs('uploads', $fileName, 'public');

        if($path) {
            return $fileName;
        } else {
            return false;
        }
    }


    //search for ticket handler
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
    public function update_ticket($id, Request $request){
        $ticket = Ticket::find($id);
        $ticket->update($request->except('file'));

        if($request->hasFile('files.*')) {
            foreach($request->file('files') as $file) {
                $fileName = $this->handleFile($file);
                if($fileName) {
                    $ticket->files()->create(['fileName' => $fileName]);
                }
            }
        }

        $ticket->save();
        return redirect('/');
    }

    public function delete_file($id)
    {
        $file = File::find($id);
        if ($file) {
            $fileName = $file->fileName; // Store the file name before deletion

            // Delete the file from storage
            Storage::disk('public')->delete('uploads/' . $fileName);

            // Delete the file record from the database
            $file->delete();
        }
        #return response()->json(['message' => 'File ' . $fileName . ' has been deleted.']);
    }

}
