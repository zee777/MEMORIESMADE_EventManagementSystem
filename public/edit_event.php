<?php
	include 'database.php';
	$action = isset( $_POST['action'] ) ? $_POST['action'] : "";

	if($action == "update"){

		//write our update query
		//$mysqli->real_escape_string() function helps us prevent attacks such as SQL injection
		$query = "update createevent		

		set event_title = '".$mysqli->real_escape_string($_POST['event_title'])."',
			location = '".$mysqli->real_escape_string($_POST['location'])."',
			start_date = '".$mysqli->real_escape_string($_POST['start_date'])."',
			start_time = '".$mysqli->real_escape_string($_POST['start_time'])."',
			end_date = '".$mysqli->real_escape_string($_POST['end_date'])."',
			end_time = '".$mysqli->real_escape_string($_POST['end_time'])."',
			event_description = '".$mysqli->real_escape_string($_POST['event_description'])."'
			where id='".$mysqli->real_escape_string($_REQUEST['id'])."'";

		//execute the query
		if( $mysqli->query($query) ) {
			//if updating the record was successful
			echo "Event was updated.";
		}else{
			//if unable to update new record
			echo "Database Error: Unable to update record.";
		}
	}

	//select the specific database record to update
	$query = "select event_title, location, start_date, start_time, end_date, end_time, event_description from createevent 
	where id='".$mysqli->real_escape_string($_REQUEST['id'])."'limit 0,1";
	

	//execute the query
	$result = $mysqli->query( $query );

	//get the result
	$row = $result->fetch_assoc();

	//assign the result to certain variable so our html form will be filled up with values
	$event_title = $row['event_title'];
	$location = $row['location'];
	$start_date = $row['start_date'];
	$start_time = $row['start_time'];
	$end_date = $row['end_date'];
	$end_time = $row['end_time'];
	$event_description = $row['event_description'];
	?>

	<!--we have our html form here where new user information will be entered-->
	
	<link href="../styles/form_style.css" type="text/css" rel="stylesheet"/>
	<div id="container">
	<div id="title"> Edit Event </div>
	<div id="border">
	<form action='#' method='post' border='0'>
		<table>
		<tr>
			<td>Event Title</td>
			<td><input type='text' name='event_title' value='<?php echo $event_title; ?>' /></td>
		</tr>

		<tr>
			<td>Location</td>
			<td><input type='text' name='location' value='<?php echo $location; ?>' /></td>
		</tr>

		<tr>
			<td>Start Date</td>
			<td><input type='text' name='start_date' value='<?php echo $start_date; ?>' /></td>
		</tr>

		<tr>
			<td>End Date</td>
			<td><input type='text' name='end_date' value='<?php echo $end_date; ?>' /></td>
		<tr>
		
		<tr>
			<td>Start Time</td>
			<td><input type='text' name='start_time' value='<?php echo $start_time; ?>' /></td>
		<tr>
		
		<tr>
			<td>End Time</td>
			<td><input type='text' name='end_time' value='<?php echo $end_time; ?>' /></td>
		<tr>
		
		<tr>
			<td>Event Description</td>
			<td><input type='text' name='event_description' value='<?php echo $event_description; ?>' /></td>
		<tr>
		
		<td></td>
		
		<td>
			<!-- so that we could identify what record is to be updated -->
			<input type='hidden' name='event_title' value='<?php echo $event_title?>' />
			<!-- we will set the action to update -->
			<input type='hidden' name='action' value='update' />
			<center><input type='submit' name="edit_sub" value='Edit' /></center>
			<div id="back"><center><a href='manage_events.php'>Back to display page</a></center></div>
		</td>
		</tr>
	</table>
	</form>
	</div>
	</div>
