<?php

  class AuthController {

    public function login(){
      require_once("models/user_model.php");

      $username = NULL;
      $password = NULL;
      $u = NULL;

      if(isset($_GET['username'])&&isset($_GET['password'])){
        $username = $_GET['username'];
        $password = $_GET['password'];
        $u = User::getUserByCredentials($username, $password);
      }

      if ($u != NULL){
        if(session_status()==PHP_SESSION_ACTIVE){
          session_abort();
        }
        session_id($u->userID);
        session_start();
        $_SESSION['userID'] = $u->userID;
        $_SESSION['username'] = $u->username;

        echo "Successfully Logged in User: " . $u->username;
        return True;
      } else {
        echo "Cannot Login!<br/>";
        return False;
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
        return True;
      } else {
        if ($this->login()){
          return True;
        } else {
          header("Location: index.php?controller=auth&action=loginPage&next=".urlencode($_SERVER['REQUEST_URI']));
        }
      }
    }

    public function loginPage(){
      $next = 'index.php';
      $query = array();
      if(isset($_GET['next'])){
        $next = $_GET['next'];
        $parts = parse_url($next);
        parse_str($parts['query'], $query);
      }

      require_once("views/auth/login.php");
    }

    public function signupPage(){
      require_once("views/auth/signup.php");
    }
  }

?>
