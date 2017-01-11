<?php
  class User {
    public $userID;
    public $username;
    public $password;
    public $iconURL;
    public $homePageURL;
    public $profileColor;
    public $privateSnippetID;
    public $isAdmin;

    public function __construct($username, $password){

    }

    // fetch all user data
    static public function get_all_users() {

      $conn = Connection::getInstance();
      $query = $conn->query( "SELECT * FROM users" );
      
      $list = [];
     
      foreach($query->fetchAll() as $out) {

        get_last_snippet
        snippet_page

        $list[] = array( $out['username'], $out['last_snippet'], $out['snippet page']);
      }

      return $list;
    }

    // function for setting or changing data
    // possible types include: user name, password, icon URL, 
    // homepage URL, color, private snippet
     static public function set_data($type, $value){

        // get user id
        $id = $_SESSION["id"];  

        //update a selected type
        $conn = Connection::getInstance();
        $query = $conn->query(" UPDATE users SET $type='$value' WHERE userID="$id" ");

    }


  }
?>
