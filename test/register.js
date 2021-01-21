
var email=document.getElementById('mail').value;
var password=document.getElementById('p_word').value;
var login=document.getElementById('login').value;
var register=document.getElementById('register').value;


function checkLogin(){
	if(localStorage.getItem(adminDetails)){
		var ad_arr=[];
		ad_arr=JSON.parse(localStorage.getItem('adminDetails'));
		for(var i in ad_arr){
			if(email===ad_arr[i].email){
				alert('Welcome Admin');
				sessionStorage.setItem('adminDetails',JSON.stringify(ad_arr));
				window.open("dashboard.html");
			}
			else{
				alert('Email not found');
			}
		}
	}
	else if(localStorage.getItem('userDetails')){
		var u_details=JSON.parse(localStorage.getItem('userDetails'));
		for(var j in u_details){
			if(email===u_details[j].email){
				window.open('dashboard.html');
			}
			else{
				alert("User not found");
			}

		}

	}
	else{
		alert('Please register first');
		window.open('register.html');
	}


}




function checkRegister(){
	window.open("Registration.html");

}

