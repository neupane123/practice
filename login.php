<?php
	$creds = require_once "credentials.php";

	if(isset($_POST['submit']))
	{
		
	}

?>

<form method="post">
	<input type="email" name="email" placeholder="email"><br>
	<input type="password" name="password" placeholder="password"><br>
	<button type="submit" name="login">Login</button>
</form>