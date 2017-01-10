<?php
  function call($controller, $action) {
    // require the file that matches the controller name
    require_once('controllers/' . $controller . '_controller.php');

    // create a new instance of the needed controller
    switch($controller) {
      case 'auth':
        $instance = new AuthController();
        break;
      case 'snippet':
        $instance = new SnippetController();
        break;
      case 'user':
        $instance = new UserController();
        break;
    }

    $controller->{ $action }();

  }

  call($controller, $action);

?>
