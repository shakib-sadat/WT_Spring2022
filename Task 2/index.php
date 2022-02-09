<!DOCTYPE html>
<html>
  <head> </head>
  <body>
    <h3>Registration Form</h3>
    <hr />
    <form action='action.php' method='post' >   
    <table>
      <tr>
        <td>Name:</td>
        <td><input type="text" name="name" /> <br /></td>
      </tr>
      <tr>
        <td>Age:</td>
        <td><input type="number" name="age" /> <br /></td>
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
        <td>Preferred Language:</td>
        <td>
          <input type="checkbox" name="checkbox1" value="JAVA" /> JAVA <input type="checkbox" name="checkbox2" value="PHP" /> PHP
          <input type="checkbox" name="checkbox3" value="C++ " /> C++ <br />
        </td>
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
        <td>Please choose a file:</td>
        <td><input type="file" /> <br /></td>
      </tr>
      <tr>
        <td><input type="submit" /> <input type="reset" /></td>
      </tr>
    </table>
    </form>
  </body>
</html>
