<?php
    include_once '../controllers/signupController.php';
?>
<div class="container">
    <h2>Sign up</h2>
  <form method="post" action="#">
    <div class="form-group">
      <label for="email">Login:</label>
      <input type="text" class="form-control" name="user_name" placeholder="Enter user name">
    </div>
    <div class="form-group">
      <label for="email">Login:</label>
      <input type="text" class="form-control" name="login" placeholder="Enter login">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" name="password"" placeholder="Enter password">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" name="confirm_password"" placeholder="Confirm password">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>