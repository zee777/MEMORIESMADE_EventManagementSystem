<?php require_once("../includes/sessions.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>


<?php 
if (isset($_POST['submit'])){
	
	$menu_name = mysql_prep($_POST["menu_name"]);
	$position = (int) $_POST["position"]; 
	$visible = (int) $_POST["visible"];
	
	$query = "INSERT INTO subjects (";
	$query .= " menu_name, position, visible";
	$query .= ") VALUES (";
	$query .= "'{$menu_name}',{$position},{$visible}";
	$query .= ")";
	$result = mysqli_query($connection, $query);
	
	if ($result) {
		//Success
		$_SESSION["message"] = "Subject created.";
		redirect_to("manage_content.php");
		echo "Success!";
	}
	else{
		//Failure
		$_SESSION["message"] = "Subject creation failed.";
		redirect_to("new_subject.php");
	}
}
else {
	redirect_to("new_subject.php");
}

?>
<?php 
 if (isset($connection)){
	mysqli_close($connection); 
}
 ?>