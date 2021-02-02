function validate() {
	var name=document.getElementById('name').value;
	var password=document.getElementById('password').value;
	var address=document.getElementById('address').value;
	//var games=document.forms['user_form']['games'];
	var gender=document.forms['user_form']['gender'];
	var age=document.getElementById('age').value;
	var hockey=document.getElementById('hockey').checked;
	var football=document.getElementById('football').checked;
	var badminton=document.getElementById('badminton').checked;
	var cricket=document.getElementById('cricket').checked;
	var male=document.getElementById('male').checked;
	var female=document.getElementById('female').checked;
	

	if(name=="") {
		window.alert('Pls enter your name');
		name.focus();
		return false;
	}

	if(password.length<8 || password=="") {
		window.alert('Pls enter proper password');
		password.focus();
		return false;
	}

	if(address=="") {
		window.alert('Pls enter your address');
		address.focus();
		return false;
	}

	if(hockey==false && football==false && badminton==false && cricket==false) {
		window.alert('Pls select any of the games')
		return false;
	}

	if(male==false && female== false) {
		window.alert('Pls select gender');
		return false;
	}
	if(age=='select'){
		window.alert('Pls select your age');
		return false;
	}

	return (true);







}