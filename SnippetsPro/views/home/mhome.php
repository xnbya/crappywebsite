<h1>Snippet Pro Home </h1>
<?php 
	if(is_null($userID)) {
		echo '<h3><a href="index.php?controller=auth&action=login"> Login </a></h3>';
	} 
	else {
		echo '<h3>Welcome Back ' . $userName . '</h3>';
	}
 ?>  
<h3>All Snippets</h3> 
<?php 
	foreach ($all as $row) {
		echo ('<p>' . $row . '</p>'); 
	}

?>

    
