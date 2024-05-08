<!DOCTYPE html>
<html>
<head>
  <title>User page</title>
</head>
<body>
  <h1>User page</h1>
  <link rel="stylesheet" href="path/to/your/style.css">

  <div style="display: flex; justify-content: center;">

    <a href="{{ url('/create_ticket') }}">EDIT TICKET</a>
    <a href="{{ url('/create_ticket') }}">NEW TICKET</a>
  </div>

  <?php
  // Your PHP code goes here
  ?>
</body>
</html>
