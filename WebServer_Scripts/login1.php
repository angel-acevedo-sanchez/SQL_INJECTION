/*

	Author: Ángel Acevedo Sánchez
	23/01/2019
	All rights reserved
*/

<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

 include('login.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	
  <form method="post" action="login.php">
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username">
  	
    </div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  </form>
</body>
</html>
