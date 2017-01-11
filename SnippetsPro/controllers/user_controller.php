<?php
  class UserController {

    static public function display() {  

      require_once("views/change_user_data.php");
    }  


    static public function set() {


    require_once('models/user_model.php');
    require_once("controllers/auth_controller.php");


    	// read what has to be changed from form
    	$type = $_GET['type'];
      $value = $_GET['value'];
    
      User::set_data($type, $value);

    }


  }
?>

