 <!DOCTYPE HTML>
<html>
<head>
<title>Complete Form Validation</title>
</head>
<body>
<p>Form Validation in PHP</p>
<?php
   $_checkbox1 = $_checkbox2 = $_checkbox3 = "null";
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
            $_checkbox1 = $_POST["checkbox1"];
        }
        if (isset($_POST["checkbox2"]))
        {
           $_checkbox2 = $_POST["checkbox2"];
        }
        if (isset($_POST["checkbox3"]))
        {
            $_checkbox3 = $_POST["checkbox3"];
        }

    }
    else
    {
        echo "you have not selected";
    }

    $formdata = array(
          'name'=> $_POST["name"],
          'age'=> $_POST["age"],
          'email'=>$_POST["email"],
          'radio'=>$_POST["designation"],
          'checkbox1' => $_checkbox1 ,
          'checkbox2' => $_checkbox2 ,
          'checkbox3' => $_checkbox3 ,

       );
       $existingdata = file_get_contents('data.json');
       $tempJSONdata = json_decode($existingdata);
       $tempJSONdata[] =$formdata;

       $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);


       if(file_put_contents("data.json", $jsondata)) {
            echo "Data successfully saved <br>";
        }
       else 
            echo "no data saved";

     $data = file_get_contents("data.json");
     $mydata = json_decode($data);



     foreach($mydata as $myobject)
     {
     foreach($myobject as $key=>$value)
    {
        echo "your ".$key." is ".$value."<br>";
    } 
    }
    
    
	
    
?>
</body>



