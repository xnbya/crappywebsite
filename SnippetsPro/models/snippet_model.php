<?php
  class Snippet {
    public $snippetID;
    public $userID;
    public $snippetText;

    public function __construct($snippetID, $userID, $snippetText) {
      $this->snippetID = $snippetID;
      $this->userID = $userID;
      $this->snippetText = $snippetText;
    }

    //pull from DB
    static public function find($snippetID) {
      $db = Connection::getInstance();
      $req = $db->query("SELECT * FROM snippets WHERE snippetID=" . $snippetID);

      $s = $req->fetch();
      return new Snippet($s['snippetID'], $s['userID'], $s['snippetText']);
    }

    static public function all() {
      $list = [];
      $db = Connection::getInstance();
      $req = $db->query('SELECT * FROM snippets');

      foreach($req->fetchAll() as $s) {
        $list[] = new Snippet($s['snippetID'], $s['userID'], $s['snippetText']);
      }

      return $list;
    }

    static public function allForUser($uid) {
      $list = [];
      $db = Connection::getInstance();
      $req = $db->query("SELECT * FROM snippets WHERE userID=" . $uid);

      foreach($req->fetchAll() as $s) {
        $list[] = new Snippet($s['snippetID'], $s['userID'], $s['snippetText']);
      }

      return $list;
    }

    //add a new snippet to DB
    static public function newSnippet($uid, $snippetText) {
      $db = Connection::getInstance();
      $insert_query = "INSERT INTO snippets (userID, snippetText) VALUES (" . $uid . ", '" . $snippetText . "')";
      $id_query = 'SELECT LAST_INSERT_ID()';

      $db->query($insert_query);
      $id = $db->query($id_query)->fetch();

      return new Snippet($id, $uid, $snippetText);
    }
  }
?>
