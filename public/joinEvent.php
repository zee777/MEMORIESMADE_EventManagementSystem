<html>
	<head>
		<title>Join Event</title>
	</head>
	<body>
	<?php
		include("database.php");
	include("..\includes\layouts\header_nav_username.php");
		$query = "SELECT * FROM createevent";
		$result = mysqli_query($connection, $query);
		
		if(!$result){
			die("Database query failed!");
		}else{
			$num_rows = mysqli_num_rows($result);
			if($num_rows>0){ 
	?>
	
	<link rel="stylesheet" type="text/css" href="..\styles\categories.css" />
		<div id="container">
		<div class="table-responsive1">
		<h1>ALL &nbsp;&nbsp;EVENTS</h1>
			<table class="table_events">
				<p>
				<?php
					while ($num_rows = mysqli_fetch_array($result)) { ?>
				<tr class="image">
					<td colspan=2>Image here</td>
				</tr>
				
				<tr>
					<th>Event Title</th>
					<td><?php echo $num_rows['event_title']; ?></td> 
				</tr>
				<tr>
					<th>Start Date</th>
					<td><?php echo $num_rows['start_date']; ?></td> 
				</tr>
				<tr>
					<th>Start Time</th>
					<td><?php echo $num_rows['start_time']; ?> - <?php echo $num_rows['end_time']; ?></td> 
				</tr>
				<tr>
					<th>Location</th>
					<td><?php echo $num_rows['location']; ?></td> 
				</tr>
				<tr>
					<th>Event Description</th>
					<td><?php echo $num_rows['event_description']; ?></td> 
				</tr>
				<tr>
					<th>Ticket Price</th>
					<td><?php echo $num_rows['ticket_price']; ?></td> 
				</tr>
				<tr class="space">
					<td colspan=2></td>
				</tr>
				<tr>
					<td colspan = 2><hr></td>	
				</tr>
				<?php } ?>
				</p>
            </table>
		</div>
		</div>
		<?php
							}else{ ?>
							<h1 class="table-responsive">
								<small>No Records Found!</small>
							</h1>
							
							<?php
							}
							?>
							<?php
							}
							mysqli_close($connection);
							?>
	</body>
	</html>
