<?php
  session_start();
  ini_set('display_errors', 'On');
  error_reporting(E_ALL);
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
