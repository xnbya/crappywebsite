<?php
  class Snippet {
    public $snippetID;
    public $userID;
    public $snippetText;

    //pull from DB
    public function __construct($snippetID){

    }

    //add a new snippet to DB
    static public function newSnippet($uid, $snippetText){}
  }
?>
