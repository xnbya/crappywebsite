<?php
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
