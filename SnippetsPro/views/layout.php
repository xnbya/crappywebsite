<DOCTYPE html>
<html>
  <head>
  </head>
  <body>
    <div id="menu">
      <ul>
        <li><a href="index.php?controller=home&action=mhome">Home</a></li>
        <li><a href="index.php?controller=snippet&action=home">All snippets</a></li>

        <?php
        if(array_key_exists('userID', $_SESSION)) {
          echo '<li><a href="index.php?controller=snippet&action=home&uid='. $_SESSION['userID'] . '">My snippets</a></li>';
          echo '<li><a href="index.php?controller=auth&action=logout">Log out</a></li>';
          echo '<li><a href="index.php?controller=user&action=display">Change data</a></li>';
        }
        else {
          echo '<li><a href="index.php?controller=auth&action=loginpage">Log in</a></li>';
          echo '<li><a href="index.php?controller=auth&action=signuppage">Sign up</a></li>';

        }
        ?>
      </ul>
    </div>

    <?php require_once('routes.php'); ?>

  <body>
<html>
