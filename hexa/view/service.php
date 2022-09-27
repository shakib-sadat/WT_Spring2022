<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Service</title>
</head>
<body>
    <p id="table">User Problems</p>
<table>
    <th>
    <tr>
    <th  >Comment ID</th>
    <th >User ID</th>
    <th >Comment</th>
    <th> Comment Date & Time</th>
    <th >Reply </th>
    <th >Reply Date & Time </th>
    
  </tr>
    </th>
    <?php
    include ("../control/datahandle.php");
    ShowAllService();

 ?>
</body>
</html>
