<?php require_once("../includes/sessions.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>

<?php 
	$current_subject = find_subject_by_id($_GET["subject"]);
	if (!$current_subject){
		redirect_to("manage_content.php"); 
	}
	
	$id = $current_subject["id"];
	$query = "DELETE FROM subjects where id = {id} LIMIT 1";
	$result = mysqli_query($connection, $query);
	
	if ($result && mysqli_affected_rows($connection) == 1) 
	{
		$_SESSION["message"] = "Subject deleted.";
		redirect_to("manage_content.php");
	}
	else {
		$_SESSION["message"] = "Subject deletion failed.";
		redirect_to("manage_content.php?subject={id}");
	}
	
?>