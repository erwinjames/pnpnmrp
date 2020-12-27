<?php
include('security.php');

$connection = mysqli_connect("localhost", "root", "", "adminpanel");


if (isset($_POST['registerbtn']))
{	
	$Name = $_POST['Name'];
	$Region = $_POST['Region'];
	$Role = $_POST['Role'];
	$Status = $_POST['Status'];


			$query = "INSERT INTO admin (Name,Region,Role,Status) VALUES('$Name','$Region','$Role','$Status')";
			$query_run = mysqli_query($connection, $query);


			if ($query_run)
		{
			//echo "Saved";
			$_SESSION['success'] = "Admin Data added!";
			header('Location: AdminManagement.php');
		}
	else
		{
			$_SESSION['status'] = "Admin Data not added!";
			header('Location: AdminManagement.php');
		}
	}
	


if(isset($_POST['updatebtn']))
	{
		$id = $_POST['edit_id'];
		$Name = $_POST['edit_Name'];
		$Region = $_POST['edit_Region'];
		$Role = $_POST['edit_Role'];
		$Status = $_POST['edit_Status'];

		$query = "UPDATE admin SET Name = '$Name', Region = '$Region', Role = '$Role', Status = '$Status' WHERE id='$id' ";
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

	$query = "INSERT INTO adminarchive  
	SELECT * FROM  admin WHERE id='$id'";
	$query_run = mysqli_query($connection, $query);

	$query = "DELETE FROM admin WHERE id='$id'";
	$query_run = mysqli_query($connection, $query);

	if ($query_run) 
	{
		$_SESSION['success'] = "Deleted!";
		header('Location: AdminManagement.php');
	}
	else
	{
		$_SESSION['status'] = "Not Deleted!";
		header('Location: AdminManagement.php');
	}
}
?>