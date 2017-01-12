<?php
require_once("controllers/auth_controller.php");
  class UploadController {
  
    public function onlyAlpha($s) {
        return preg_replace("/[^a-zA-Z0-9.]+/", "", $s);
    }

    public function viewAll() {
        $auth = new AuthController();
        if($auth->authorise()) {
            $folder = 'uploads/' . $this->onlyAlpha($_SESSION['userID']);
            $lines = scandir($folder);        
            require_once('views/uploads.php');
        }
    }

    public function upload() {
        $auth = new AuthController();
        if($auth->authorise()) {
            $targetDir = 'uploads/' . $this->onlyAlpha($_SESSION['userID']) . '/';
            mkdir($targetDir, 0755, true);
            $targetFile = $targetDir . $this->onlyAlpha($_FILES["myfile"]["name"]);
            $uploaded = (move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetFile));
            $this->viewAll();
        }
    }

  }
?>
