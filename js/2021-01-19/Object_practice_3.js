//A program to sort an array of objects
const arr=[
{name:'mark', age:22, email:'abc@gmail.com'},
{name:'jack',age:15, email:'xyz@gmail.com'},
{name:'Chandni', age:30, email:'pqr@gmail.com'}

];

var x=arr.sort(function(a,b){
	if(a.name.toLowerCase()<b.name.toLowerCase()){
		return -1;
	}
	else if(a.name.toLowerCase()>b.name.toLowerCase()){
		return 1;
	}
	else{
		return 0;
	}
});
console.log('Array after sorting by name');
console.log(x);