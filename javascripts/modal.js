let log_modal = document.getElementById('log_myModal');
let reg_modal = document.getElementById('reg_myModal');
let log_btn = document.getElementById('login');
let reg_btn = document.getElementById('reg');
let log_span = document.getElementsByClassName('close')[0];
let reg_span = document.getElementsByClassName('close')[1];
			
	log_btn.onclick = function(){
		log_modal.style.display = "block";
	}
	reg_btn.onclick = function(){
		reg_modal.style.display = "block";
	}
	reg_span.onclick = function(){
		reg_modal.style.display = "none";
	}
	log_span.onclick = function(){
		log_modal.style.display = "none";
	}
	window.onclick = function(event){
		if(event.target == log_modal){
			log_modal.style.display = "none";
		}else if(event.target == reg_modal){
			reg_modal.style.display = "none";
		}
	}