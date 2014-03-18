<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login and Registration</title>
</head>
<body>
	<div>
		<h1>Register</h1>
		<form action="<?php echo base_url('/FriendFinder/register')?>" method='post'>
			<label>First Name:</label><input type='text' name='first_name'><br>	
			<label>Last Name:</label><input type='text' name='last_name'><br>
			<label>Email:</label><input type='email' name='email'><br>	
			<label>Password:</label><input type='password' name='password'><br>	
		</form>
	</div>
	<div>
		<h1>Login</h1>
		<form action="<?php echo base_url('/FriendFinder/log_in')?>" method='post'>
			<label>Email:</label><input type='email' name='email'><br>	
			<label>Password:</label><input type='password' name='password'><br>	
		</form>
	</div>
	
</body>
</html>