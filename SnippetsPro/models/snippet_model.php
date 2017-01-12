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
      
      $sql = $db->prepare("SELECT * FROM snippets WHERE snippetID = ?");
      $sql->execute(array($snippetID));
      $s = $sql->fetch();

      return new Snippet($s['snippetID'], $s['userID'], $s['snippetText']);
    }

    static public function delete($snippetID) {
      $db = Connection::getInstance();
      $req = $db->query("DELETE FROM snippets WHERE snippetID=" . $snippetID);

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
      
      $sql = $db->prepare("SELECT * FROM snippets WHERE userID = ?");
      $sql->execute(array($uid));

      foreach($sql->fetchAll() as $s) {
        $list[] = new Snippet($s['snippetID'], $s['userID'], $s['snippetText']);
      }

      return $list;
    }

    //add a new snippet to DB
    static public function newSnippet($uid, $snippetText) {
      $db = Connection::getInstance();
      
      $sql = $db->prepare("INSERT into snippets (userID, snippetText) VALUES (:userID, :snippetText)");
      $sql->bindParam(':userID', $uid);
      $sql->bindParam(':snippetText', $snippetText);
      $sql->execute();
      
      
      $id_query = 'SELECT LAST_INSERT_ID()';

      $id = $db->query($id_query)->fetch();

      return new Snippet($id, $uid, $snippetText);
    }
  }
?>
