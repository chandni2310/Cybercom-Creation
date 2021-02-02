function validate() {

	var email=document.getElementById('email').value;
	var password=document.getElementById('password').value;
	var email_regex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;



	if(email==""){
		//window.alert('hello');
		document.getElementById('err_email').innerHTML='* pls enter yr email';
		name.focus();
		return false;
	} else {
		if(!email_regex.test(email)){
			document.getElementById('err_email').innerHTML="enter email with proper format";
			return false;
		}
	}

	if(password==""){
		document.getElementById('err_password').innerHTML='* pls enter password';
		return false;
	} else {
		if(password.length<=8){
			document.getElementById('err_password').innerHTML='enter proper password';
			return false;
		}
	}



	return true;
}