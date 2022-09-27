<head>
<?php
include("dropdown.php")
?>
<link rel="stylesheet"  href="teststyle.css"> </head>
</head>
<div class="profileupdate">
<body>



<h3>Update Profile<h3>
<form action=""  method='post'>
            <?php
include ("../control/datahandle.php");
$fname=$lname=$age=$uname=$email=$password=$contact=$address=$language=!"";

?>

  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value="<?php echo $_SESSION["fname"];?> "> <br>
  <p id = "errorfname" > </p>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value="<?php echo $_SESSION["lname"];?> "><br>
  <p id = "errorlname" > </p>
  <label for="uname">User name:</label><br>
  <input type="text" id="uname" name="uname" value="<?php echo $_SESSION["uname"];?>"><br>
  <p id = "erroruname" > </p>
  <label for="age">Age:</label><br>
  <input type="text" id="age" name="age" value="<?php echo $_SESSION["age"];?>"><br>
  <p id = "errorage" > </p>
  <label for="email">Email:</label><br>
  <input type="text" id="email" name="email" value="<?php echo $_SESSION["email"];?>"><br>
  <p id = "erroremail" > </p>
  <label for="password">Old Password:</label><br>
  <input type="password" id="oldpassword" name="oldpassword"><br>
  <label for="password">New Password:</label><br>
  <input type="password" id="password" name="newpassword"><br>
  <p id = "errorpassword" > </p>
  <label for="confirmpassword">Confirm Password:</label><br>
  <input type="password" id="confirmpassword" name="confirmpassword"><br>
  <p id = "errorconfirmpassword" > </p>
  <label for="contact">Contact No:</label><br>
  <input type="text" id="contact" name="contact" value="<?php echo $_SESSION["contact"];?>"><br>
  <p id = "errorcontact" > </p>
  <label for="address">Address:</label><br>
  <input type="text" id="address" name="address" value="<?php echo $_SESSION["address"];?>"><br>
  <p id = "erroraddress" > </p>
  <label for="language">Preffered Language:</label><br>
  <input type="text" id="language" name="language" value="<?php echo $_SESSION["language"];?>"><br>
  <p id = "errorlanguage" > </p>
   <br> 

  <input type="submit" id="updateprofilebutton" name="updateprofile" value="Update Profile">
</form>
<script src="../control/validate.js"> </script>


</div>
</body>
</html>