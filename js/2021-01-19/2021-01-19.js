//Classes

//In ES5-->we use function constructor and prototype method for inheritance

var Person5=function(name,b_year,job){
	this.name=name;
	this.b_year=b_year;
	this.job=job;

}

Person5.prototype.cal_age=function(){
	var age=new Date().getFullYear()-this.b_year;
	console.log(age);
}

var j5=new Person5('chandni',1999,'teacher');


//ES6
class Person6{
	constructor(name,b_year,job){
		this.name=name;
		this.b_year=b_year;
		this.job=job;
	}

	c_age(){
		var age=new Date().getFullYear()-this.b_year;
		console.log(age);
	}

	static greeting(){
		console.log('helloo hii!!');
	}
}

var j6= new Person6('harshil',2006,'Designer');

//to call static method we need class_name.Method(),we can't call static method using object
Person6.greeting();






//********************************************************************
//Classes and Subclasses

//Inheritance in ES5
var P5=function(name,b_year,job){
	this.name=name;
	this.b_year=b_year;
	this.job=job;
}

P5.prototype.cal_age=function(){
	var age=2021-(this.b_year);
	console.log(age);
}

var Athlete5=function(name,b_year,job,games,medals){
	P5.call(this,name,b_year,job);
	this.games=games;
	this.medals=medals;
}

Athlete5.prototype=Object.create(P5.prototype);

Athlete5.prototype.wonMedal=function(){
	this.medals++;
	console.log(this.medals);
}

var jack5=new Athlete5('jack',1999,'cricketer',3,10);
jack5.cal_age();
jack5.wonMedal();



//ES6
class P6{
	constructor(name,b_year,job){
		this.name=name;
		this.b_year=b_year;
		this.job=job;
	}

	cal_age(){
		var age=2021-this.b_year;
		console.log(age);
	}
}

class Athlete6 extends P6{
	constructor(name,b_year,job,games,medals){
		super(name,b_year,job);
		this.games=games;
		this.medals=medals;
	}
	wonMedal(){
		this.medals++;
		console.log(this.medals);
	}
}

var jack6=new Athlete6("jack",2006,"officer",12,6);
jack6.cal_age();
jack6.wonMedal();





var chandni={
	name:"chandni",
	city:"nadiad",
	isMarried:false
}

function gkeys(obj){
	var keys=[];
	for( var key in obj){
		keys.push(key);
	}
	return keys;
}


console.log(gkeys(chandni));












