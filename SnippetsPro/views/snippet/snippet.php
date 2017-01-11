<div style="border: 5px solid black;">
  <p>
    <?php echo $snip->snippetText ?>
  </p>
  <hr>
  <span>Author ID: <?php echo $snip->userID ?></span>

  <form style="display: inline; float: right;" method="post" action="index.php?controller=snippet&action=delete">
    <input type="hidden" name="id" value="<?php echo $snip->snippetID?>">
    <button type="submit" value="Delete">
      Delete
    </button>
</form>
</div>
