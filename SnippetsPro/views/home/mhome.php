<h1>Snippet Pro Home </h1>
<?php
	if(!array_key_exists('userID', $_SESSION)) {
		echo '<h3><a href=index.php?controller=auth&action=loginpage> Login now </a></h3>';

	}
	else {
		echo '<h3>Welcome Back ' .$_SESSION['username']. '</h3>';
		echo '<h4><a href="index.php?controller=upload&action=viewAll">My Uploads</a></h4>';
                echo '<form action="index.php?controller=upload&action=upload" method="post" enctype="multipart/form-data">';
		echo 'Select file to upload: <input type="file" name="myfile" id="myfile">';
		echo '<input type="submit" value="Upload">';
		echo '</form>';

	}
 ?>
<h3>Users - Recent Snippets</h3>
<?php
	 foreach($all->fetchAll() as $row) {
		 $pretty_user = "<span style=\"color: " . $row[3] . "\">" . $row[1] . "</span>";
		 echo ('<p>' . $pretty_user . ' - ' . $row[2] . '</p>');
	}

?>
