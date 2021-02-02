function validate() {
	var fname=document.getElementById('f_name').value;
	var lname=document.getElementById('l_name').value;
	var dob_date=document.getElementById('dob_date').value;
	var dob_month=document.getElementById('dob_month').value;
	var dob_year=document.getElementById('dob_year').value;
	var gender=document.getElementsByName('gender');
	var country=document.getElementById('country').value;
	var email=document.getElementById('email').value;
	var password=document.getElementById('password').value;
	var c_password=document.getElementById('c_password').value;
	var phone=document.getElementById('phone').value;
	var tnc=document.getElementById('tnc')
	var email_regex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    var phone_regex = /^\d{10}$/;




	if(fname==""){
		//window.alert('hello');
		document.getElementById('err_fname').innerHTML='pls enter first name';
		name.focus();
		return false;
	}

	if(lname==""){
		document.getElementById('err_lname').innerHTML='pls enter last name';
		return false;
	}

	if(dob_date=="" || dob_month=="" ||dob_year==""){
		document.getElementById('err_dob').innerHTML="Pls select birthdate";
		return false;
	}

	if(gender[0].checked==false && gender[1].checked==false){
		document.getElementById('err_gender').innerHTML="Pls select gender";
		return false;
	}

	if(country==""){
		document.getElementById('err_country').innerHTML="Pls select country";
		return false;
	}

	if(email==""){
		document.getElementById('err_email').innerHTML="Pls enter email";
		return false;
	} else{
		if(!email_regex.test(email)){
			document.getElementById('err_email').innerHTML="enter email with proper format";
			return false;
		}
	}

	if(phone==""){
		document.getElementById('err_phone').innerHTML="Pls enter phone no.";
		return false;

	} else {
		if(!phone_regex.test(phone)){
			document.getElementById('err_phone').innerHTML="phone number must be of 10 digits";
			return false;
		}
	}

	if(password==""){
		document.getElementById('err_password').innerHTML="pls enter password";
		return false;
	}

	if(c_password!=password){
		document.getElementById('err_cpassword').innerHTML="password not same";
		return false;
	}


	if(tnc.checked==false){
		document.getElementById('err_tnc').innerHTML="first agree to terms and conditions";
		return false;
	}





	return true;
}