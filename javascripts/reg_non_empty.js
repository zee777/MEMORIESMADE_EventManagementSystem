function reg_required(){
	var firstname_val = document.forms["regform"]["firstName"].value;
	var lastname_val = document.forms["regform"]["lastName"].value;
	var username_val = document.forms["regform"]["username"].value;  
	var password_val = document.forms["regform"]["password"].value;
	var cPassword_val = document.forms["regform"]["cPassword"].value;

	if(firstname_val === "" || lastname_val === "" || 
	username_val === "" || password_val === "" || cPassword_val === ""){
		alert("Please fill up all fields");
		return false;
	}else{ 
		return true;   
	}
}
