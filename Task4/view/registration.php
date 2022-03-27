<?php

        include ("../control/registrationcheck.php");

?>


<!DOCTYPE html>
<html>
  <head> </head>
  <body>
    <h3>Registration Form</h3>
    <hr />
    <form action='../control/registrationcheck.php' method='post'>   
    <table>
      <tr>
        <td>First Name:</td>
        <td><input type="text" name="fname" /> <br /></td>
      </tr>
      <tr>
        <td>Last Name:</td>
        <td><input type="text" name="lname" /> <br /></td>
      </tr>
      <tr>
        <td>Age:</td>
        <td><input type="number" name="age" /> <br /></td>
      </tr>
      <tr>
      <td>Email:</td>
        <td><input type="text" name="email" /> <br /></td>
      </tr>
      <tr>
        <td>Password:</td>
        <td><input type="password" name="password" /> <br /></td>
      </tr>
      <tr>
        <td>Preferred Language:</td>
        <td>
          <input type="checkbox" name="language[]" value="JAVA" /> JAVA <input type="checkbox" name="language[]" value="PHP" /> PHP
          <input type="checkbox" name="language[]" value="C++ " /> C++ <br />
        </td>
      </tr>
      <tr>
        <td>Designation:</td>
        <td>
          <input type="radio" name="designation" value="Junior Programmer" /> Junior Programmer
          <input type="radio" name="designation" value="Senior Programmers" /> Senior Programmer
          <input type="radio" name="designation" value="Prjocet Head" /> Project Head <br />
        </td>
      </tr>
      <tr>
        <td>Salary:</td>
        <td><input type="number" name="salary" /> <br /></td>
      </tr>
      <tr>
        <td><input type="submit" name="Submit" /> <input type="reset" name="reset" /></td>
      </tr>
    </table>
    </form>
  </body>
</html>