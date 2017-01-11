<form id="snippet-form" method="post" action="index.php?controller=snippet&action=add">
<input hidden type="text" name="controller" value="snippet">
<input hidden type="text" name="action" value="add">
 <input hidden type="text" name="uid" value="<?php echo $_SESSION['userID'] ?>"><br>
 <div class="form-group">
   <h2>Add Snippet</h2>
   <label for = "text" >Snippet text:</label>
   <textarea name="text" form="snippet-form" id="text" class="form-control" style="max-width:400px"></textarea>
 </div>
 <input type="submit" value="Save" class = "btn btn-default">
</form>
<hr>
<h2>Your Snippets</h2><br>
