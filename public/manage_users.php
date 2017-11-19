<html>
	<head>
		<title>Manage Users</title>
	</head>

	<body>
		<?php
			//include database connection
			include 'database.php';
			
			$action = isset($_GET['action']) ? $_GET['action'] : "";
				if($action=='delete'){ //if the user clicked ok, run our delete query
				//$mysqli->real_escape_string() function helps us prevent attacks such as SQL injection
				$query = "DELETE FROM users WHERE userID = ".$mysqli->real_escape_string($_GET['id'])."";

			//execute query

			if( $mysqli->query($query) ){
			//if successful deletion
			echo "User was deleted.";
			}else{
				//if there's a database problem
				echo "Database Error: Unable to delete record.";
			}

			}

			$query = "select * from users";
			$result = $mysqli->query( $query );
			$num_results = $result->num_rows;
			
				if( $num_results ){
			
					echo "<table border='1'>";
					echo "<tr>";
						echo "<th>Firstname</th>";
						echo "<th>Lastname</th>";
						echo "<th>Username</th>";
						echo "<th>Action</th>";
						echo "</tr>";
						//loop to show each records
					
						while( $row = $result->fetch_assoc() ){
							extract($row);
							echo "<tr>";
							echo "<td>{$firstName}</td>";
							echo "<td>{$lastName}</td>";
							echo "<td>{$username}</td>";
							echo "<td>";
							echo "<a href='edit_users.php?id={$userID}'>Edit</a>";
							echo " / ";
						
						//on click of our delete link, a pop up will appear.
						//it means it run our delete JavaScript
							echo "<a href='#' onclick='delete_user( {$userID} );'>Delete</a>";
							echo "</td>";
					echo "</tr>";
					}
				echo "</table>";
				}else{
					echo "No records found.";
				}
					$result->free();
					$mysqli->close();
		?>
		
		<div class="subtitle"><a href='add.php'>Create User</a></div>
		<script type='text/javascript'>
			function delete_user(id){
				//prompt the user
				var answer = confirm('Are you sure?');
				if ( answer ){ //if user clicked ok
				//redirect to url with action as delete and id of the record to be deleted
				window.location = 'manage_user.php?action=delete&id=' + id;
				}
			}
		</script>

	</body>
</html>
