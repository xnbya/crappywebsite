<?php
  class HomeController {

    public function mhome() {
        require_once('models/home_model.php');
        require_once('models/user_model.php');
        $Home = new Home();
        $all = Home::getAll();
        require_once('views/home/mhome.php');
    }

    public function error() {
        $error = "";
        if(isset($_GET['error'])){
          $error = $_GET['error'];
        }
        require_once('views/home/error.php');
    }

  }
?>
