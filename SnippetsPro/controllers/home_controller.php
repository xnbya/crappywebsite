<?php
  class HomeController {

    public function mhome() {
        require_once('models/home_model.php');
        $Home = new Home();
        $all = Home::getAll();
        $userID = session_id();
        require_once('views/home/mhome.php');
    }
    
    public function error() {
        require_once('views/home/error.php');
    }
    
  }
?>
