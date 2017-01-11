<?php
  class UserController {

  	require_once('models/user_model.php');

  	static public function show_all() {

  		$all = User::get_all_users();

  	}

  
    static public function set() {

    	// read what has to be changed from form
    	$type = $_GET['type'];
        $value = $_GET['value'];
        
        User::set_data($type, $value);
    }


  }
?>

