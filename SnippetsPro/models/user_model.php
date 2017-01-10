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

    public function __construct($userID, $username, $password, $iconURL, $homePageURL, $profileColor, $privateSnippetID, $isAdmin){
      $this->userID = $userID;
      $this->username = $username;
      $this->password = $password;
      $this->iconURL = $iconURL;
      $this->homePageURL = $homePageURL;
      $this->profileColor = $profileColor;
      $this->privateSnippetID = $privateSnippetID;
      $this->isAdmin = $isAdmin;
    }

    public static function newUser($username, $password){
      $db = Connection::getInstance();
      echo $sql;
      $db->query($sql);
      return new User($db->lastInsertID(), $username, $password, NULL, NULL, NULL, NULL, NULL, NULL);
    }
  }
?>
