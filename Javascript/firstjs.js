//Day 5 Javascript

//Data types and variables
console.log('Welcome to my page');

var firstName='Chandni';
console.log(firstName);

var lastName='Parikh';
console.log(lastName);

var rollNo=60;
console.log(rollNo);

var age=21;
console.log(age);

var x;
console.log(x);
x=10;
console.log(x);

//Variable mutation
age="twenty one";
x="helloo!!";
console.log(age + ' ' + x);

//Type coercion
console.log(firstName +' ' + lastName + ' age is ' + age + ' roll no is ' + rollNo);
var y =prompt('what is your fathers name');
console.log('my father name is '+ y);


//Operators
var present=2021;
var validAge=18;
var birthYear=prompt('Enter your birth year');
var current_age=present-birthYear;
console.log('current age is '+current_age);
var valid=current_age>validAge;
console.log('valid or not '+ valid);

