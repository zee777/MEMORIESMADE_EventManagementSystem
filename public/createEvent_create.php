<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "memoriesmade_db";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(mysqli_connect_errno()){
	die("database connection failed: ".mysqli_connect_error()." (".mysqli_connect_errno(). ")");
}		
			if(isset($_POST["event_title"])) {
				$event_title = $_POST["event_title"];
			}
			if(isset($_POST["location"])) {
				$location = $_POST["location"];
			}
			if(isset($_POST["start_date"])) {
				 $start_date = $_POST["start_date"];
			}
			if(isset($_POST["start_time"])) {
				$start_time = $_POST["start_time"];
			}
			if(isset($_POST["end_date"])) {
				 $end_date = $_POST["end_date"];
			}
			if(isset($_POST["end_time"])) {
				$end_time = $_POST["end_time"];
			}
			if(isset($_POST["event_description"])) {
				$event_description = $_POST["event_description"];
			}
			if(isset($_POST["ticket_price"])) {
				$ticket_price = $_POST["ticket_price"];
			}
			if(isset($_POST["paid_ticket"])) {
				$paid_ticket = $_POST["paid_ticket"];
			}
			if(isset($_POST["eventtype"])) {
				$eventtype = $_POST["eventtype"];
			}
			
			if(isset($_POST["submit"])){
				$_SESSION['usedID'] = $_REQUEST['id'];
				$uID = $_SESSION['usedID'];
				
				$query = "insert into createevent (event_title, location, start_date, start_time, end_date, end_time, event_description, ticket_price, paid_ticket, eventtype, uID) values ('{$event_title}','{$location}','{$start_date}','{$start_time}','{$end_date}','{$end_time}','{$event_description}','{$ticket_price}','{$paid_ticket}','{$eventtype}','{$uID}')";
				$result = mysqli_query($connection, $query);
				if(!$result){
					die("Database query failed!");
				}
				else {
					header("Location: home.php?id=".$_SESSION['usedID']);
				}
			}
	mysqli_close($connection);
	?>