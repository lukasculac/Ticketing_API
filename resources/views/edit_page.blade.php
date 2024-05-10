<!DOCTYPE html>
<html>
<head>
    <title>Edit page</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
<body>
<x-header />

@php
    /** @var int $id */
    $ticket = \App\Models\Ticket::find($id);
@endphp

<form action="{{ route('update_ticket', ['id' => $ticket->id]) }}" method="post" enctype="multipart/form-data">
    @csrf

    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{$ticket->name}}" required>
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{$ticket->email}}" required>
    </div>
    <div>
        <label for="subject">Department:</label>
        <select id="department" name="department">
            <option value="Sales" {{ $ticket->department == 'Sales' ? 'selected' : '' }}>Sales</option>
            <option value="Support" {{ $ticket->department == 'Support' ? 'selected' : '' }}>Support</option>
            <option value="Finance" {{ $ticket->department == 'Finance' ? 'selected' : '' }}>Finance</option>
            <option value="HR" {{ $ticket->department == 'HR' ? 'selected' : '' }}>Human resources</option>
        </select>
        <div>
            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4">{{$ticket->message}}</textarea>
        </div>
        <div>
            <label for="file">Attach File:</label>
            <input type="file" id="file" name="file">
        </div>
        <div>
            <button type="submit" style="color:blue;text-align:center;">Submit</button>

        </div>
    </div>
</form>

<div>
    <p>Status of your ticket is: </p>
    <p style="color:{{$ticket->status == 'pending' ? 'red' : 'green'}}">{{$ticket->status == 'pending' ? 'PENDING' : 'RESOLVED'}}</p>
</div>


</body>
</html>
