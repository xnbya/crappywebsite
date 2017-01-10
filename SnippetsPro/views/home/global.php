<h1>Snippet Pro Home </h1>
<?php 
    if(isNull($userID)) {
        echo '<h3><a href="index.php?controller=auth&action=login"> Login </a></h3>';
    } 
    else {
        echo '<h3>Welcome Back ' . $userName . '</h3>';
    }
    
    echo '<p>' . $snippets . '</p>';
    
    if(!isNull($userSnippets)) {
        echo '<h2>Your Snippets</h2>';
        echo '<p>' . $userSnippets . '</p>';
    }
?>

    
