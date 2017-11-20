
<!DOCTYPE>	
	<html>
		<head>
			<title>MemoriesMade</title>
			<link href="..\..\styles\home_styles.css" type="text/css" rel="stylesheet"/>
		</head>
		<body>
			<div id="header">
				<div id="header_cont">
						<div id="header_logo"><a href="..\..\home.php?<?php 
						echo "id=	".$_SESSION['usedID'] = $_REQUEST['id']; //userID of logged in user
					?>"><img src="..\..\images\logo_here.png" alt="logo here please"></a></div>
						<div class="dropdown">
							<button class="dropbtn">
								<?php 
									include("..\..\public\database.php");
									$_SESSION['usedID'] = $_REQUEST['id'];
									$id = $_SESSION['usedID'];
									$query = "SELECT firstName FROM users WHERE userID = ($id)";
									$result = mysqli_query($connection, $query);
									
									if(!$result){
										die("Database query failed!");
									}else{
										$num_rows = mysqli_num_rows($result);
										if($num_rows>0){ 
										while ($num_rows = mysqli_fetch_array($result)) {
										echo $num_rows['firstName'];
										}
										}
										else{
											echo 'Unknown user';
										}
									}
								?>
							</button>
							<div class="dropdown-content">
								<a href="profile.php?<?php 
						echo "id=	".$_SESSION['usedID'] = $_REQUEST['id']; //userID of logged in user
					?>">View Profile </a>
								<a href="index.php">Log out</a>
							</div>
						</div>
				</div>
			</div>
			
			<div id="nav">
				<div id="nav_cont">
					<ul id="navigations">
						<li>
							<form method="POST" action="">
                               <input type="text" id="name" name="event_title" class="search" placeholder="Enter event title..." required>
                                <input type="submit" name="submit" class="button" value="Search">
							</form>
							<?php
								
								if(isset($_POST["event_title"])){
									$event_title = $_POST["event_title"];
								}
								if(isset($_POST["submit"])){
										$query = "SELECT * FROM createevent WHERE event_title = '{$event_title}'";
										$result = mysqli_query($connection, $query);
										if(!$result){
											die("Database query failed!");
										}else{
										$num_rows = mysqli_num_rows($result);
										if($num_rows>0){ 
							?>
							
							<div class="table-responsive1"><a href="music_cat.php">&times;</a>
							<table class="table table-bordered table-hover table-striped">
								<thead>
								<p>
								<tr>
									<th>Event Title &nbsp;&nbsp;&nbsp;&nbsp;</th>
									<th>Date Start &nbsp;&nbsp;&nbsp;&nbsp;</th>           
									<th>Time </th>
								</tr>
								</p>
								</thead>
							
								<tbody>
									<?php
										while ($num_rows = mysqli_fetch_array($result)) { ?>
											<tr>
												<td><?php echo $num_rows['event_title']; ?></td>
												<td><?php echo $num_rows['start_date']; ?></td>                                        
												<td><?php echo $num_rows['start_time']; ?> - <?php echo $num_rows['end_time']; ?></td>
											</tr>
									<?php } ?>
								</tbody>
                            </table>
							</div>
							
							
							<?php
							}else{ ?>
							<h1 class="table-responsive"><a href="music_cat.php">&times;</a>
								<small>No Records Found!</small>
							</h1>
							
							<?php
							}
							?>
							<?php
							}
							}
							?>
	
						</li>
						<li class="styled"><a href="..\..\public\home.php?<?php 
						echo "id=	".$_SESSION['usedID'] = $_REQUEST['id']; //userID of logged in user
					?>#contact_us">CONTACT US</a></li>
						<li class="styled"><a href="..\..\public\home.php?<?php 
						echo "id=	".$_SESSION['usedID'] = $_REQUEST['id']; //userID of logged in user
					?>#events">CATEGORIES</a></li>
						<li class="styled"><a href="..\..\public\home.php?<?php 
						echo "id=	".$_SESSION['usedID'] = $_REQUEST['id']; //userID of logged in user
					?>#create_event">EVENTS</a></li>
						<li class="styled"><a href="..\..\public\home.php?<?php 
						echo "id=	".$_SESSION['usedID'] = $_REQUEST['id']; //userID of logged in user
					?>">HOME</a></li>
					</ul>
				</div>
			</div>