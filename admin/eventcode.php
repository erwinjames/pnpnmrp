<?php
include('security.php');

$connection = mysqli_connect("localhost", "root", "", "adminpanel");


if (isset($_POST['registerbtn']))
{	
	$Title = $_POST['Title'];
	$Photo = $_FILES['Photo']['name'];
	$Speaker = $_POST['Speaker'];
	$Location = $_POST['Location'];
	$Dates = $_POST['Dates'];
	$Timess = $_POST['Timess'];
	$RegFee = $_POST['RegFee'];
	$ShortDesc = $_POST['ShortDesc'];
	


			$query = "INSERT INTO event (Title,Photo,Speaker,Location,Dates,Timess,RegFee,ShortDesc) VALUES('$Title','$Photo','$Speaker','$Location','$Dates','$Timess','$RegFee','$ShortDesc')";
				

			$query_run = mysqli_query($connection, $query);




			if ($query_run)
		{
			//echo "Saved";
			move_uploaded_file($_FILES["Photo"]["tmp_name"], "upload/".$_FILES["Photo"]["name"]);
			$_SESSION['success'] = "Event added!";
			header('Location: EventManagement.php');
		}
	else
		{
			$_SESSION['status'] = "Event not added!";
			header('Location: EventManagement.php');
		}
	}
	


if(isset($_POST['updatebtn']))
	{
	$Title = $_POST['edit_Title'];
	$Photo = $_POST['edit_Photo'];
	$Speaker = $_POST['edit_Speaker'];
	$Location = $_POST['edit_Location'];
	$Dates = $_POST['edit_Dates'];
	$Timess = $_POST['edit_Timess'];
	$RegFee = $_POST['edit_RegFee'];
	$ShortDesc = $_POST['edit_ShortDesc'];

		$query = "UPDATE event SET Title = '$Title', Photo = '$Photo', Speaker = '$Speaker', Location = '$Location', Dates = '$Dates', Timess = '$Timess', RegFee = '$RegFee', ShortDesc = '$ShortDesc' WHERE id='$id' ";
		$query_run = mysqli_query($connection, $query);

		if ($query_run) 
		{
			$_SESSION['success'] = "Updated!";
			header('Location: EventManagement.php');
		}
		else
		{
			$_SESSION['status'] = "Not Updated!";
			header('Location: EventManagement.php');
		}
	}



if (isset($_POST['delete_btn'])) 
{
	$id = $_POST['delete_id'];

	$query = "DELETE FROM event WHERE id='$id'";
	$query_run = mysqli_query($connection, $query);

	if ($query_run) 
	{
		$_SESSION['success'] = "Deleted!";
		header('Location: EventManagement.php');
	}
	else
	{
		$_SESSION['status'] = "Not Deleted!";
		header('Location: EventManagement.php');
	}
}
?>