<?php
class DB
{
    function opencon()
    {
        $DBHostname="localhost";
        $DBUsername="root";
        $DBpass="";
        $DBname="testdb";
        $conn=new mysqli($DBHostname,$DBUsername,$DBpass,$DBname);
        if($conn->connect_error)
        {
            echo "Can not connect to Database" .$conn->connect_error;
        }
        return $conn;
    }
   function InsertData($fname,$lname,$age,$email,$password,$language,$designation,$salary,$tablename,$conn)
   {
    $sqlst="INSERT INTO person(fname,lname,age,email,password,language,designation,salary) VALUES('$fname','$lname',$age,'$email','$password','$language','$designation',$salary)";
    
    if($conn->query($sqlst)=== TRUE)
    {
        echo "Data Inserted Successfully";
    }
    else
    {
        echo "Data not Inserted" .$conn->error;
        
    }
   }
    
   function closecon($conn)
   {
    $conn->close();
   }
}
?>
