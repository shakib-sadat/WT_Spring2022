<?php 
session_start();
include ("../model/db.php");



if(isset($_POST["addbutton"]))
{
    $title=$_POST["title"];
    $description=$_POST["description"];

    $domain=$_POST["domain"];
    $publishdate=$_POST["publishdate"];
    $developer=$_POST["developer"];
    $publishtime=$_POST["publishtime"];

    if(empty($title) || empty($description) ||empty($domain) || empty($publishdate) ||empty($developer)||empty($publishtime) )
    {

        echo "Please insert all fields";
    }

    else{
        $myDB=new DB();
        $conobj=$myDB->opencon();
        $myDB->AddNews($title,$description,$domain,$publishdate,$developer,$publishtime,"news",$conobj);
        $myDB->closecon($conobj);
    }

    
    


}
if(isset($_POST["searchnews"]))
{


    $mydb=new DB();
    $conobj=$mydb->opencon();
    
    $mydata=$mydb->SearchNews($conobj, "news",$_POST["searchdata"]);
    if($mydata->num_rows > 0)
    {
        if($_POST["searchdata"]!="")
        {
             while($row=$mydata->fetch_assoc())
        {
            $_SESSION["newsid"]=$row["newsid"];
            $_SESSION["title"]=$row["title"];
            $_SESSION["description"]=$row["description"];
            $_SESSION["domain"]=$row["domain"];
            $_SESSION["publishdate"]=$row["publishdate"];
            $_SESSION["developer"]=$row["developer"];
            $_SESSION["publishtime"]=$row["publishtime"];
         
        }

        }
        else{
            echo"please insert data";
        }
       
       
    

    }
    else{
        $_SESSION["newsid"]="";
        echo "No News found";
    }
}

if(isset($_POST["deletenews"]))
{
   echo"<br> <br> <br> <br> <br> <br> <br> <br> <br> <br>  ";
   echo"<br> <br> <br> <br> <br> <br> <br> <br> <br> <br>  ";
    $mydb=new DB();
    $conobj=$mydb->opencon();
    if($_POST["searchdata"]!="")
    {$mydb->DeleteNews("news",$_POST["searchdata"],$conobj);}
    else{
        echo"please insert news to be deleted";
    }
    

}

if(isset($_POST["shownews"]))
{
$mydb=new DB();
$conobj=$mydb->opencon();

$mydata=$mydb->ShowNews($conobj, "news");
if($mydata->num_rows > 0)
{

    
echo "<table>";

    while($row=$mydata->fetch_assoc())
    {
        echo "<tr>";
        echo "<td>".$row["newsid"]."</td> <br>";
        echo "<td>".$row["title"]."</td> <br> ";
        echo "<td>".$row["description"]."</td> <br>";
        echo "<td>".$row["publishdate"]."</td> <br>";
        echo "<td>".$row["domain"]."</td> <br>";
        echo "<td>".$row["developer"]."</td> <br>";
        echo "<td>".$row["publishtime"]."</td> <br>";
        echo "<td>".$row["status"]."</td> <br>";
        echo "</tr>";
    }

    echo "</table>";
}
else{
    echo "no data found";
}
}


if(isset($_POST["showgames"]))
{
$mydb=new DB();
$conobj=$mydb->opencon();

$mydata=$mydb->ShowGame($conobj, "game");
if($mydata->num_rows > 0)
{

    echo"<br>  ";
    echo "<table>";

    while($row=$mydata->fetch_assoc())
    {
        echo "<tr>";
        echo "<td>".$row["gameid"]."</td> <br> ";
        echo "<td>".$row["title"]."</td> <br> ";
        echo "<td>".$row["description"]."</td> <br>";
        echo "<td>".$row["systemrequirment"]."</td> <br>";
        echo "<td>".$row["category"]."</td> <br>";
        echo "<td>".$row["developer"]."</td> <br>";
        echo "<td>".$row["publisher"]."</td> <br>";
        echo "<td>".$row["releasedate"]."</td> <br>";
        echo "<td>".$row["status"]."</td> <br>";
        echo "</tr>";
    }

    echo "</table>";
}
else{
    echo "no data found";
}
}


if(isset($_POST["updatestatus"]))
{
    $mydb=new DB();
    $conobj=$mydb->opencon();
    $mydb->ApproveGame("game",$_POST["status"],$_POST["gameid"],$conobj);

}

if(isset($_POST["updatenews"]))
{
    $mydb=new DB();
    $conobj=$mydb->opencon();
    $mydb->ApproveNews("news",$_POST["status"],$_POST["newsid"],$conobj);

}

if(isset($_POST["updateprofile"]))
{
    if($_POST["newpassword"]==$_POST["confirmpassword"])
    {
        
    $mydb=new DB();
    $conobj=$mydb->opencon();
    $mydb->UpdatePassword($_POST["oldpassword"],$_POST["newpassword"],$_POST["email"],"user",$conobj);
    }
    else{
        echo"Password mismatch";
    }

}

if(isset($_POST["updateprofile"]))
{
    
    $mydb=new DB();
    $conobj=$mydb->opencon();
    $mydb->UpdateData($_POST["fname"],$_POST["lname"],$_POST["age"],$_POST["uname"],$_POST["email"],$_POST["contact"],$_POST["address"],$_POST["language"],"user",$conobj);
    echo "Profile Updated";
    header("refresh:1 ; url=http://localhost/hexa/View/dropdown.php");
    
}

if(isset($_POST["login"]))
{
    if (!empty($_POST['remember']))
{
    setcookie('email',$_POST['email'],time()+10);
    setcookie('password',$_POST['password'],time()+10);
    echo "cookie set successful";
}
else{
    echo "cookie not set";
}
    
    $mydb=new DB();
    $conobj=$mydb->opencon();
    $mydb->login("user",$_POST["password"],$_POST["email"],$conobj);

}


if(isset($_SESSION["email"]))
{
    $email=$_SESSION["email"];
    $uname=$_SESSION["uname"];
    $mydb=new DB();
    $conobj=$mydb->opencon();

$mydata=$mydb->FetchData($email,$conobj, "user");
if($mydata->num_rows > 0)
{

 

    while($row=$mydata->fetch_assoc())
    {
            $_SESSION["fname"]=$row["fname"];
            $_SESSION["lname"]=$row["lname"];
            $_SESSION["age"]=$row["age"];
            $_SESSION["uname"]=$row["uname"];
            $_SESSION["email"]=$row["email"];
            $_SESSION["password"]=$row["password"];
            $_SESSION["contact"]=$row["contact"];
            $_SESSION["address"]=$row["address"];
            $_SESSION["language"]=$row["language"];
            $_SESSION["gender"]=$row["gender"];
            $_SESSION["nid"]=$row["nid"];
            $_SESSION["dob"]=$row["dob"];
            $_SESSION["designation"]=$row["designation"];
            $_SESSION["experience"]=$row["experience"];
    }

   
}
else{
    echo "no data found";
}
}


if(isset($_POST["searchtasks"]))
{
    $mydb=new DB();
    $conobj=$mydb->opencon();
    
    $mydata=$mydb->SearchTask($conobj, "task",$_POST["taskname"]);
    if($mydata->num_rows > 0)
    {
        while($row=$mydata->fetch_assoc())
        {
            echo "<div class='task'>";
            echo"<label>Taskname:</label>";
            echo $taskname=$row["taskname"];
            echo"<label>Task Id:</label>";
            echo $taskid=$row["taskid"];
            echo"<label>Details:</label>";
            echo $taskdetails=$row["taskdetails"];
            echo"<label>Status:</label>";
            echo $status=$row["status"];    
            echo "</div>";   
        }
    }
    else{
        echo "No Task found";
    }
}

if(isset($_POST["taskdone"]))
{
    $mydb=new DB();
    $conobj=$mydb->opencon();
    $mydb->DeleteTask("task",$_POST["taskname"],$conobj);

}

if(isset($_POST["updatetask"]))
{
    $mydb=new DB();
    $conobj=$mydb->opencon();
    $mydb->UpdateTask("task",$_POST["updatetask"],$_POST["taskname"],$conobj);

}


    
function ShowAllService()
{
    $mydb=new DB();
    $conobj=$mydb->opencon();
    $mydata=$mydb->FetchService($conobj);
    if($mydata->num_rows > 0)
    {
        while($row=$mydata->fetch_assoc())
        {
             $id =$row["commentid"];
  
    echo  "
      <td > ID ".$row["commentid"] ."</td> 
      <td >".$row["userid"]."</td>
      <td >".$row["comment"]."</td>
      <td >".$row["commentdatetime"]."</td>
      <td >".$row["reply"]."</td>
      <td >".$row["replydate"]."</td>
      <td >".$row["replytime"]."</td>
      
      <td> <a href='../view/reply.php?id=$id'> Check Profile </a> </td>
    </tr>"; 

        }
          }
}

Function GetPost($id)
{
    $mydb=new DB();
    $conobj=$mydb->opencon();
    $mydata=$mydb->FetchServicePost($id,$conobj);
    if($mydata->num_rows > 0)
    {
        while($row=$mydata->fetch_assoc())
        {
            
            echo "commentId".$row["commentid"];
            echo "userid".$row["userid"];
            echo "comment".$row["comment"];
            echo "commentdatetime".$row["commentdatetime"];
            echo "reply".$row["reply"];
            echo "replydate".$row["replydate"];
            echo "replytime".$row["replytime"];

}
    }
}

if(isset($_POST["submittttreply"]))
{

    
    $mydb=new DB();
    $conobj=$mydb->opencon();
    $mydb->UpdateReply("service",$_POST["replybox"],$_POST["replydate"],$_POST["replytime"],$_POST["commid"],$conobj);
    
}





?>

    



