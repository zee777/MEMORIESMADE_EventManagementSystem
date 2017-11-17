<?php
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "memoriesmade_db";
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	
	if(mysqli_connect_errno()){
		die("Database connection failed: " .
			mysqli_connect_error() .
			" (".mysqli_connect_errno() . ")"
		);
	}
	
	//input data from the login is set 
	$_SESSION['username'] = $_POST['username'];
	$_SESSION['password'] = $_POST['password'];
	
	$query = "SELECT * FROM users WHERE username='$_SESSION[username]'";
	
	$result = mysqli_query($connection, $query);
	$num_rows = mysqli_num_rows($result);
	$pass_err_message = "Password is incorrect";
	$username_err_message = "Username was not found";
	
	if ($num_rows == 1) 
	{
		while($row = mysqli_fetch_array($result))
		{
			if($_SESSION['password'] == $row["password"])
			{
				header("Location: home.php?id=".$row['userID']);
			}
			else {
				//password does not match
				echo "<script>alert('$pass_err_message');
				window.location.href='index.php';</script>";
			}
		}
	}
	if ($num_rows == 0) 
	{
		//the username was not found
		echo "<script>alert('$username_err_message');
		window.location.href='index.php';</script>";
	}
					
		
mysqli_close($connection);
?>
