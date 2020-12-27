<?php
	session_start();
	//connect database
	$db = mysqli_connect("localhost", "root", "", "authentication");

	if (isset($_POST['register_btn']))
	{
		session_start();
		$username = mysqli_real_escape_string()($_POST['username']);
		$email = mysqli_real_escape_string()($_POST['email']);
		$password = mysqli_real_escape_string()($_POST['password']);
		$password2 = mysqli_real_escape_string()($_POST['password2']);

		if ($password == $password2)
		{
			//create user
			$password = md5($password); //hash password before storing for security purposes
			$sql = "INSERT INTO users(username, email, password) VALUES('$username', '$email', '$password')";
			mysqli_query($db, $sql);
			$_SESSION['message'] = "Welcome!";
			$_SESSION['username'] = $username;
			header("location: home.php"); //redirect to homepage
		}
		else
		{
			$_SESSION['message'] = "Incorrect Password!";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
	<h1>Register</h1>
</div>

<form method="post" action="register.php">
	<table>
		<tr>
			<td>Username:</td>
			<td><input type="text" name="username" class="textInput"></td>
		</tr>
		<tr>
			<td>Email:</td>
			<td><input type="email" name="email" class="textInput"></td>
		</tr>
		<tr>
			<td>Password:</td>
			<td><input type="password" name="password" class="textInput"></td>
		</tr>
		<tr>
			<td>Re-type Password:</td>
			<td><input type="password" name="password2" class="textInput"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="register_btn" value="Register"></td>
		</tr>
	</table>
</form>

</body>
</html>