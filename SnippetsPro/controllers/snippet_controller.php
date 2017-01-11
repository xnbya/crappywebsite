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

    require('views/snippet/form.php');

    foreach($snippets as $snip) {
      require('views/snippet/snippet.php');
    }
  }

  public function add() {
    if (isset($_POST['uid']) || isset($_POST['text'])) {
      Snippet::newSnippet($_POST['uid'], $_POST['text']);
      header('Location: '. 'index.php?controller=snippet&action=home');
    }
    else {
      return call('pages', 'error');
    }
  }

  public function show(){
    if(isset($_GET['id'])) {
      $snip = Snippet::find($_GET['id']);
      if ($snip->snippetID) {
        require_once('views/snippet/snippet.php');
      }
    }
    else {
      return call('pages', 'error');
    }
  }

  public function delete(){
    if(isset($_POST['id'])) {
      Snippet::delete($_POST['id']);
      header('Location: '. 'index.php?controller=snippet&action=home');

    }
    else {
      return call('pages', 'error');
    }
  }

}

?>
