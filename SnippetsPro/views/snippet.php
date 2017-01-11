<div style="border: 5px solid black;">
  <p>
    <?php echo $snip->snippetText ?>
  </p>
  <hr>
  <span>Author ID: <?php echo $snip->userID ?></span>
  <a style="float: right;" href="index.php?controller=snippet&action=delete&id=<?php echo $snip->snippetID?>">Delete</a>
</div>
