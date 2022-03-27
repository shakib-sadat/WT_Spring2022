<?php

include ("../model/db.php");
if(isset($_POST["Submit"]))
{

    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $age=$_POST["age"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    
    $designation=$_POST["designation"];
    $salary=$_POST["salary"];

    $language=$_POST["language"];
    $chk="";  
    foreach($language as $chk1)  
    {  
        $chk .= $chk1.",";  
    }  

    

    if(empty($fname) || empty($lname) ||empty($age) || empty($email) ||empty($password) || empty($language)|| empty($designation)|| empty($salary) )
    {

        echo "please insert all fields";
    }

    else
    {
        $myDB=new DB();
        $conobj=$myDB->opencon();
        $myDB->InsertData($fname,$lname,$age,$email,$password,$chk,$designation,$salary,"person",$conobj);
        $myDB->closecon($conobj);
    }
}
?>