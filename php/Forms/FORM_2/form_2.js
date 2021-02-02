

function validate(){
var name=document.getElementById('name').value;
var password=document.getElementById('password').value;
var address=document.getElementById('address').value;
var male=document.getElementById('male').checked;
var female=document.getElementById('female').checked;
var games=document.getElementByName('games[]');
var dob_date=document.getElementById('dob_date').value;
var dob_month=document.getElementById('dob_month').value;
var dob_year=document.getElementById('dob_year').value;
var married=document.getElementById('married').checked;
var unmarried=document.getElementById('unmarried').checked;
var tnc=document.getElementById('tnc').checked;
//window.print('hello');


if(name=="") {
		window.alert('Pls enter your name');
		name.focus();
		return false;
	}
 if(name.length<=3 || name.length>=15) {
 	document.getElementById('err_name').innerHTML="Name must be between 2 to 15 letters";
 	return false;
 }

 if(password=="") {
 	document.getElementById('err_password').innerHTML="Pls enter password";
 	return false;
 }

 if(password<=8) {
 	document.getElementById('err_password').innerHTML="Password must be more than 8 characters";
 	return false;
 }

if(address=="") {
	document.getElementById('err_address').innerHTML="Pls enter yr addrress";
	return false;
}

if(male==false && female==false) {
	document.getElementById('err_gender').innerHTML="Pls select yr gender";
	return false;
}

if(games[0].checked==false && games[1].checked==false && games[2].checked==false) {
	document.getElementById('err_games').innerHTML="Pls select game";
	return false;
}

if(married==false && unmarried==false){
	document.getElementById('err_status').innerHTML="Pls select yr maritial status";
	return false;
}
if(tnc==false){
	document.getElementById('err_tnc').innerHTML="Agree to our terms and conditions";
	return false;
}

return (true);

}