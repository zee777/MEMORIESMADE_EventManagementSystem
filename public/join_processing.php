<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "memoriesmade_db";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

<form action="join_processing.php?<?php 
			echo "id=	".$_SESSION['usedID'] = $_REQUEST['id'], 
			"&eventID=".$_SESSION['usedEventID'] = $_REQUEST['eventID']; ?>" method="POST">
			
if(mysqli_connect_errno()){
	die("database connection failed: ".mysqli_connect_error()." (".mysqli_connect_errno(). ")");
}
			if(isset($_POST["attendee"])) {
				$attendee = $_POST["attendee"];
			}
			
			if(isset($_POST["contactNo"])) {
				$contactNo = $_POST["contactNo"];
			}
			
			if(isset($_POST['radio']))
			{
				$payment = $_POST['radio'];  //  Displaying Selected Value
				if(isset($_POST['jj'])){
					echo "<br>".$_POST['jj'];
				}
			}
			
			if(isset($_POST["submit"])){
				$dataTime = date("Y-m-d H:i:s");
				$_SESSION['usedID'] = $_REQUEST['id'];
				$uID = $_SESSION['usedID'];
				$_SESSION['usedEventID'] = $_REQUEST['eventID'];
				$eventID = $_SESSION['usedEventID'];
				
				$query = "insert into event_attendees (uID, attendee, contactNo, eventID, payment, joined) values ('{$uID}','{$attendee}','{$contactNo}','{$eventID}','{$dataTime}')";
				$result = mysqli_query($connection, $query);
						if(!$result){
							die("Database query failed!");
						}else {
							header("Location: home.php?id=".$uID);
						}
			}
	mysqli_close($connection);
	?>