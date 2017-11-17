<?php
	include("database.php");
?>
<!DOCTYPE>
	<html>
		<head>
			<title>MemoriesMade</title>
			<link href="style\styles.css" type="text/css" rel="stylesheet"/>
		</head>
		<body>
			<div id="header">
				<div id="header_cont">
						<div id="header_logo"><a href="home.php"><img src="..\images\logo_here.png" alt="logo here please"></a></div>
						<div class="dropdown">
							<button class="dropbtn"><?php ($username) ?></button>
							<div class="dropdown-content">
								<a href="profile.php">View Profile </a>
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
							
							<div class="table-responsive">
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
							<h1 class="table-responsive">
								<small>No Records Found!</small>
							</h1>
							
							<?php
							}
							?>
							<?php
							}
							}
							mysqli_close($connection);
							?>
	
						</li>
						<li class="styled"><a href="#contact_us">CONTACT US</a></li>
						<li class="styled"><a href="#events">CATEGORIES</a></li>
						<li class="styled"><a href="#create_event">EVENTS</a></li>
						<li class="styled"><a href="home.php">HOME</a></li>
					</ul>
				</div>
			</div>
			
			<div id="slider">
				<div id="slider_cont">
					<img class="slides" src="images\slider_img\wedding_events.jpg" style="width:100%" alt="http://www.freepik.com Designed by v.ivash / Freepik">
					<img class="slides" src="images\slider_img\birthday_events.jpg" style="width:100%" alt="http://www.freepik.com Designed by Pressfoto / Freepik">
					<img class="slides" src="images\slider_img\music_events.jpg" style="width:100%" alt="http://www.freepik.com Designed by Bedneyimages / Freepik">
					
					<button class="but_prev" onclick="plusDivs(-1)">&#10094;</button>
					<button class="but_next" onclick="plusDivs(1)">&#10095;</button>
				</div>
				<div id="float_imagebg">
				</div>
				
				<div id="image_cont">
					<div id="float_img">
						<div id="image"><img src="images\front_img.png"></div>
						
					</div>
				</div>
			</div>
			
			<script src="../javascripts/slideshow.js"></script>	
			
			<div id="create_event">
				<div class="head"><p>EVENTS</p></div>
				<a href="createEvent.php"><img src="..\images\icons\create.png" alt="https://www.flaticon.com/authors/gregor-cresnar" title="Gregor Cresnar"></a>
				<a href="joinEvent.php"><img src="..\images\icons\join.png" alt="https://www.flaticon.com/authors/gregor-cresnar" title="Gregor Cresnar"></a>
			</div>
			
			<div id="events">
			<div class="head"><p>CATEGORIES</p></div>
			<div id="category">
					<div class="gallery">
						<a href="..\images\categories_img\music_events.jpg"><img src="..\images\categories_img\music_events.jpg" alt="http://www.freepik.com Designed by skadyfernix / Freepik" class="image"></a>
						<a href="music_cat.php"><div class="desc"><div class="text">MUSIC</div></div></a>
					</div>
					<div class="gallery">
						<a href="..\images\categories_img\parties_events.jpg"><img src="..\images\categories_img\parties_events.jpg" alt="http://www.freepik.com Designed by Freepik" class="image"></a>
						<a href="parties_cat.php"><div class="desc"><div class="text">PARTIES/FESTIVALS</div></div></a>
					</div>
					<div class="gallery">
						<a target="_blank" href="..\images\categories_img\technology_events.jpg"><img src="..\images\categories_img\technology_events.jpg" alt="http://www.freepik.com Designed by ijeab / Freepik" class="image"></a>
						<a href="technology_cat.php"><div class="desc"><div class="text">TECHNOLOGY</div></div></a>
					</div>
					<div class="gallery">
						<a target="_blank" href="..\images\categories_img\arts_events.jpg"><img src="..\images\categories_img\arts_events.jpg" alt="http://www.freeimages.comphotogallery-series-1-1554546" class="image"></a>
						<a href="arts_cat.php"><div class="desc"><div class="text">ARTS</div></div></a>
					</div>
					<div class="gallery">
						<a target="_blank" href="..\images\categories_img\food_events.jpeg"><img src="..\images\categories_img\food_events.jpeg" alt="https://www.anglotopia.net/site-news/featured/brit-food-fiver-five-great-autumn-food-festivals-britain-plan-next-trip-around/" class="image"></a>
						<a href="food_cat.php"><div class="desc"><div class="text">FOOD AND DRINKS</div></div></a>
					</div>
					<div class="gallery">
						<a target="_blank" href="..\images\categories_img\sports_events.jpg"><img src="..\images\categories_img\sports_events.jpg" alt="http://www.freepik.com" class="image"></a>
						<a href="sports_cat.php"><div class="desc"><div class="text">SPORTS</div></div></a>
					</div>
					<div class="gallery">
						<a target="_blank" href="..\images\categories_img\health_events.jpg"><img src="..\images\categories_img\health_events.jpg" alt="http://www.freepik.com Designed by Jannoon028 / Freepik" class="image"></a>
						<a href="health_cat.php"><div class="desc"><div class="text">HEALTH</div></div></a>
					</div>
					<div class="gallery">
						<a target="_blank" href="..\images\categories_img\networking_events.jpg"><img src="..\images\categories_img\networking_events.jpg" alt="https://www.marketingdonut.co.uk/sites/default/files/how-networking-benefits-my-business153117176.jpg" class="image"></a>
						<a href="networking_cat.php"><div class="desc"><div class="text">NETWORKING</div></div></a>
					</div>
				</div>
			</div>
			</div>
			
			<div id="contact_us">
				<div class="footer_con">
					<p class="stylef">About us</p><hr>
					<ul class="stylep_con">
						<li><a href="#">What is MemoriesMade?</a></li>
						<li><a href="#">Developers</a></li>
					</ul>
				</div>
				<div class="footer_con">
					<p class="stylef">Use MemoriesMade</p><hr>
					<ul class="stylep_con">
						<li><a href="#">How it works?</a></li>
						<li><a href="#">MemoriesMade User Reviews</a></li>
					</ul>
				</div>
				<div class="footer_con">
					<p class="stylef">Contact Us</p><hr>
					<ul class="stylep_con">
						<li><a href="#">282-1267</a></li>
						<li><a href="#">E-mail</a></li>
						<li><a href="#">Facebook</a></li>
						<li><a href="#">Instagram</li>
						<li><a href="#">Twitter</a></li>
					</ul>
				</div>
			</div>
			
			<div id="copyright">
				<center><p>&#x24B8;MemoriesMade 2017</p></center>
			</div>
		</body>
	</html>