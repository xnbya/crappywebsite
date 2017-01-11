<?php

  function call($controller, $action) {

    // require the file that matches the controller name
    require_once('controllers/' . $controller . '_controller.php');

    $controller = ucfirst($controller);
    $evalstr = "\$controller = new " . $controller . "Controller();";

    eval($evalstr);
    
    
    $controller->{ $action }();

  }
  

  call($controller, $action);

?>
