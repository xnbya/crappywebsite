<?php
  class UserController {


  	// fetch all user data
  	static public function get_all_users($) {

      $conn = Connection::getInstance();
      $query = $conn->query( "SELECT * FROM users" );
      
      $list = [];
     
      foreach($query->fetchAll() as $out) {

      	get_last_snippet
      	snippet_page
        $list[] = new User($out['userID'], $out['username'], $out['last_snippet'], $out['snippet page']);

      }

      return $list;
    }


  	// function for setting or changing data
  	// possible types include: user name, password, icon URL, 
  	// homepage URL, color, private snippet
    static public function set_data(){

    	// read what has to be changed from form
    	$type = $_GET['type'];
        $value = $_GET['value'];
        // get user id
        $id = sessionID;  

    	//update a selected type
    	$conn = Connection::getInstance();
      	$query = $conn->query(" UPDATE users SET $type='$value' WHERE userID="$id" ");

    }


  }
?>





A user may set or modify password, URL for an icon, URL for a homepage, profile colour (text description), a private snippet.
A user may set or modify a user name. 

