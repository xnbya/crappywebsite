<?php
  class UploadController {
  
    public function viewAll() {
        $files = shell_exec('ls -1 uploads/' . $_SESSION['userID']);
        require_once('views/uploads.php');
    }

    public function upload() {
        $targetDir = 'uploads/' . $_SESSION['userID'] . '/';
        shell_exec('mkdir uploads/' . $_SESSION['userID']);
        $targetFile = $targetDir . $_FILES["myfile"]["name"];
        $uploaded = (move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetFile));
        $this->viewAll();
            
    }
    
    public function view() {
        require_once('uploads/' . $_SESSION['userID'] . '/' . $_GET['file']);
    }
    
  }
?>
