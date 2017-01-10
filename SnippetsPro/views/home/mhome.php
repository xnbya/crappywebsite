<h1>Snippet Pro Home </h1>
<?php 
	if(is_null($userID)) {
		echo '<h3><a href="index.php?controller=auth&action=login"> Login </a></h3>';
	} 
	else {
		echo '<h3>Welcome Back ' . $userName . '</h3>';
	}
 ?>  
<h3>Existing Snippets</h3> 
<?php 
	foreach ($snippets as $row) {
		echo ('<p>' . $row->snippetText . '</p>'); 
	}

	if(!is_null($userSnippets)) {
		echo '<h3>Your Snippets</h3>';
		echo '<p>' . $userSnippets . '</p>';
		foreach ($userSnippets as $row) {
			echo ('<p>' . $row->snippetText . '</p>'); 
		}
	}
?>

    
