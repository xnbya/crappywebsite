<h1>Snippet Pro Home </h1>
<?php 
	if(is_null($userID)) {
		echo '<h3> Login </h3>';

	} 
	else {
		echo '<h3>Welcome Back ' . $userName . '</h3>';
                echo '<form action="index.php?controller=upload&action=upload" method="post" enctype="multipart/form-data">';
		echo 'Select file to upload: <input type="file" name="myfile" id="myfile">';
		echo '<input type="submit" value="Upload">';
		echo '</form>';
	}
 ?>  
<h3>All Snippets</h3> 
<?php 
	foreach ($all as $row) {
		echo ('<p>' . $row . '</p>'); 
	}

?>

    
