<?php

require_once('models/snippet_model.php');

class SnippetController {

  public function home() {
    $snippets = [];

    if (isset($_GET['uid'])) {
      $snippets = Snippet::allForUser($_GET['uid']);
    }
    else {
      $snippets = Snippet::all();
    }

    foreach($snippets as $snip) {
      require('views/snippet.php');
    }
  }

  public function add() {
    if (isset($_GET['uid']) || isset($_GET['text'])) {
      Snippet::newSnippet($_GET['uid'], $_GET['text']);
      return call('snippet', 'home');
    }
    else {
      return call('pages', 'error');
    }
  }

  public function show(){
    if(isset($_GET['id'])) {
      $snip = Snippet::find($_GET['id']);
      if ($snip->snippetID) {
        require_once('views/snippet.php');
      }
    }
    else {
      return call('pages', 'error');
    }
  }

  public function delete(){
    if(isset($_GET['id'])) {
      Snippet::delete($_GET['id']);
      return call('snippet', 'home');
    }
    else {
      return call('pages', 'error');
    }
  }

}

?>
