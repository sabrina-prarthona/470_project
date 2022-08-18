<!DOCTYPE html>
<html>
    <head>
        <title>Covid care project</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        
    </head>

    <body>
        <div class="container">
        <form action="adminlogin" method="post">

  <div class="container">
  @csrf
    <label for="uname"><b>Username</b></label>
    <input type="text" name="email" placeholder="Enter Username"  required>

    <label for="psw"><b>Password</b></label>
    <input type="password" name="password" placeholder="Enter Password"  required>

    <button type="submit">Login</button>
    
  </div>

  
</form>
               
        </div>
    </body>

</html>
