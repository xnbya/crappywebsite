<?php
  class HomeController {

    public function global() {
        require_once('controllers/snippetcontroller_controller.php');
        $SnippetController = new SnippetController();
        $snippets = SnippetController::all();
        
        if(!is_null($userID)) {
            $userSnippets = SnippetController::allForUser($userID);
        }
    
        require_once('views/pages/home.php');
    }
    
    public function error() {
        require_once('views/pages/error.php');
    }
    
  }
?>
