<form action = "<?php echo $next ?>" >
    <?php
      foreach ($query as $key => $value) {
        echo "<input type='hidden' name='" . $key . "' value = '" . $value . "'>";
      }
    ?>
    <p>Username: <input type="text" name = "username"></p>
    <p>Password: <input type="password" name = "password"></p>
    <p><input type="submit" value="Login"></p>
</form>
