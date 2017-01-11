<div style="border: 5px solid black;">
  <p>
    <?php echo $snip->snippetText ?>
  </p>
  <hr>
  <span>Author ID: <?php echo $snip->userID ?></span>


  <?php

  if(($_SESSION['userID'] == $snip->userID) || ($_SESSION['isAdmin'] == True)) {
    echo '<form style="display: inline; float: right;" method="post" action="index.php?controller=snippet&action=delete">';
    echo '<input type="hidden" name="id" value="' . $snip->snippetID .'">';
    echo '<button type="submit" value="Delete">Delete</button>';
    echo '</form>';
  }
  ?>
</div>
