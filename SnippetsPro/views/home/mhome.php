<h1>Snippet Pro Home </h1>
<?php
	if(!array_key_exists('userID', $_SESSION)) {
		echo '<h3><a href=index.php?controller=auth&action=loginpage> Login now </a></h3>';

	}
	else {
		echo '<h3>Welcome Back ' .$_SESSION['username']. '</h3>';
		echo '<h4><a href="index.php?controller=upload&action=viewAll">My Uploads</a></h4>';
    echo '<form action="index.php?controller=upload&action=upload" method="post" enctype="multipart/form-data">';
		echo '<div class = "form-group">';
		echo '<label for="myFile">Select file to upload:</label>';
		echo '<input type="file" name="myfile" id="myfile" class="form-control" style="max-width:400px">';
		echo '</div>';
		echo '<input type="submit" value="Upload" class="btn btn-default">';
		echo '</form>';

	}
 ?>
<h3>Users - Recent Snippets</h3>
<?php
	 foreach($all->fetchAll() as $row) {
		 $pretty_user = "<div class='panel-heading' style='color: " . $row[3] . "'>" . $row[1] . "</div>";
		 echo ('<div class="panel panel-default">' . $pretty_user . '<div class="panel-body">' . $row[2] . '</div></div>');
	}

?>
