var bill=[124,48,268];
var per;

//function to calculate tip as per given conditions
function calTip(amt) {
	// body...
	if(amt<50){
		return (0.5*amt);
	}

	else if(amt>50 && amt<=200){
		return (0.15*amt);
	}
	else{
		return(0.1*amt);
	}

}

var tip=[];
var finalAmt=[];
for(var i=0; i<bill.length;i++){
	tip[i]=calTip(bill[i]);
	finalAmt[i]=tip[i]+bill[i];
	//console.log([i] + '. total tip: ' + tip[i]);

}
console.log('total tip amount');

for(var j=0; j<tip.length; j++){
	console.log([j]+' tip amount '+ tip[j]);
	
} 
console.log('total amount including bill and tip');

for(var j=0; j<tip.length; j++){
	console.log([j]+' final amount '+finalAmt[j]);
} 
