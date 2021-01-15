//normal way we used to create object
var chandni={
	name:"chandni",
	age:21,
	birthYear:1999


};
console.log(chandni.name);

//creating function constructors--standard practice is to keep first letter capital of function constructor
var Person=function (name,age,birthYear) {
	this.name=name;
	this.age=age;
	this.birthYear=birthYear;
	/*this.cal_age=function (birthYear) {
		// body...
		console.log(2021-this.birthYear);
	}*/
	// body...
}

Person.prototype.cal_age=function () {
	// body...
	console.log(2021-this.birthYear);
};
Person.prototype.lastName="mark";

var julie= new Person("julie",25,1998);
var smith=new Person("smith",36,1986);
julie.cal_age();
smith.cal_age();
console.log(julie.lastName);
console.log(smith.lastName);


//************************************************
//Primitives vs Objects

//var as primitve
var a=23;
var b=a;
a=30;
console.log('value of a '+a);
console.log('value of b '+b);

//var as objects
var a1={
	name:"chandni",
	age:20

};
var a2=a1;
a1.age=29;
console.log('value of a1.age ' +a1.age);
console.log('value of a2.age ' +a2.age);

//functions
var b1=10;
var b2={
	name:"abc",
	city:"mumbai"
};

function change(x,y) {
	// body...
	x=40;
	y.city="chennai";

}

change(b1,b2);
console.log(b1);
console.log(b2.city);

//*****************************************************
//Passing functions as arguments 
var years=[1999,2008,1971,1986,2005];

function arrayCalc(arr, fn) {
	// body...
	var arrRes=[];
	for (var i=0;i<arr.length;i++){
		arrRes.push(fn(arr[i]));
	}
	return arrRes;
}

function calAge(ele) {
	// body...
	return 2021-ele;
}

function eligible(ele) {
	// body...
	return ele>=18;
}

function heartBeat(ele) {
	// body...
	if(ele>=18 && ele<=81){
		return Math.round(206.9-(0.67*ele));
	}
	else{
		return -1;
	}
}

var ages=arrayCalc(years,calAge);
console.log(ages);

var valid=arrayCalc(ages,eligible);
console.log(valid);

var maxBeat=arrayCalc(ages,heartBeat);
console.log(maxBeat);