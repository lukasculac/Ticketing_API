<!DOCTYPE html>
<html>
<head>
  <title>Create ticket</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
<body>
<x-header />



<form action="/tickets" method="post" enctype="multipart/form-data">
  @csrf

        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="subject">Department:</label>
            <select id="department" name="department">
                <option value="Sales">Sales</option>
                <option value="Support">Support</option>
                <option value="Finance">Finance</option>
                <option value="HR">Human resources</option>
            </select>
        </div>
        <div>
            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>
        </div>
        <div>
            <label for="file">Attach File:</label>
            <input type="file" id="file" name="files[]" multiple>
        </div>
        <div>
            <button type="submit" style="color:blue;text-align:center;">Submit</button>
        </div>
</form>


  <?php

  ?>
</body>
</html>

