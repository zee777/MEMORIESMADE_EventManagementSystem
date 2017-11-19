<?php require_once("../includes/sessions.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include("../includes/layouts/header.php"); ?>
<?php find_selected_page(); ?>

<link href="../styles/manage_content.css" type="text/css" rel="stylesheet"/>
	<div id = "main">
		<div id = "navigation">
			<div id="subjects"><p><span id="cont">Subjects</span></p><?php echo navigation($current_subject, $current_page); ?></div>
		</div>
		<div id = "page">
			<?php echo message(); ?>
			
			<h2> Create Subject </h2>
			<form action = "create_subject.php" method="post">
				<p>Subject Name:
					<input type ="text" name="menu_name" value=""/>
				</p>
				<p>Position:
					<select name = "position">
					<?php
						$subject_set= find_all_subjects();	
						$subject_count = mysqli_num_rows($subject_set);
						for($count=1; $count <= $subject_count + 1; $count++){
							echo "<option value=\"{$count}\">{$count}</option>";
						}
					?>
					</select>
				</p>
				<p>Visible:
					<input type ="radio" name="visible" value="0" /> No		
					&nbsp;
					<input type="radio" name="visible" value="1" /> Yes
				</p>
				<input type ="submit" name="submit" value = "Create Subject" />
			</form>
			<br />
			<div id="cancel"><a href ="manage_content.php">Cancel</a></div>
		</div>  
	</div>
	</div>
 <?php include("../includes/layouts/footer.php"); ?>