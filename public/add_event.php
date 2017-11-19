<html>
	<head>
		<title>Create User</title>
	</head>

	<body>
		<?php

		//if there's any user action
		$action = isset($_POST['action']) ? $_POST['action'] : "";
		if($action=='create'){ //the the user submitted the form
		//include database connection
		include 'database.php';
		//our insert query query
		//$mysqli->real_escape_string() function helps us prevent attacks such as SQL injection
		$query = "insert into createevent

		set event_title = '".$mysqli->real_escape_string($_POST['event_title'])."',
			location = '".$mysqli->real_escape_string($_POST['location'])."',
			start_date = '".$mysqli->real_escape_string($_POST['start_date'])."',
			start_time = '".$mysqli->real_escape_string($_POST['start_time'])."',
			end_date = '".$mysqli->real_escape_string($_POST['end_date'])."',
			end_time = '".$mysqli->real_escape_string($_POST['end_time'])."',
			event_description = '".$mysqli->real_escape_string($_POST['event_description'])."'";

		//execute the query
		if( $mysqli->query($query) ) {
			//if saving success
			echo "Event was created.";
		}else{
			//if unable to create new record
			echo "Database Error: Unable to create record.";
		}
		//close database connection
		$mysqli->close();
		}
	?>
	<link href="../styles/form_style.css" type="text/css" rel="stylesheet"/>
	<!--we have our html form here where user information will be entered-->
	<div id="container">
	<div id="title">ADD EVENT</div>
	<div id="border">
	<form action='#' method='post' border='0'>
	<table>
		<tr>
			<td>Event Title</td>
			<td><input type='text' name='event_title' /></td>
		</tr>
		<tr>
			<td>Location</td>
			<td><input type='text' name='location' /></td>
		</tr>
		<tr>	
			<td>Start Date</td>
			<td><input type='text' name='start_date' /></td>
		</tr>
		<tr>
			<td>End Date</td>
			<td><input type='text' name='end_date' /></td>
		</tr>
		<tr>
			<td>Start Time</td>
			<td><input type='text' name='start_time' /></td>
		</tr>
		<tr>
			<td>End Time</td>
			<td><input type='text' name='end_time' /></td>
		</tr>
		<tr>
			<td>Event Description</td>
			<td><input type='text' name='event_description' /></td>
		</tr>
	<td></td>

<td>

<input type='hidden' name='action' value='create' />

<center><input name="edit_sub" type='submit' value='Save' /></center>

<center><div id="back"><a href='manage_content.php'>Back to Manage Users</a></div></center>

</td>

</tr>

</table>

</form>
</div>
</div>

</body>

</html>
