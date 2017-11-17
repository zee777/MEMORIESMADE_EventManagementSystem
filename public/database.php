<?php 
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "memoriesmade_db";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);


if(mysqli_connect_errno()){
	die("database connection failed: ".mysqli_connect_error()." (".mysqli_connect_errno(). ")");
}
