function validate(){
	//var flag = false;
	var name = document.getElementById('name').value;
	var email = document.getElementById('email').value;
	var subject = document.getElementById('subject').value;
	var message = document.getElementById('message').value;
	var send = document.getElementById('send');
	var email_regex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

	var nameErr = emailErr = subjectErr = messageErr = '';


	if(name==""){
		//window.alert('hello');
		document.getElementById('err_name').innerHTML='Pls enter yr name';
		name.focus();
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

	if(subject==""){
		//window.alert('hello');
		document.getElementById('err_subject').innerHTML='Subject is required';
		name.focus();
		return false;
	}

	if(message==""){
		//window.alert('hello');
		document.getElementById('err_message').innerHTML='Msg is required';
		name.focus();
		return false;
	}










	return true;

	

}