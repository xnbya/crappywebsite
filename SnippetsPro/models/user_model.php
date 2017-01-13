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

    public function __construct($userID, $username, $password, $iconURL, $homepageURL, $profileColor, $privateSnippetID, $isAdmin){
      $this->userID = $userID;
      $this->username = $username;
      $this->password = $password;
      $this->iconURL = $iconURL;
      $this->homepageURL = $homepageURL;
      $this->profileColor = $profileColor;
      $this->privateSnippetID = $privateSnippetID;
      $this->isAdmin = $isAdmin;
    }

    public static function newUser($username, $password){
      $db = Connection::getInstance();
      $sql = $db->prepare("INSERT into users (username, password) VALUES (:username, :password)");
      $sql->bindParam(':username', $username);
      $sql->bindParam(':password', $password);
      $sql->execute();
      return new User($db->lastInsertID(), $username, $password, NULL, NULL, NULL, NULL, NULL, NULL);
    }

    public static function getUserByCredentials($username, $password){
      $db = Connection::getInstance();
      $sql = $db->prepare("SELECT * FROM users WHERE username = ?");
      $sql->execute(array($username));
      $row = $sql->fetch();
      if($password == $row['password']){
        return new User($row['userID'], $row['username'], $row['password'], $row['iconURL'], $row['homepageURL'], $row['profileColor'], $row['privateSnippetID'], $row['isAdmin']);
      }
      return NULL;
    }

    public static function getUserByID($userID){
      $db = Connection::getInstance();
      $sql = $db->prepare("SELECT * FROM users WHERE userID = ?");
      $sql->execute(array($userID));
      $row = $sql->fetch();
      if(isset($row['userID'])){
        return new User($row['userID'], $row['username'], $row['password'], $row['iconURL'], $row['homepageURL'], $row['profileColor'], $row['privateSnippetID'], $row['isAdmin']);
      }
      return NULL;
    }


    public static function getUserByName($username){
      $db = Connection::getInstance();
      $sql = $fb->prepare("SELECT * FROM users WHERE username = ?");
      $sql->execute(array($username));
      $row = $sql->fetch();
      if(isset($row['userID'])){
        return new User($row['userID'], $row['username'], $row['password'], $row['iconURL'], $row['homepageURL'], $row['profileColor'], $row['privateSnippetID'], $row['isAdmin']);
      }
      return NULL;
    }

    // // function for setting or changing data
    // // possible types include: user name, password, icon URL,
    // // homepage URL, color, private snippet
     static public function set_data($type, $value){

         if ($type=="username" || $type=="password" || $type=="iconURL" || $type=="homepageURL" || $type=="profileColor" || $type=="privateSnippetID") {

          // get user id
          $id = $_SESSION["userID"];

          //update a selected type
          $conn = Connection::getInstance();
          $query = $conn->query("UPDATE users SET " . $type . "='" . $value . "' WHERE userID=" . $id);
      }
    }
  }
?>
