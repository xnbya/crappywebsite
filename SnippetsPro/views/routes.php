<?php

function call($controller, $action) {
  // require the file that matches the controller name
  require_once('controllers/' . $controller . '_controller.php');

  // create a new instance of the needed controller
  switch($controller) {
    case 'snippet':
      $controller = new SnippetController();
      break;
    default:
      break;
  }

  $controller->{ $action }();
}

call($controller, $action);

?>
