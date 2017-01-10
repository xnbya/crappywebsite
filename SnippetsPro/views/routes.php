<?php
  function call($controller, $action) {
    // require the file that matches the controller name
    require_once('controllers/' . $controller . '_controller.php');
    eval("$controler new " . $controller . "Controller()");
    $controler->{ $action }();
  }
  
  call($controller, $action);
?>
