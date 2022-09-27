<h3>Games</h3>
    <hr />
    <form action='' method='post' ">  
        <div class="gameform"> 
        <fieldset>
        <legend> Games</legend>
        <input type="submit" name="showgames" class="submitbutton" value="Show">
        
        <?php
            include ("../control/datahandle.php");
        ?>
        <label> Game Id:</label>
        <input type="text" name="gameid" id:"gameid" placeholder="id">
        <label> Change Status</label>
        <select name="status" id="status">
        <option value=""></option>
        <option value="show">Show</option>
        <option value="hide">Hide</option>
        </select>
         <input type="submit" name="updatestatus" class="status" value="Change">
      
      
        
      <br> 
</fieldset>
</div>
    </form>