<?php
	include("database.php");
	include("..\includes\layouts\header_nav_username.php");
?>
<html>
	<head>
		<title>Join Event</title>
	</head>
	
	<body>
	<script type="text/javascript">
		function aff_div(ladiv) {
		  document.getElementById(ladiv).style.display = "inline";
		}

		function cach_div(ladiv) {
		  document.getElementById(ladiv).style.display = "none";
		}

		function affich_conj() {
		  if (document.forms.devis.radio[0].checked == true) {
			aff_div("ssconj");
		  }

		  if (document.forms.devis.radio[1].checked == true) {
			document.getElementById("jj").value = 0;
			cach_div("ssconj");
		  }
		}
		</script>

		<form id="devis" name="devis" action="sample.php" method="post">
			<fieldset>
			<br><br><br><br><br><br><br><br>
			<h1>Registration Form</h1>
			<p>Please fill all fields</p>
			</br></br>
			Attendee Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="name" name="attendee"></br></br>
			Contact Number: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="name" name="contactNo"></br></br>
			
			<br><br><br><br>
			<h1>Mode of Payment: </h1>
			
			<input name="radio" type="radio" value="Credit Card" onclick="affich_conj();">Credit Card
			<input name="radio" type="radio" value="Walk-in Payment" checked="checked" onclick="affich_conj();">Walk-in<br><br>
			<button type="submit" name="submit" value="joinEvent">Join</button>
			
			
			<div id="ssconj">
			<p>
			  <label>Credit Details</label><br>
			  Credit card number: <input id="jj" name="jj" type="int" value="">
			</p>
		  </div>
		  </fieldset>
		</form>
		
		<script type="text/javascript">
			cach_div("ssconj");
		</script>
		
	</body>
</html>