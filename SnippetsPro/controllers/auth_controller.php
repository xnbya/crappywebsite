<?php

  class AuthController {

    public function login(){
      try {
        require_once("models/user_model.php");

        $username = $_GET['username'];
        $password = $_GET['password'];

        $u = User::getUserByCredentials($username, $password);

        $_SESSION['id'] = $u->userID;
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
      if(isset($_SESSION['id'])){
        echo "Successfully Authorised to Enter Page!";
      } else {
        echo "Please login to enter!";
        // Code to redirect to login page with next being the requested page
      }
    }
  }

?>
