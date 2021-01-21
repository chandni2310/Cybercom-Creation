var userName=document.getElementById('userName').value;
var userEmail=document.getElementById('userEmail').value;
var userPassword=document.getElementById('userPassword').value;
var userBdate=document.getElementById('userBdate').value;
var userAdd=document.getElementById('add-user-btn').value
var u_details=[];

function addUser(){
	if(userAdd){
		var userDetails={
			name:userName,
			email:userEmail,
			password:userPassword,
			bdate:userBdate
		};
		if(localStorage.getItem('loginDetails'))
		{
			u_details=JSON.parse(localStorage.getItem('loginDetails'));

		}
		u_details.push(userDetails);
		localStorage.setItem('loginDetails',JSON.stringify(u_details));

	}
}

var user_d=JSON.parse(localStorage.getItem('loginDetails'));
if(user_d !=null){
	var date=new Date().getFullYear();
	var result="<table border='1'>";
	result+="<tr>";
	result += "<th> Name </th>";
 	result += "<th> Email </th>";
 	result+= "<th> Password </th>";
 	result += "<th> Date of Birth </th>";
 	result += "<th> Age </th>";
 	result += "</tr>";

 	for (var i=0;i<user_d.length;i++){
 		var current_age=date-new Date(user_d[i].bdate).getItem();

 			result += "<tr>";
 			result += "<td>" + user_d[i].name + "</td>";
 			result+= "<td>" + user_d[i].email + "</td>";
 			result += "<td>" + user_d[i].password + "</td>";
 			result+= "<td>" + user_d[i].bdate + "</td>" ;
 			result+= "<td>" + age + "</td>";
 			}

 			result+="</tr>";
 			reuslt+="</table>";

 			var final=document.getElementById('user-table').innerHTML=result;

 	}
