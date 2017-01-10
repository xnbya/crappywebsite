<?php

  class AuthController {

    public function login(){}

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
        echo "Cannot Login!<br/>";
        echo "Error Message: " . $e->getMessage();
      }
    }

    public function changePass(){}

    public function authorise(){}
  }

?>
