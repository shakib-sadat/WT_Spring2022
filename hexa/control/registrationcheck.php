<?php

include ("../model/db.php");
if(isset($_POST["submit"]))
{
    $uname=$_POST["uname"];
    $usertype=isset($_POST["usertype"])?$_POST["usertype"]:"";

    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $age=$_POST["age"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    
    $designation=isset($_POST["designation"])?$_POST["designation"]:"";
    $dob=$_POST["dob"];
    $gender=isset($_POST["gender"])?$_POST["gender"]:"";
    $nid=$_POST["nid"];
    $contact=$_POST["contact"];
    $address=$_POST["address"];
    $experience=$_POST["experience"];
    $language=$_POST["language"];
    header("refresh:1 ; url=../view/registration.php");
    

    

    if(empty($fname) || empty($lname) ||empty($age) || empty($email) ||empty($password) || empty($language)|| empty($designation)|| empty($usertype)|| empty($uname)|| empty($dob)|| empty($gender)|| empty($nid)|| empty($contact)|| empty($address)|| empty($experience) )
    {

        echo "Please insert all fields";
      
    }

    else
    {
        $myDB=new DB();
        $conobj=$myDB->opencon();
        $myDB->InsertData($usertype,$fname,$lname,$age,$uname,$dob,$email,$password,$gender,$nid,$contact,$address,$language,$designation,$experience,"user",$conobj);
        $myDB->closecon($conobj);
    }
}
?>