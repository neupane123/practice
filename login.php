<?php
	$creds = require_once "credentials.php";
	$err = [];

	if(isset($_POST['submit']))
	{
		if(!empty($_POST['email']))
		{
			$email = $_POST['email'];
		}else{
			$err['email']="email is required";
		}

		if(!empty($_POST['password']))
		{
			$password = $_POST['password'];
		}else{
			$err['password']="password is required";
		}

		if(count($err) == 0)
		{
			if(array_key_exists($email, $creds))
			{	
				if(password_verify($password, $creds[$email]['password']))
				{
					echo "<script>alert('login success')</script>";

				}else{

					$err['failed'] = "wrong password !";
				}
				
			}else{
				$err['failed'] = "account does not exists";
			}
		}
	}

?>

<form method="post">
	<input type="email" name="email" placeholder="email"><br>
	<input type="password" name="password" placeholder="password"><br>
	<button type="submit" name="login">Login</button>
</form>