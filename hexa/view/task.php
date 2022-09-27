<head></head>
<body>
<h3>Tasks</h3>
    <hr>
    <form action='' method='post' ">  
    <div class="task"> 
        <fieldset>
        <legend> Tasks :</legend>
        
        
        <?php
            include ("../control/datahandle.php");
        ?>
        <label> Task name:</label>
        <input type="text" name="taskname" id:"taskname" onkeyup:"searchtasks()" placeholder="name">
        <p id="searchtaskresult"</p>
        
        <input type="submit" name="searchtasks" class="submitbutton" value="Search">
        <label> Task Status</label><br>
        <input type="submit" name="taskdone" id="taskdone" value="Done">
        <input type="submit" name="updatetask" id="tasktodo" value="To do">
        
      <br> 
</fieldset>
</div>
    </form>
    <script src="../control/ajax.js"></script>
</body>