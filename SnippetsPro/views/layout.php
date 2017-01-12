<DOCTYPE html>
<html>
  <head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div id="menu">
      <nav class="navbar navbar-inverse">
        <ul class="nav navbar-nav">
          <li><a href="index.php?controller=home&action=mhome">Home</a></li>
          <li><a href="index.php?controller=snippet&action=home">All snippets</a></li>

          <?php
          if(array_key_exists('userID', $_SESSION)) {
            echo '<li><a href="index.php?controller=snippet&action=home&uid='. $_SESSION['userID'] . '">My snippets</a></li>';
            echo '<li><a href="index.php?controller=upload&action=viewAll">My uploads</a></li>';
            echo '<li><a href="index.php?controller=user&action=display">User data</a></li>';
            echo '<li><a href="index.php?controller=auth&action=logout">Log out</a></li>';
          }
          else {
            echo '<li><a href="index.php?controller=auth&action=loginpage">Log in</a></li>';
            echo '<li><a href="index.php?controller=auth&action=signuppage">Sign up</a></li>';

          }
          ?>
        </ul>
      </nav>
    </div>
    <div class="container">
      <?php require_once('routes.php'); ?>
    </div>

  <body>
<html>
