var massMark,massJohn,heightMark,heightJohn;
massMark=45;
massJohn=70;
heightMark=1.45;
heightJohn=1.64;
var markBMI=massMark/(heightMark*heightMark);
var johnBMI=massJohn/(heightJohn*heightJohn);
console.log('Mark BMI is '+markBMI);
console.log('John BMI is '+johnBMI);
var highBMI=markBMI>johnBMI;
console.log('Marks BMI higher than John? '+highBMI);

