

<div style="text-align: center;">

	<h1>Change user data screen</h1>

	<div style="margin:  20px auto; width: 300px; height: 200px; border: solid;">

		<form action="index.php" method="get" style="padding: 0 50px;">

			<input type="hidden" name="controller" value="user">
			<input type="hidden" name="action" value="set">
			<p>What to change</p>
			<!-- <input type="text" name="type"> -->

			<select name="type">
					<?php 

						$user = User::getUserByID($_SESSION["userID"]);
						$user = get_object_vars($user);

						foreach ($user as $key => $value) {
							if ($key=="username" || $key=="password" || $key=="iconURL" || $key=="homepageURL" || $key=="profileColor" || $key=="privateSnippetID") {
								echo "<option>$key</option>";	
							}
							
						}

					?>
			</select><br>

			<p>Change to what</p>
			<input type="text" name="value">
			<input style="margin: 15px auto;" type="submit" value="Submit">

		</form>

	</div>

</div>


