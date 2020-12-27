<?php
include('security.php');

$connection = mysqli_connect("localhost", "root", "", "adminpanel");



if(isset($_POST['login_btn']))
{
	$email_login = $_POST['email'];
	$password_login = $_POST['password'];

	$query = "SELECT * FROM register WHERE email='$email_login' AND password='$password_login' ";
	$query_run = mysqli_query($connection, $query);

	if(mysqli_fetch_array($query_run))
	{
		$_SESSION['username'] = $email_login;
		header('Location: index.php');
	}
	else
	{
		$_SESSION['status'] = 'Email or Password is Incorrect';
		header('Location: login.php');
	} 

}  



if (isset($_POST['registerbtn']))
{
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$cpassword = $_POST['confirmpassword'];

	if($password == $cpassword)
	{
			$query = "INSERT INTO register (username,email,password) VALUES('$username','$email','$password')";
			$query_run = mysqli_query($connection, $query);

			if ($query_run)
		{
			//echo "Saved";
			$_SESSION['success'] = "Admin profile added!";
			header('Location: register.php');
		}
	else
		{
			$_SESSION['status'] = "Admin profile not added!";
			header('Location: register.php');
		}

	}
	else
		{
			$_SESSION['status'] = "Password do not match";
			header('Location: register.php');
		}
}



if(isset($_POST['updatebtn']))
	{
		$id = $_POST['edit_id'];
		$rolename = $_POST['edit_rolename'];
		$arights = $_POST['edit_arights'];

		$query = "UPDATE role SET Role Name = '$rolename', Access Rights = '$arights' WHERE id='$id' ";
		$query_run = mysqli_query($connection, $query);

		if ($query_run) 
		{
			$_SESSION['success'] = "Updated!";
			header('Location: RoleManagement.php');
		}
		else
		{
			$_SESSION['status'] = "Not Updated!";
			header('Location: RoleManagement.php');
		}
	}



if (isset($_POST['delete_btn'])) 
{
	$id = $_POST['delete_id'];

	$query = "DELETE FROM register WHERE id='$id' ";
	$query_run = mysqli_query($connection, $query);

	if ($query_run) 
	{
		$_SESSION['success'] = "Deleted!";
		header('Location: register.php');
	}
	else
	{
		$_SESSION['status'] = "Not Deleted!";
		header('Location: register.php');
	}
}

?>