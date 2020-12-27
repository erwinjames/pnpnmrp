<?php
include('security.php');

$connection = mysqli_connect("localhost", "root", "", "adminpanel");


if (isset($_POST['registerbtn']))
{	
	$Name = $_POST['Name'];
	$Region = $_POST['Region'];
	$Status = $_POST['Status'];
	$Password = $_POST['Password'];
	$Email = $_POST['Email'];
	$cpass = $_POST['cpass'];

			if($Password == $cpass)
			{

			$query = "INSERT INTO user (Name,Region,Status,Password,Email) VALUES('$Name','$Region','$Status','$Password','$Email')";
			$query_run = mysqli_query($connection, $query);


			if ($query_run)
		{
			//echo "Saved";
			$_SESSION['success'] = "User Data added!";
			header('Location: UserManagement.php');
		}
	else
		{
			$_SESSION['status'] = "User Profile not added!";
			header('Location: UserManagement.php');
		}
	}
	else
	{
		$_SESSION['status'] = "Password did not match!";
		header('Location: UserManagement.php');
	}
}

	


if(isset($_POST['updatebtn']))
	{
		$id = $_POST['edit_id'];
		$rolename = $_POST['edit_rolename'];
		$arights = $_POST['edit_arights'];
		$Password = $_POST['edit_Password'];
		$Email = $_POST['edit_Email'];

		$query = "UPDATE role SET rolename = '$rolename', arights = '$arights', Password = '$Password', Email = '$Email' WHERE id='$id' ";
		$query_run = mysqli_query($connection, $query);

		if ($query_run) 
		{
			$_SESSION['success'] = "Updated!";
			header('Location: AdminManagement.php');
		}
		else
		{
			$_SESSION['status'] = "Not Updated!";
			header('Location: AdminManagement.php');
		}
	}



if (isset($_POST['delete_btn'])) 
{
	$id = $_POST['delete_id'];

	$query = "INSERT INTO userarchive  
	SELECT * FROM  user WHERE id='$id'";
	$query_run = mysqli_query($connection, $query);

	$query = "DELETE FROM user WHERE id='$id'";
	$query_run = mysqli_query($connection, $query);

	if ($query_run) 
	{
		$_SESSION['success'] = "Deleted!";
		header('Location: UserManagement.php');
	}
	else
	{
		$_SESSION['status'] = "Not Deleted!";
		header('Location: UserManagement.php');
	}
}

?>