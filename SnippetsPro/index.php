<?php
  session_start();
  require_once('connection.php');

  ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);


  if (isset($_GET['controller']) && isset($_GET['action'])) {
    $controller = $_GET['controller'];
    $action     = $_GET['action'];
  } else {
    $controller = 'home';
    $action     = 'mhome';

  }

  require_once('views/layout.php');
?>
