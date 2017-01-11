<h1>Your Uploads </h1>
<p>
<?php 
    $lines = preg_split("#[\r\n]+#", $files);

    foreach($lines as $line) {
        echo('<a href="index.php?controller=upload&action=view&file=' . $line . '">' . $line . '</a> <br>');
    }
 ?>  
</p>
