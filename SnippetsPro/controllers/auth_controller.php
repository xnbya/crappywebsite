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
        $_SESSION['isAdmin'] = $u->isAdmin;
        return True;
      } else {
        return False;
      }
    }

    public function signup(){
      try {
        require_once("models/user_model.php");

        $username = $_GET['username'];
        $password = $_GET['password'];

        $u = User::newUser($username, $password);

        echo "<h2>Successfully Registered ";
        echo $u->username;
        echo "!</h2>";

      } catch (Exception $e) {
        echo "<h2>Cannot Register!</h2>";
        echo "<h3>Error Message: " . $e->getMessage() . "</h3>";
      }
    }

    public function logout(){
      if (session_status()==PHP_SESSION_ACTIVE){
        session_unset();
        session_regenerate_id();
      }
      header("Location: index.php");
    }

     public function authorise(){
      require_once("models/user_model.php");
      if(User::getUserByID(session_id())!=NULL){
        return True;
      } else {
        if ($this->login()){
          return True;
        } else {
          header("Location: index.php?controller=auth&action=loginPage&next=http://".$_SERVER['HTTP_HOST'].urlencode($_SERVER['REQUEST_URI']));
        }
      }
    }

    public function loginPage(){
      $next = 'index.php';
      $params = array();
      if(isset($_GET['next'])){
        $next = $_GET['next'];
        $parsedNext = parse_url($next);
        parse_str($parsedNext['query'], $params);
      }

      require_once("views/auth/login.php");
    }

    public function signupPage(){
      require_once("views/auth/signup.php");
    }
  }

?>
