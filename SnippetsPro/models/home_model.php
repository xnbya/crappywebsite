<?php
	class Home {
		static public function getAll() {
			$db = Connection::getInstance();
			$req = $db->query("SELECT users.userID, users.username, fsnip.snippetText 
				FROM users LEFT JOIN 
				(SELECT snippets.userID, snippetText FROM snippets
				 INNER JOIN
				(SELECT userID, MAX(snippetID) AS msid
				 FROM snippets
				 GROUP BY userID) AS msnip
				 ON snippets.snippetID = msnip.msid) AS fsnip
				 ON users.userID = fsnip.userID");
			return $req;
		}
	}
?>
