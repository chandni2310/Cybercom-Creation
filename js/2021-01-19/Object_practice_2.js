//Add multiple objects in array and store it in local storage
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

var html = "<table border='1|1'>";
for (var i = 0; i < obj.length; i++) {
    html+="<tr>";
    html+="<td>"+obj[i].name+"</td>";
    html+="<td>"+obj[i].age+"</td>";
    html+="<td>"+obj[i].email+"</td>";
    
    html+="</tr>";

}
html+="</table>";
document.getElementById("b1").innerHTML = html;

var myObj=JSON.stringify(obj);
localStorage.setItem('user',myObj);
var x=console.log(JSON.parse(localStorage['user']));
