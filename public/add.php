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

$query = "insert into users

set

firstName = '".$mysqli->real_escape_string($_POST['firstname'])."',

lastName = '".$mysqli->real_escape_string($_POST['lastname'])."',

username = '".$mysqli->real_escape_string($_POST['username'])."',

password = '".$mysqli->real_escape_string($_POST['password'])."'";

//execute the query

if( $mysqli->query($query) ) {

//if saving success

echo "User was created.";

}else{

//if unable to create new record

echo "Database Error: Unable to create record.";

}

//close database connection

$mysqli->close();

}

?>

<link href="../styles/form_style.css" type="text/css" rel="stylesheet"/>
<div id="container">
<div id="title">ADD USER</div>
<div id="border">
<!--we have our html form here where user information will be entered-->

<form action='#' method='post' border='0'>

<table>

<tr>

<td>Firstname</td>

<td><input type='text' name='firstname' /></td>

</tr>

<tr>

<td>Lastname</td>

<td><input type='text' name='lastname' /></td>

</tr>

<tr>

<td>Username</td>

<td><input type='text' name='username' /></td>

</tr>

<tr>

<td>Password</td>

<td><input type='password' name='password' /></td>

<tr>

<td></td>

<td>

<input type='hidden' name='action' value='create' />

<input type='submit' value='Save' />

<a href='manage_content.php'>Back to Manage Users</a>

</td>

</tr>

</table>

</form>
</div>
</div>

</body>

</html>
