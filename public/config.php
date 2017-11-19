<?php 
 //1. Create a database connection
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $dbname = "memoriesmade_db";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	//Test if connection occured.
	if (mysqli_connect_errno()){
		die("Database connection failed:" .
		mysqli_connect_error() .
		" (" . mysqli_connect_errno() . ")"
		);
	}

?>
<?php 
	//2. Perform database query
	$query = "SELECT * FROM users";
	$result = mysqli_query($connection, $query);
	if(!$result) {
		die("Database query failed.");
	}
?>

<!DOCTYPE>
<html lang="en">
	<head>
		<title>Untitled</title>
	</head>
	
	<body>
	
		<ul>
		<?php
			//3. Use returned data (if any)
			while($row = mysqli_fetch_row($result)){
				//output data from each row
				var_dump($row);
				echo "<hr />";
			}
		?>
		</ul>
		<?php
		//4. Release returned data
		mysqli_free_result($result);
		?>
	</body>
</html>

<?php
	//5. Close Database connectionmysqli_close()
	mysqli_close($connection);
?>