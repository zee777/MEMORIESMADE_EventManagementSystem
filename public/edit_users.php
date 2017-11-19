<?php
	include 'database.php';
	$action = isset( $_POST['action'] ) ? $_POST['action'] : "";

	if($action == "update"){

		//write our update query
		//$mysqli->real_escape_string() function helps us prevent attacks such as SQL injection
		$query = "update users

		set firstName = '".$mysqli->real_escape_string($_POST['firstName'])."',
			lastName = '".$mysqli->real_escape_string($_POST['lastName'])."',
			username = '".$mysqli->real_escape_string($_POST['username'])."',
			password = '".$mysqli->real_escape_string($_POST['password'])."'
			where userID='".$mysqli->real_escape_string($_REQUEST['userID'])."'";

		//execute the query
		if( $mysqli->query($query) ) {
			//if updating the record was successful
			echo "User was updated.";
		}else{
			//if unable to update new record
			echo "Database Error: Unable to update record.";
		}
	}

	//select the specific database record to update
	$query = "select userID, firstName, lastName, username, password from users
	where userID='".$mysqli->real_escape_string($_REQUEST['id'])."'limit 0,1";

	//execute the query
	$result = $mysqli->query( $query );

	//get the result
	$row = $result->fetch_assoc();

	//assign the result to certain variable so our html form will be filled up with values
	$id = $row['userID'];
	$firstname = $row['firstName'];
	$lastname = $row['lastName'];
	$username = $row['username'];
	$password = $row['password'];
	?>

	<!--we have our html form here where new user information will be entered-->
	
	<link href="../styles/form_style.css" type="text/css" rel="stylesheet"/>
	<div id="container">
	<div id="title">EDIT USER</div>
	<div id="border">
	<form action='#' method='post' border='0'>
		<table>
		<tr>
			<td>Firstname</td>
			<td><input type='text' name='firstName' value='<?php echo $firstname; ?>' /></td>
		</tr>

		<tr>
			<td>Lastname</td>
			<td><input type='text' name='lastName' value='<?php echo $lastname; ?>' /></td>
		</tr>

		<tr>
			<td>Username</td>
			<td><input type='text' name='username' value='<?php echo $username; ?>' /></td>
		</tr>

		<tr>
			<td>Password</td>
			<td><input type='password' name='password' value='<?php echo $password; ?>' /></td>
		<tr>

		<td></td>
		
		<td>
			<!-- so that we could identify what record is to be updated -->
			<input type='hidden' name='userID' value='<?php echo $id?>' />
			<!-- we will set the action to update -->
			<input type='hidden' name='action' value='update' />
			<center><input name="edit_sub1" type='submit' value='Edit' /></center>
			<div id="back2"><center><a href='manage_users.php'>Back to display page</a></center></div>
		</td>
		</tr>
	</table>
	</form>
	</div>
	</div>
