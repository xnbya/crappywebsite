<form action = "<?php echo $next ?>" >
    <?php
      foreach ($params as $key => $value) {
        echo "<input type='hidden' name = '".$key."' value='".$value."'>";
      }
    ?>
    <div class="form-group">
      <label for="username">Username:</label>
      <input type="text" name = "username" id="username" class="form-control" style="max-width:400px">
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" name = "password" id="password"  class="form-control" style="max-width:400px">
    </div>
    <input type="submit" value="Login" class="btn btn-default">
</form>
