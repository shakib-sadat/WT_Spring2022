<?php
class DB
{
    function opencon()
    {
        $DBHostname="localhost";
        $DBUsername="root";
        $DBpass="";
        $DBname="hexa";
        $conn=new mysqli($DBHostname,$DBUsername,$DBpass,$DBname);
        if($conn->connect_error)
        {
            echo "Can not connect to Database" .$conn->connect_error;
        }
        return $conn;
    }
   function AddNews($title,$description,$domain,$publishdate,$publishtime,$developer,$tablename,$conn)
   {
    $sqlstr="INSERT INTO news(title,description,domain,publishdate,publishtime,developer) VALUES('$title','$description','$domain','$publishdate','$publishtime','$developer')";
    
    if($conn->query($sqlstr)=== TRUE)
    {
        echo "News Added Successfully";
    }
    else
    {
        echo "News not Added" .$conn->error;
        
    }
   }

   function SearchNews($conn,$tablename,$title)
{
    $sqlstr="SELECT * FROM news WHERE title='$title'";
    $results=$conn->query($sqlstr);
    return $results;

}

function ShowNews($conn,$tablename)
{
    $sqlstr="SELECT * FROM news";
    $results= $conn->query($sqlstr);
    return $results;

}

function DeleteNews($tablename,$title,$conn)
{
    $sqlstr1="SELECT * FROM news WHERE title='$title' ";
    $results=$conn->query($sqlstr1);
    $row_cont = $results->num_rows;
    $sqlstr="DELETE FROM news WHERE title='$title'";
    if($conn->query($sqlstr) && $row_cont>0 )
    {
        echo "News Deleted";
    }
    else{
        echo "News Not Deleted".$conn->error;
    }
}

function ApproveNews($tablename,$status,$newsid,$conn)
{
    $sqlstr1="SELECT * FROM news WHERE newsid='$newsid' ";
    $results=$conn->query($sqlstr1);
    $row_cont = $results->num_rows;
    
    $sqlstr="UPDATE news SET status='$status' WHERE newsid='$newsid'";
    if($conn->query($sqlstr) && $row_cont>0)
    {
        echo "Updated News";
    }
    else
    {
        echo "News Not Updated".$conn->error;
    }
}

   function InsertData($usertype,$fname,$lname,$age,$uname,$dob,$email,$password,$gender,$nid,$contact,$address,$language,$designation,$experience,$tablename,$conn)
{
    $sqlstr="INSERT INTO user (usertype,fname,lname,age,uname,dob,email,password,gender,nid,contact,address,language,designation,experience) VALUES 
    ('$usertype','$fname','$lname',$age,'$uname',$dob,'$email','$password','$gender',$nid,$contact,'$address','$language','$designation','$experience')";
    
    if($conn->query($sqlstr)===TRUE)
    {
    echo "Registration Complete";
    }
    else{
        echo "Can't insert".$conn->error;
    }
}
function UpdateData($fname,$lname,$age,$uname,$email,$contact,$address,$language,$tablename,$conn)
{
    $sqlstr1="SELECT * FROM user WHERE email='$email' ";
    $results=$conn->query($sqlstr1);
    $row_cont = $results->num_rows;
    $sqlstr="UPDATE user SET fname='$fname', lname='$lname', age='$age', uname='$uname',email='$email',contact='$contact',address='$address',language='$language' WHERE email='$email'";
    if($conn->query($sqlstr) && $row_cont>0)
    {
        echo "";
    }
    else
    {
        echo "Profile Not updated".$conn->error;
    }

}
function UpdatePassword($oldpassword,$newpassword,$email,$tablename,$conn)
{
    $sqlstr1="SELECT * FROM user WHERE password='$oldpassword' AND email='$email'";
    $results=$conn->query($sqlstr1);
    $row_cont = $results->num_rows;
    $sqlstr="UPDATE user SET password='$newpassword' WHERE email='$email'";
    
    if($row_cont>0)
    {
        $conn->query($sqlstr);
    }
    else
    {
        echo "Profile Not updated".$conn->error;
    }


}


function FetchData($email,$conn,$tablename)
{
    $sqlstr="SELECT * FROM user WHERE email='$email'";
    $results= $conn->query($sqlstr);
    return $results;

}



function ShowGame($conn,$tablename)
{
    $sqlstr="SELECT * FROM game";
    $results= $conn->query($sqlstr);
    return $results;

}

function ApproveGame($tablename,$status,$gameid,$conn)
{
    $sqlstr1="SELECT * FROM game WHERE gameid='$gameid' ";
    $results=$conn->query($sqlstr1);
    $row_cont = $results->num_rows;
    
    $sqlstr="UPDATE game SET status='$status' WHERE gameid='$gameid'";
    if($conn->query($sqlstr) && $row_cont>0)
    {
        echo "Updated Game";
    }
    else
    {
        echo "Game Not Updated".$conn->error;
    }

}

function SearchTask($conn,$tablename,$taskname)
{
$sqlstr="SELECT * FROM task WHERE taskname='$taskname'";
$results=$conn->query($sqlstr);
return $results;
}


function DeleteTask($tablename,$taskname,$conn)
{
    $sqlstr="DELETE FROM task WHERE taskname='$taskname'";
    if($conn->query($sqlstr))
    {
        echo "Task done";
    }
    else{
        echo "not done".$conn->error;
    }
}

function UpdateTask($tablename,$status,$taskname,$conn)
{
    $sqlstr="UPDATE task SET status='$status' WHERE taskname='$taskname'";
    if($conn->query($sqlstr))
    {
        echo "Task pending";
    }
    else
    {
        echo "Task not updated".$conn->error;
    }

}


function login($tablename,$password,$email,$conn)
{
    
    
    $sqlstr="SELECT * FROM user WHERE password='$password' AND email='$email'";
    $results=$conn->query($sqlstr);
    $row_cont = $results->num_rows;
    if($conn->query($sqlstr) && $row_cont>0)
    {
        $_SESSION["email"]=$email;
        echo "Logged In";
        
        header("refresh:2 ;url=http://localhost/hexa/View/dropdown.php");
    }
    else
    {
        echo "Login Failed".$conn->error;
        header("refresh:2 ;url=http://localhost/hexa/View/login.php");
    }

}

function FetchService($conn)
{
    $sqlstr="SELECT * FROM service ";
    $results= $conn->query($sqlstr);
    return $results;

}

function FetchServicePost($commentid,$conn)
{
    
    
    $sqlstr="SELECT * FROM service WHERE commentid='$commentid'";
    $results=$conn->query($sqlstr);
    return $results;
}

function UpdateReply($tablename,$reply,$replydate,$replytime,$commentid,$conn)
{
    $sqlstr="UPDATE service SET reply='$reply', replydate='$replydate' , replytime='$replytime'  WHERE commentid='$commentid'";
    if($conn->query($sqlstr))
    {
        echo "Reply Successful";
        header("refresh:2; url=../view/service.php");
    }
    else
    {
        echo "Not Replied".$conn->error;
    }

}

    
   function closecon($conn)
   {
    $conn->close();
   }
}
?>