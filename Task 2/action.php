 <!DOCTYPE HTML>
<html>
<head>
<title>Complete Form Validation</title>
</head>
<body>
<p>Form Validation in PHP</p>
<?php

   if (empty($_POST["name"]))
     {echo "Name is required <br>";}
   else if(strlen($_POST["name"])<=5)
     {
      echo "Must be at least 5 characters <br>";
     
     }
     else {echo $_POST["name"];
     echo "<br>";}
     if (empty($_POST["age"]))
        echo "age is required <br>";
     else {echo $_POST["age"];
        echo "<br>";}
     
     if (empty($_POST["email"]))
     echo "email is required <br>";
     else {echo $_POST["email"];
        echo "<br>";}

    if (empty($_POST["password"]))
        echo "password is required <br>";
     else {echo $_POST["password"];
        echo "<br>";}
     if(empty($_POST["designation"]))
     echo "Please select a radio <br>";
     else {echo $_POST["designation"]; echo "<br>";}
     

    if (isset($_POST["checkbox1"])|| isset($_POST["checkbox2"]) || isset($_POST["checkbox3"]))
    {
        echo "Preffered Language ";
        if (isset($_POST["checkbox1"]))
        {
            echo $_POST["checkbox1"];
        }
        if (isset($_POST["checkbox2"]))
        {
            echo $_POST["checkbox2"];
        }
        if (isset($_POST["checkbox3"]))
        {
            echo $_POST["checkbox3"];
        }

    }
    else
    {
        echo "you have not selected";
    }
    
?>
</body>



