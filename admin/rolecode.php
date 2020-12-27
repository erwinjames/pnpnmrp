<?php
include('security.php');

$connection = mysqli_connect("localhost", "root", "", "adminpanel");


if (isset($_POST['registerbtn']))
{	
	$rolename = $_POST['rolename'];
	$arights = $_POST['arights'];
	$chk="";
		foreach ($arights as $chk1) {
			$chk .= $chk1. ", ";
		}

			$query = "INSERT INTO role (rolename,arights) VALUES('$rolename','$chk')";
			$query_run = mysqli_query($connection, $query);


			if ($query_run)
		{
			//echo "Saved";
			$_SESSION['success'] = "Role Data added!";
			header('Location: RoleManagement.php');
		}
	else
		{
			$_SESSION['status'] = "Role Data not added!";
			header('Location: RoleManagement.php');
		}
	}
	


if(isset($_POST['updatebtn']))
	{
		$id = $_POST['edit_id'];
		$rolename = $_POST['edit_rolename'];
		$arights = $_POST['edit_arights'];
		$chk="";

			foreach ($arights as $chk1) {
				$chk .= $chk1. ", ";
		}

		$query = "UPDATE role SET rolename = '$rolename', arights = '$arights' WHERE id='$id' ";
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

	$query = "DELETE FROM role WHERE id='$id'";
	$query_run = mysqli_query($connection, $query);

	if ($query_run) 
	{
		$_SESSION['success'] = "Deleted!";
		header('Location: RoleManagement.php');
	}
	else
	{
		$_SESSION['status'] = "Not Deleted!";
		header('Location: RoleManagement.php');
	}
}
?>