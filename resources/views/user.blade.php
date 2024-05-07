<!DOCTYPE html>
<html>
<head>
  <title>User page</title>
</head>
<body>
  <h1>User page</h1>
  <link rel="stylesheet" href="path/to/your/style.css">

  <div style="display: flex; justify-content: center;">
    
    <a href="{{ url('/login_page') }}">EDIT TICKET</a>
    <a href="{{ url('/login_page') }}">NEW TICKET</a>
  </div>
  
  <?php
  // Your PHP code goes here
  ?>
</body>
</html>