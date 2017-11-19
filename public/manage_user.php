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
		</div>
		<div id = "page">
			<?php echo message(); ?>

			<h2> Manage Users </h2>
				<?php include("manage_users.php"); ?>
		</div>
	</div>
	</div>
 <?php include("../includes/layouts/footer.php"); ?>