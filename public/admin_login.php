<html>
		<head>
			<title>MemoriesMade</title>
			<link href="../styles/adminlogin_styles.css" type="text/css" rel="stylesheet"/>
		</head>
		
		<body>
			<center><div id="container"><p>MEMORIESMADE<br/><span style="font-family: Raleway; color: #ffd8d8; font-size: 18px;">ADMINISTRATION &nbsp;&nbsp;LOGIN</span></p></div></center>
			<div class="form">
			<form name="loginform" action="adminlogin_processing.php" onsubmit="return log_required()" method="POST">
				<p>USERNAME</br><input type="text" name="username" value=""></p></br>
				<p>PASSWORD</br><input type="password" name="password" value=""></p></br>					
				<input id="sub" type="submit" name="submit" value="Login">
			<a id="back" href="index.php">Go back to main site</a>
			</form>
			<script src="../javascripts/login_non_empty.js"></script>
			</div>
		</body>
</html>