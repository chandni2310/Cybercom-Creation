//Print a list of properties of Javascript objects
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


//Add multiple objects in local storage
const obj=[{
	name:'Chandni',
	age:22,
	email:'abc@gmail.com'

},
{
	name:'Harshil',
	age:15,
	email:'xyz@gmail.com'
}];


var myObj=JSON.stringify(obj);
localStorage.setItem('user',myObj);
var x=console.log(JSON.parse(localStorage['user']));





 var mainObj = [
        {
            name: "Kapil",
            age:  21,
            status: "Active"
        },
        {
            name: "John",
            age:  28,
            status: "Inactive"
        },
        {
            name: "Deos",
            age:  18,
            status: "Active"
        }
    ];
    var k = '<tbody>'
    for(i = 0;i < mainObj.length; i++){
        k+= '<tr>';
        k+= '<td>' + mainObj[i].name + '</td>';
        k+= '<td>' + mainObj[i].age + '</td>';
        k+= '<td>' + mainObj[i].status + '</td>';
        k+= '</tr>';
    }
    k+='</tbody>';
    document.getElementById('tableData').innerHTML = k;