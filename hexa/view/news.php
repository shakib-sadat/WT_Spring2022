
<link rel="stylesheet" href="teststyle.css">


    <h3>News</h3>
    <hr />
    <form action='' method='post' ">  
        <div class="newsform"> 
        <fieldset>
        <legend> Add News </legend>
        <label>Title:</label>
        <input type="text" name="title"  /> <br />
      
      
        <label>Description:</label>
        <input type="text" name="description" /> <br />
      
      
        <label>Domain:</label>
        <input type="text" name="domain" /> <br />
      
        <?php date_default_timezone_set('Asia/Dhaka') ?>
        <label>Publishdate:</label>
        <input type="text" name="publishdate" value="<?php echo date('d/m/y') ?> "readonly > <br >
        <label>Publishtime:</label>
        <input type="text" name="publishtime" value="<?php echo date('h:i:s') ?> "readonly > <br >

        <label>Developer:</label>
        <input type="text" name="developer" /> <br />
      
      
        <input type="submit" name="addbutton" id="add"  /> <input type="reset" name="reset" id="reset"/>
      <br> 

      <label> Search News </label>
      <input type = "text" name="searchdata" id="title">
<input type="submit" name="searchnews" class="submitbutton" value="Search">
<input type="submit" name="deletenews" class="submitbutton" value="Delete">
<input type="submit" name="shownews" class="submitbutton" value="Show">
<label> News Id:</label>
        <input type="text" name="newsid" id:"newsid" placeholder="id">
        <label> Change Status</label>
        <select name="status" id="status">
        <option value=""></option>
        <option value="show">Show</option>
        <option value="hide">Hide</option>
        </select>
         <input type="submit" name="updatenews" class="status" value="Change">
        

<?php
include ("../control/datahandle.php");
if(isset($_POST['searchnews']))
{
  if(isset($_SESSION["newsid"]))
{
          echo $_SESSION["newsid"];
          echo $_SESSION["title"];
          echo $_SESSION["description"];
          echo $_SESSION["domain"];
          echo $_SESSION["publishdate"];
          echo $_SESSION["developer"];
}


}



?>
 </fieldset>

</form>


 
    

