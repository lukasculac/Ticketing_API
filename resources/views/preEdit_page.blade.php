<!DOCTYPE html>
<html>
<head>
    <title>Edit ticket</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
<body>
<x-header/>

<div class="form-container">
    <p>Fill in the form below so we can find your ticket</p>
    <div>
        <form action="/find_tickets" method="post">
            @csrf
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name"><br>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email"><br>
            <div style="margin-top: 10px">
                <input type="submit" value="Submit" class="new-button">
            </div>
        </form>
    </div>
</div>

<?php
// Your PHP code goes here
?>
</body>
</html>
