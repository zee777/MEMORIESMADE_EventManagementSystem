<?php 
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "memoriesmade_db";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(mysqli_connect_errno()){
	die("database connection failed: ".mysqli_connect_error()." (".mysqli_connect_errno(). ")");
}
	if(isset($_POST["firstName"])) {
		$firstName = $_POST["firstName"];
	}
	if(isset($_POST["lastName"])){ 
		$lastName = $_POST["lastName"];
	}
	if(isset($_POST["username"])) {
		$username = $_POST["username"];
	}
	if(isset($_POST["password"])) {
		$password = $_POST["password"];
	}
	
	if(isset($_POST["submit"])){
		$firstName = $_POST["firstName"];
		$lastName = $_POST["lastName"];
		$username = $_POST["username"];
		$password = $_POST["password"];
		$cPassword = $_POST["cPassword"];
		
		if(isset($_POST["password"])) {
			$password = $_POST["password"];
			$cPassword = $_POST["cPassword"];
				if($password != $cPassword ){
					echo "<script>alert('password does not match');
					window.location.href='index.php';</script>";
					
					
				}else if(strlen($password) < 8){
					echo "<script>alert('Password is too short!');
					window.location.href='index.php';</script>";
				}else{
					$query = "insert into users(firstName, lastName, username, password) values ('{$firstName}','{$lastName}','{$username}','{$password}')";
					$result = mysqli_query($connection, $query);
						if(!$result){
							echo "<script>alert('There were some errors');
							window.location.href='index.php';</script>";
						}
						else{
							echo "<script>alert('Registered Successfully!');
							window.location.href='index.php';</script>";
						}
					}
		}
	}else{
		$firstName = "";
		$lastName = "";
		$username = "";
		$password = "";
		$cPassword = "";
	}
	
?>