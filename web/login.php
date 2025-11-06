<?php include 'navbar.php'; ?>
<h1>Login Page</h1>
<form method="POST" action="account.php">
  <label>Username:</label>
  <input type="text" name="username" required><br>
  <label>Password:</label>
  <input type="password" name="password" required><br>
  <button type="submit">Login</button>
</form>