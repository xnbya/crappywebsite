<?php
  class HomeController {

    public function mhome() {
        require_once('models/snippet_model.php');
        $Snippet= new Snippet();
        $snippets = Snippet::all();
        
        if(!is_null($userID)) {
            $userSnippets = Snippet::allForUser($userID);
        }
    
        require_once('views/home/mhome.php');
    }
    
    public function error() {
        require_once('views/home/error.php');
    }
    
  }
?>
