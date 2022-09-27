<?php
include ("../model/db.php");

if($_POST["taskname"]=="")
{
    echo "Enter text to show";
}
else{
    

    $mydb=new DB();
    $conobj=$mydb->opencon();
    
    $mydata=$mydb->SearchTask($conobj, "task",$_POST["taskname"]);
    if($mydata->num_rows > 0)
    {
        while($row=$mydata->fetch_assoc())
        {
     
          echo $row["taskname"];
           
        }


    }
    else{
        echo "No Task found";
    }
    

}


?>