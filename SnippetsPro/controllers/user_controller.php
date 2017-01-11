<?php
  class UserController {

  	require_once('models/user_model.php');
    require_once("models/auth_controller.php");

    static public function set() {

      

    	// read what has to be changed from form
    	$type = $_GET['type'];
      $value = $_GET['value'];
        
      User::set_data($type, $value);


    }




  }
?>

