<!DOCTYPE html>
<html>
<head>
    <title>Home page</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
<body>
    <x-header />

    <div class="button-container">
        <div class="button-wrapper">
            <a href="{{ url('/Search_ticket') }}" class="edit-button">EDIT TICKET</a>
        </div>
        <div class="button-wrapper">
            <a href="{{ url('/create_ticket') }}" class="new-button">NEW TICKET</a>
        </div>
    </div>

    <?php
    // Your PHP code goes here
    ?>
</body>
</html>
