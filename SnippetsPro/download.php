<?php
session_start();


if(array_key_exists('userID', $_SESSION)) {

    $filename = preg_replace("/[^a-zA-Z0-9.]+/", "", $_GET['file']);
    $file = 'uploads/' . preg_replace("/[^a-zA-Z0-9.]+/", "", $_SESSION['userID']) . '/' . $filename;
    
    
    if (file_exists($file)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="'.basename($file).'"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file));
        readfile($file);
        exit();
    
    }
    else {

        header("Location: index.php?controller=home&action=error&error=File+Missing");
        exit();
    }
}

 header("Location: index.php?controller=home&action=error&error=Auth+Error");
?>
