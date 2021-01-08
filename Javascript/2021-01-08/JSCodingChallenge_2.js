var avgJohn=(89+120+103)/3;
var avgMike=(116+94+123)/3;
var avgMary=(97+134+105)/3;

console.log('Average of team John is '+ avgJohn);
console.log('Average of team Mike is '+ avgMike);
console.log('Average of team Mary is '+ avgMary);


if(avgJohn>avgMike && avgJohn>avgMary) {console.log('Winner is Team John');}
else if (avgMike>avgJohn && avgMike>avgMary) {console.log('Winner is Team Mike');}
else if (avgMary>avgJohn && avgMary>avgJohn) {console.log('Winner is Team Mary');}
else if (avgJohn==avgMike && avgJohn>avgMary) {console.log('Winner are Team John and Team Mike and match is draw');}
else if (avgJohn==avgMary && avgJohn>avgMike) {console.log('Winner are Team John and Team Mary and match is draw');}
else if (avgMike==avgMary && avgMike>avgJohn) {console.log('Winner are Team Mary and Team Mike and match is draw');}
else{console.log('All matches are tied');}