<!DOCTYPE html>    
<html>    
<head>    
    <title>Login Form</title>    
    <link rel="stylesheet"  href="teststyle.css">    
</head>    
<body>    
    <h2>Login Page</h2><br>
<div class="login">
    <form action="../control/datahandle.php" method="post">
<label for="email">Email:</label><br>
  <input type="text" id="email" name="email"><br>
  <label for="password">Password:</label><br>
  <input type="password" id="password" name="password"><br>
  <input type="submit" id="login" name="login" value="Login">
  <input type = "checkbox" id ="logincookie" name = "remember"><label for ="login">Remember Me</label><br>
  <br> <br><br>
  <a href="registration.php">signup</a>
</div>    
</body>    
</html> 