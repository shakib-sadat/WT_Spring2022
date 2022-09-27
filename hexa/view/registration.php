<!DOCTYPE html>
<html>
  <head><link rel="stylesheet"  href="teststyle.css"> </head>
  <body>
    <p class="form">Registration Form</p>
    <hr>
  <div class="registration">
    <form action='../control/registrationcheck.php'   method='post'>   
    <table>
        <td>User Type:</td>
        <td><input type="radio" name="usertype" value="admin" /> Admin 
        <input type="radio" name="usertype" value="employee" /> Employee
        <input type="radio" name="usertype" value="developer" /> Developer
      </td>
      </tr>
      <tr>
        <td><br>User Name:</td>
        <td><input type="text" name="uname" id="uname" />  <p id = "erroruname" > </p></td>

      </tr>
      <tr>
        <td>First Name:</td>
        <td><input type="text" name="fname" id="fname" /> <p id = "errorfname" > </p></td>
      </tr>
 
      <tr>
        <td>Last Name:</td>
        <td><input type="text" name="lname" id="lname" /> <br /> <p id = "errorlname" > </p></td>
 
      </tr>
      <tr>
        <td>Age:</td>
        <td><input type="number" name="age" id="age" /> <br /> <p id = "errorage" ></td>
      </tr>

      <tr>
        <td>Data of Birth:</td>
        <td><input type="date" name="dob" id="dob" /> <br /> <p id="errordob"> </p> </td>
      </tr>
      
      <tr>
      <td>Email:</td>
        <td><input type="text" name="email" id="email" /> <p id = "erroremail" > </p> <br /></td>
        
      </tr>
      <tr>
        <td>Password:</td>
        <td><input type="password" name="password" id="password" />  <p id = "errorpassword" > </p> </td>
      </tr>
      <tr>
      <td>Gender:</td>
      <td><input type="radio" name="gender" value="male" /> Male 
      <input type="radio" name="gender" value="female" /> female
      </td>
      </tr>
      <tr>
      <td>Nid No:</td>
      <td><input type="number" name="nid" id="nid"> <br> <p id = "errornid" > </p></td>  
      </tr>
      <tr>
      <td>Contact No:</td>
      <td><input type="number" name="contact" id="contact"> <br> <p id = "errorcontact" > </p> </td>
      </tr>
      <tr>
      <td>Address:</td>
      <td><input type="text" id="address" name="address"></td>
      </tr>
      <tr>
        <td>Preferred Language:</td>
        <td>
          <input type="text" name="language"  id="language" /> <br>
          <p id = "errorlanguage" > </p>
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
      <td>Experience:</td>
      <td><input type="text" id="experience" name="experience"></td>
      </tr>
        <td><input type="submit" name="submit" id="submitbutton" /> <input type="reset" name="reset" id="resetbutton" /></td>
      </tr>
    </table>

    </form>
    </div>
        <script src="../control/validate.js"> </script>
      
  </body>
</html>