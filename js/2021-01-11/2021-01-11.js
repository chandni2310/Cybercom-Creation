// if else statements
var name='Chandni';
var status='single';

if(status==='single'){
	console.log(name+' '+'is single');
}

else{
	console.log(name+' '+ 'is not single');
}
//**********************************************
//boolean variable
var isstatus=true;
if(isstatus){
	console.log(name+' '+'is single!!');
}


else{
	console.log(name+' '+ 'is not single');
}

//*****************************************
//boolean logic AND OR NOT operators
var fName="smith";
var age =17;

if(age<12){
	console.log(fName+' is a boy');
} 

else if(age>=13 && age<20){
		console.log(fName+' is a teenager');
}

else if(age >20 && age<30){
		console.log(fName+' is a young man');
}
else{
		console.log(fName+' is a man');
}

//***************************************
// ternary operator

age>=18? console.log(fName+ ' can do vote') : console.log(fName+' can\'t vote'); 

var valid=age>=18?'eligible to vote':'not eligible to vote';
console.log(valid);

//************************************
//switch statement

var job='driver';

switch(job){
	case 'doctor':
	console.log(fName+' is a doctor');
	break;

	case 'teacher':
	console.log(fName+' is a teacher');
	break;

	case 'driver':
	console.log(fName+' is a driver');
	break;

	default:
	console.log(fName+' does nothing');

}

//*****************************************
// truthy and falsy values--->can be used to check whether variable is defined or not
//falsy values: 0,null,undefined,NaN,' '
var weight;

weight=23;

if(weight){
	console.log('variable is  defined');
}
else{
	console.log('variable not defined');

}

//***************************************
//Equality operator
//=== checks both value and data type whereas == does type coercion and only checks value
if(weight=='23'){
	console.log( '== does type coersion');
}

if(weight==='23'){
	console.log('valid');
}
else{
	console.log('=== does not do type coersion');
}

//*****************************************************
//Functions
function cal_age(year) {
	// body...
	return 2021-year;
}

 var chandni=cal_age(1999);
 var harshil=cal_age(2006);
console.log(chandni,harshil);

function retire(name,year) {
	// body...
	var p_age=cal_age(year);
	var retirement=65-p_age;
	console.log(name+' retires in '+retirement+' years' );

}

retire('Chandni',1999);
retire('Harshil',2006);




