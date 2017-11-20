<html>
	<head>
		<title>Manage Event</title>
	</head>

	<body>
			<?php
			//include database connection
			include 'database.php';
			
			$action = isset($_GET['action']) ? $_GET['action'] : "";
				if($action=='delete'){ //if the user clicked ok, run our delete query
				//$mysqli->real_escape_string() function helps us prevent attacks such as SQL injection
				$query = "DELETE FROM createevent WHERE id = ".$mysqli->real_escape_string($_GET['id'])."";
 
			//execute query
			if( $mysqli-> query($query) ){
			//if successful deletion
			echo "Event deleted.";
			}else{
				//if there's a database problem
				echo "Database Error: Unable to delete record.";
			}

			}

			$query = "select * from createevent";
			$result = $mysqli-> query( $query );
			$num_results = $result-> num_rows;
			
			?>
			
			<link href="../styles/manage_content.css" type="text/css" rel="stylesheet"/>
			<?php
				if( $num_results ){
					echo "<table border='1'>";
					echo "<tr>";
						echo "<th>EVENT TITLE</th>";
						echo "<th>LOCATION</th>";
						echo "<th>START DATE</th>";
						echo "<th>START TIME</th>";
						echo "<th>END DATE</th>";
						echo "<th>END TIME</th>";
						echo "<th>EVENT DESCRIPTION</th>";
						echo "<th>OPERATION</th>";
					echo "</tr>";
						//loop to show each records
						while( $row = $result->fetch_assoc() ){
							extract($row);
							
							echo "<tr>";
							echo "<td>{$event_title}</td>";
							echo "<td>{$location}</td>";
							echo "<td>{$start_date}</td>";
							echo "<td>{$start_time}</td>";
							echo "<td>{$end_date}</td>";
							echo "<td>{$end_time}</td>";
							echo "<td>{$event_description}</td>";
							echo "<td>";
							echo "<a href='edit_event.php?id={$id}}'>Edit</a>";
							echo " / ";
						
						//on click of our delete link, a pop up will appear.
						//it means it run our delete JavaScript
							echo "<a href='#' onclick='delete_event( {$id} );'>Delete</a>";
							echo "</td>";
					echo "</tr>";
					}
				echo "</table>";
				}else{
					echo " No records found.";
				}
					$result->free();
					$mysqli->close();
		?>
		
		<div class="subtitle"><a href='add_event.php'>Create Event</a></div>
		<script type='text/javascript'>
			function delete_event(id){
				//prompt the user
				var answer = confirm('Are you sure?');
				if (answer){ //if user clicked ok
				//redirect to url with action as delete and id of the record to be deleted
				window.location = 'manage_events.php?action=delete&id=' + id;
				}
			}
		</script>
		
	</body>
</html>