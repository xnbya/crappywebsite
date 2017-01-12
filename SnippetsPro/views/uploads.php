<h1>Your Uploads </h1>
<?php
    foreach($lines as $line) {
        echo('<h4><span class="glyphicon glyphicon-file"></span><a href="download.php?file=' . $line . '">' . $line . '</a></h4>');
    }
 ?>
