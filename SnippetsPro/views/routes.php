<?php
  function call($controller, $action) {

    // require the file that matches the controller name
    require_once('controllers/' . $controller . '_controller.php');

    $controller = ucfirst($controller);
    $evalstr = "\$controler = new " . $controller . "Controller();";

    eval($evalstr);
    
    $controler->{ $action }();

  }

  call($controller, $action);
?>
