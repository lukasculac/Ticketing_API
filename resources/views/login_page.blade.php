<!DOCTYPE html>
<html>
<head>
  <title>Login page</title>
</head>
<body>
  
  
  

<form action="/user" method="post" enctype="multipart/form-data">
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
            <select id="subject" name="subject">
                <option value="General Inquiry">Sales</option>
                <option value="Support">Support</option>
                <option value="Feedback">Finance</option>
                <option value="HR">Human resources</option>
            </select>
        </div>
        <div>
            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>
        </div>
        <div>
            <label for="file">Attach File:</label>
            <input type="file" id="file" name="file">
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>

  

  
  
  <?php
  // Your PHP code goes here 
  ?>
</body>
</html>