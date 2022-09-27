<!DOCTYPE html>
<html lang="en">
<head>
    
    
</head>
<body>
    <?php
    include ("../control/datahandle.php");
    $id=$_GET["id"];

    GetPost($id);
    ?>
    
    <form action='' method='post' > 
        <label>Reply Date:</label>
        <input type="text" name="replydate" value="<?php echo date('d/m/y') ?> "readonly > <br >
        <label>Reply Time:</label>
        <input type="text" name="replytime" value="<?php echo date('h:i:s')  ?> "readonly > <br >
         <input type="text" id="commid" name="commid" value="<?php echo $id ?>"  placeholder="id">
        <input type="text" id="reply" name="replybox"  placeholder="reply problem">
        <input type="submit" name="submittttreply" value="Reply">
        </form>
</body>
</html>