<?php include("reg_processing.php"); ?>
<!DOCTYPE>
	<html>
		<head>
			<title>MemoriesMade</title>
			<link href="style\styles.css" type="text/css" rel="stylesheet"/>
		</head>
		<body>
			<div id="header">
				<div id="header_cont">
				<div id="header_logo"><a href="index.html"><img src="images\logo_here.png" alt="logo here please"></a></div> 
					<div id="login_reg">
						<button id="login">Login</button>
						<button id="reg">Register</button>
						
						<div id="log_myModal" class="modal">
							<div class="log_modalcontent">
								<span class="close">&times;</span>
									<form name="loginform" action="adminlogin_processing.php" onsubmit="return log_required()" method="POST">
									<p>Username</br><input type="text" name="username" value=""></p></br>
									<p>Password</br><input type="password" name="password" value=""></p></br>
									<input id="sub" type="submit" type="submit" value="Login">
								</form>
									<script src="../javascripts/login_non_empty.js"></script> 
							</div>
						</div>
						
						<div id="reg_myModal" class="modal">
							<div class="reg_modalcontent">
								<span class="close">&times;</span>
								<form name="regform" action="reg_processing.php" onsubmit="return reg_required()" method="POST">
									<p><span style="color: #FF0000; font-size: 10pt;">*&nbsp;</span>First Name</br><input type="text" name="firstName" value=""></p></br>
									<p><span style="color: #FF0000; font-size: 10pt;">*&nbsp;</span>Last Name</br><input type="text" name="lastName" value=""></p></br>
									<p><span style="color: #FF0000; font-size: 10pt;">*&nbsp;</span>Username</br><input type="text" name="username" value="<?php htmlspecialchars($username); ?>"></p></br>
									<p><span style="color: #FF0000; font-size: 10pt;">*&nbsp;</span>Password</br><input type="password" name="password" value="<?php htmlspecialchars($password); ?>"></p><br/>
									<p><span style="color: #FF0000; font-size: 10pt;">*&nbsp;</span>Confirm Password</br><input type="password" name="cPassword" value="<?php htmlspecialchars($cPassword); ?>"></p><br/>
									<p style="color: #FF0000; font-size: 10pt;">*&nbsp;Should not be left blank</p></br>
									<input id="sub" type="submit" name="submit" value="Register">
								</form>
									<script src="../javascripts/reg_non_empty.js"></script> 	
							</div>
						</div>
					</div>
				</div>
			</div>
			<script src="../javascripts/modal.js"></script>	
			
			<div id="nav">
				<div id="nav_cont">
					<ul id="navigations">
						<li class="styled"><a href="#contact_us">CONTACT US</a></li>
						<li class="styled"><a href="#team">THE TEAM</a></li>
						<li class="styled"><a href="#about_us">ABOUT US</a></li>
						<li class="styled"><a href="index.php">HOME</a></li>
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
			
			<script>
				let slideIndex = 1;
				showDivs(slideIndex);

				function plusDivs(n){
				  showDivs(slideIndex += n);
				}

				function showDivs(n){
					let i;
					let x = document.getElementsByClassName("slides");
					if (n > x.length){
						slideIndex = 1
					}if (n < 1){
						slideIndex = x.length
					}
					for(i = 0; i < x.length; i++){
					 x[i].style.display = "none";  
					}
					x[slideIndex-1].style.display = "block";  
				}
			</script>
			
			<div id="about_us">
				<div class="head"><p>ABOUT US</p></div>
				<p class="paragraph">MemoriesMade is a platform for creating, attending, and finding events that suits your passion, 
				lifestyle and choice. MemoriesMade allows any Davawenyos around the region to be gathered and 
				be acquainted with each other through interaction and communication. Our mission is to unite anyone in the region
				through their passion and preference.</p>
			</div>
			<center><div class="icons">
				<img src="images\icons\create.png" alt="https://www.flaticon.com/authors/gregor-cresnar" title="Gregor Cresnar">
				<img src="images\icons\join.png" alt="http://www.freepik.com" title="Freepik">
				<img src="images\icons\find.png" alt=="http://www.freepik.com" title="Freepik">
				<img src="images\icons\connect.png" alt=="http://www.freepik.com" title="Freepik">
			</div></center>
			
			<div id="team">
				<p class="head">MEET THE TEAM!</p>
				<center><img src="images\team\noona1.png">
				<img src="images\team\noona2.png">
				<img src="images\team\noona3.png">
				<img src="images\team\noona4.png"></center>
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