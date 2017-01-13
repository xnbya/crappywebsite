<?php

  $currentCookieParams = session_get_cookie_params();
  session_set_cookie_params(
      $currentCookieParams["lifetime"],
      $currentCookieParams["path"],
      $currentCookieParams["domain"],
      $currentCookieParams["secure"],
      true  // Don't make cookies accessible to javascript
  );

  session_start();
  require_once('connection.php');


  if (isset($_GET['controller']) && isset($_GET['action'])) {
    $controller = $_GET['controller'];
    $action     = $_GET['action'];
  } else {
    $controller = 'home';
    $action     = 'mhome';

  }

  require_once('views/layout.php');
?>
