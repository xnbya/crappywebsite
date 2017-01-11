<h1>Your Uploads </h1>
<?php
    $lines = preg_split("#[\r\n]+#", $files);
    array_pop($lines);
    foreach($lines as $line) {
        echo('<h4><span class="glyphicon glyphicon-file"></span><a href="index.php?controller=upload&action=view&file=' . $line . '">' . $line . '</a></h4>');
    }
 ?>
