function log_required(){
	var username_val = document.forms["loginform"]["username"].value;  
	var password_val = document.forms["loginform"]["password"].value;
	
	if(username_val == "" && password_val == ""){
		alert("Please input username and password");  
		return false;
	}else if(username_val == ""){  
		alert("Please input username");  
		return false;  
	}else if(password_val == ""){  
		alert("Please input password");  
		return false;  
	}else{ 
		return true;   
	}

}
