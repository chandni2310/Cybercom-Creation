var john={
	name:'john',
	mass:38,
	height:1.49,
	johnBMI:function () {
		this.bmi=this.mass/(this.height*this.height);
		console.log('BMI of John is '+this.bmi);
		// body...
	}
}

var mark={
	name:'mike',
	mass:50,
	height:1.64,
	markBMI:function () {
		this.bmi=this.mass/(this.height*this.height);
		console.log('BMI of Mark is '+this.bmi);
		// body...
	}

}

john.johnBMI();
mark.markBMI();

if(john.bmi>mark.bmi){
	console.log('John has higher BMI '+john.bmi);
}
else if(mark.bmi>john.bmi){
	console.log('Mark has higher BMI '+ mark.bmi);

}
else{
	console.log('Mark and John have same BMI value');
}
