<div class="panel panel-default">
  <div class="panel-body">
    <?php echo htmlspecialchars($snip->snippetText) ?>
  </div>
  <div class="panel-footer">
    Author ID: <?php echo htmlspecialchars($snip->userID) ?>
  </div>

  <?php

  if((array_key_exists('userID', $_SESSION) && $_SESSION['userID'] == $snip->userID) || (array_key_exists('isAdmin', $_SESSION) && $_SESSION['isAdmin'] == True)) {
    echo '<form style="display: inline; float: right;" method="post" action="index.php?controller=snippet&action=delete">';
    echo '<input type="hidden" name="id" value="' . htmlspecialchars($snip->snippetID) .'">';
    echo '<button class="btn btn-default" type="submit" value="Delete">Delete</button>';
    echo '</form>';
  }
  ?>
</div>
