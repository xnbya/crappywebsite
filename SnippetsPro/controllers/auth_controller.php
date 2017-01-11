<?php

  class AuthController {

    public function login(){
      try {
        require_once("models/user_model.php");

        $username = $_GET['username'];
        $password = $_GET['password'];

        $u = User::getUserByCredentials($username, $password);


        if(session_status()==PHP_SESSION_ACTIVE){
          session_abort();
        }
        
        session_id($u->userID);
        session_start();

        echo "Successfully Logged in User: " . $u->username;

      } catch (Exception $e) {
        echo "Cannot Login!<br/>";
        echo "Error Message: " . $e->getMessage();
      }
    }

    public function signup(){
      try {
        require_once("models/user_model.php");

        $username = $_GET['username'];
        $password = $_GET['password'];

        $u = User::newUser($username, $password);

        echo "Successfully Registered ";
        echo $u->userID;
        echo "!";

      } catch (Exception $e) {
        echo "Cannot Register!<br/>";
        echo "Error Message: " . $e->getMessage();
      }
    }

    public function authorise(){
      require_once("models/user_model.php");
      if(User::getUserByID(session_id())!=NULL){
        echo "Successfully Authorised to Enter Page!";
      } else {
        echo "Please login to enter!";
        // Code to redirect to login page with next being the requested page
      }
    }
  }

?>
