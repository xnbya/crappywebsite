<h1>Your Uploads </h1>
<?php
    foreach($lines as $line) {
        echo('<h4><a href="download.php?file=' . $line . '">' . $line . '</a></h4>');
    }
 ?>
