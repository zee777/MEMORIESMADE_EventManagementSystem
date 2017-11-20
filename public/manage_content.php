<?php require_once("../includes/sessions.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include("../includes/layouts/header.php"); ?>
<?php find_selected_page(); ?>

	<link href="../styles/manage_content.css" type="text/css" rel="stylesheet"/>
	<div id = "main">
		<div id = "navigation">
			<div id="title"><p>Main &nbsp;&nbsp;Navigation</p></div>
			<div class="main_nav"><a href ="manage_events.php">Manage Event</a></div>
			<div class="main_nav"><a href ="manage_user.php">Manage Users</a></div>
			<div class="main_nav"><a href ="admin_login.php">Logout</a></div>
			<br />
			</div>
		</div>
		<div id = "page">
			<?php echo message(); ?>
			<?php if($current_subject){ ?> 
			<h2>Manage Subject </h2>
				
				Menu Name: <?php echo $current_subject["menu_name"]; ?><br />
			
			<?php  } else if ($current_page) { ?>
			
			<h2>Manage Page </h2>
			Menu Name: <?php echo $current_page["menu_name"]; ?><br />
			
			<?php } else { ?>
					<p id="message">Please select a page.</p>
			<?php } ?>
		</div>  
	</div>
	
 <?php include("../includes/layouts/footer.php"); ?>