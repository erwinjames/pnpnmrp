<link href="../css/sb-admin-2.min.css" rel="stylesheet">
<?php
	$server_name = "localhost";
	$db_username = "root";
	$db_password = "";
	$db_name = "adminpanel";

	$connection = mysqli_connect($server_name, $db_username, $db_password);
	$dbconfig = mysqli_select_db($connection, $db_name);

	if ($dbconfig)
	{
		 //echo "Database Connected!"; 
	}
	else
	{
		echo '
			<div class = "çontainer">
			<div class = "row">
				<div class = "col-md-8 mr-auto ml-auto text-center py-5 mt-5">
				<div class = "card">
				<div class = "card-body">
					<h1 class = "card-title bg-danger text-white">Database Connection Failed!</h1>
					<h2 class = "card-title">Database Failure</h2>
					<p class = "card-text">Please check your database connection!</p>
					<a href = "#" class="btn btn-primary">:( </a>
				</div>
				</div>
				<div>
			</div>
			</div>
			';
	}
?>