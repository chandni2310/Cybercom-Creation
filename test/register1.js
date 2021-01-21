function checkRegister() {

	var a_name=document.getElementById('admin_fname').value;
	var a_email=document.getElementById('admin_email').value;
	var a_password=document.getElementById('admin_pass').valu;e
	var a_confirmpassword=document.getElementById('c_word').value;
	var a_city=document.getElementById('city').value;
	var a_state=document.getElementById('state').value;
	var a_checkbox=document.getElementById('term').value;
	var register=document.getElementById('btn-register').value;

	if(register){
		if(a_password===a_confirmpassword){
			console.log('same password');
			if(localStorage.getItem('adminDetails')){
				alert('Admin has already registered');
				window.open(login.html)''
			}
			else{
				var aDetails={
					name:a_name,
					email:a_email,
					password:a_password,
					city:a_city,
					state:a_state
				}
				localStorage.setItem('adminDetails',JSON.stringify(aDetails));
				window.open(login.html);
			}
		}

	}

}