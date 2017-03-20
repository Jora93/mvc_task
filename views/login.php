<?php
    include_once '../controllers/loginController.php';
?>
<div class="container">
    <h2>Login</h2>
  <form method="post" action="#">
    <div class="form-group">
      <label for="email">Login:</label>
      <input type="text" class="form-control" name="login" placeholder="Enter login">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" name="password" placeholder="Enter password">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
        <a href="/signup">sign up</a>
  </form>
</div>

