<form action = "index.php" >
    <input type = "hidden" name="controller" value="auth">
    <input type = "hidden" name="action" value="login">
    <input type = "hidden" name="next" value="<?php echo $next ?>">
    <p>Username: <input type="text" name = "username"></p>
    <p>Password: <input type="password" name = "password"></p>
    <p><input type="submit" value="Login"></p>
</form>
