<!DOCTYPE html>
	<html>
		<head>
			<title>MemoriesMade</title>
			<link rel="stylesheet" type="text/css" href="../styles/createEvent_style.css" />
		</head>
		<body>			
			<div id="body">
			<div id="container">
			<br>
				<form action="createEvent_create.php?<?php 
						echo "id=	".$_SESSION['usedID'] = $_REQUEST['id']; //userID of logged in user
					?>" method="POST">
					<h1>Create Event</h1>
						<fieldset>
							<br>
							<p id="title"><span class="number">1</span>&nbsp;Event Details</p>
							<br><br><br><br>
							<label for="name">Event title:<input type="text" id="name" name="event_title"></label><br>
							<label for="location">Location:<input type="text" id="name" name="location"></label><br>
							<label for="date">Date and Time:</label><br>
							<p><span id="start">Start Date and Time</span><span id="end">End Date and Time</span></p>
							<label for="date"><input type="Date" name="start_date"><input type="Time" name="start_time">&nbsp;&nbsp;<input type="Date" name="end_date"><input type="Time" name="end_time">
							<br><br>
							<label for="desc">Event Description</label>
							<form action="/html/tags/html_form_tag_action.cfm" method="post">
								<textarea name="event_description" id="comments"></textarea>
							</form>
							<br><br><hr><br><br>
							<p id="title"><span class="number">2</span>&nbsp;Create Tickets</legend></p><br/>
							<br><br>
							<label for="ticket_price">Ticket price: <input type="int" name="ticket_price" placeholder="Php"></label></br>
							<label for="paid_ticket">How many tickets: <input type="int" name="paid_ticket"></label>
							
							<br><br><br><hr><br><br>
							<form action="" method="post">  
								<p id="title"><span class="number">3</span>Additional Settings</p><br>
								<br><br>
								<br>
							</form>
							
							<?php
								if(isset($_POST['sub'])){  
									include ("createEvent_create.php".$_SESSION['usedID'] = $_REQUEST['id']);  
									$checkbox1=$_POST['listingprivacy'];  
									$chk="";  
									foreach($checkbox1 as $chk1){  
										$chk .= $chk1.",";  
									}  
									$in_ch=mysqli_query($con,"insert into createevent(listingprivacy) values ('$chk')");  
									if($in_ch==1){  
										echo'<script>alert("Inserted Successfully")</script>';  
									}else{  
										echo'<script>alert("Failed To Insert")</script>';  
									}  
								}  
							?>  
							<br>
								<label>Event Type:</label>
								<select name="eventtype" >
									<optgroup label="Select Event Type" name="eventtype">
										<option value="Music Events">Music Events</option>
										<option value="Parties or Festivals">Parties or Festivals</option>
										<option value="Wedding Events">Wedding Event</option>
										<option value="Art Events">Art Event</option>
										<option value="Food and Drinks">Food and Drinks</option>
										<option value="Sports Event">Sports Events</option>
										<option value="Health Event">Health Evants</option>
										<option value="Seminars">Seminars</option>
									 </optgroup>
								</select>
									<br><br>	
									<button type="submit" name="submit" value="CreateEvent">Save details</button>
						</fieldset>	
				</form>
				<button id="cancel"><a href="home.php?<?php 
						echo "id=	".$_SESSION['usedID'] = $_REQUEST['id']; //userID of logged in user
					?>">Cancel</a></button>		
			</div>
			</div>
		</body>
	</html>