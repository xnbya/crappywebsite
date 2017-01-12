<?php
$user = User::getUserByID($_SESSION["userID"]);
$user = get_object_vars($user);
$token = UserController::get_token();
?>

<div class="container">
	<?php
	echo "<h1>Change user data for <span style=\"color: " . $user['profileColor'] . "\">" . $user['username'] . "</h1>";
	?>

		<form action="index.php" method="get">

			<input type="hidden" name="controller" value="user">
			<input type="hidden" name="action" value="set">
			<input type="hidden" name="token" value="<?php echo $token; ?>">
			<div class="form-group">
				<label for = "type">What to change</label>
				<select name="type" id="typw" class="form-control" style="max-width:400px;">
						<?php
							foreach ($user as $key => $value) {
								if ($key=="username" || $key=="password" || $key=="iconURL" || $key=="homepageURL" || $key=="profileColor" || $key=="privateSnippetID") {
									echo "<option>$key</option>";
								}
							}
						?>
				</select>
			</div>

			<div class="form-group">
				<label for="text">Change to what</label>
				<input type="text" name="value" class="form-control" id="text" style="max-width:400px;">
			</div>

			<input class="btn btn-default" type="submit" value="Submit">

		</form>

</div>