<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Simpe Registration</title>
</head>
<body align="middle">
	<div><center><h2>Registration Form.</h2></center></div>
	<form action='register.php' method='POST'>
		<label for="user">Username:</label>	<br/>
		<input type='text' name='user' id="user"  required/><br/>
		<label for="user">Password:</label>	<br/>
		<input type='password' name='pass' id="pass"  required/><br/>
		<label for="user">Email:</label>	<br/>
		<input type='email' name='email' id="email"  required/><br/>
		<input type='submit' name='sentForm' id="sentForm" />
	</form>
</body>
</html>
