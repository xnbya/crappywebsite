<form action = "index.php" >
    <input type = "hidden" name="controller" value="auth">
    <input type = "hidden" name="action" value="signup">
    <div class="form-group">
      <label for="username">Username:</label>
      <input type="text" name = "username" id="username" class="form-control" style="max-width:400px">
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" name = "password" id="password"  class="form-control" style="max-width:400px">
    </div>
    <input type="submit" value="Signup" class="btn btn-default">
</form>
