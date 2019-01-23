/*
	
	Author: Ángel Acevedo Sánchez
	23/01/2019
	All rights reserved
*/

<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

 include('contents.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>You're in !!</title>
</head>
<body>
  <div class="header">
  	<h2>Search a product</h2>
  </div>
	
  <form method="get" action="contents.php">
  	<div class="input-group">
  	  <label>Id product:</label>
  	  <input type="text" name="id">
  	<div class="input-gro;up">
  	  <button type="submit" class="btn" name="search">Search</button>
  	</div>
  </form>
</body>
</html>


