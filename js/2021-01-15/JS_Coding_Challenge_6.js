var num=prompt('Enter number for fibonacci');

var v1=0, v2=1;
document.write("fibonacci series  till given number: "+num+"<br>");
document.write("",v1," ");
document.write("",v2," ");
var i, sum;
for(i=2; i<num; i++)
{
sum=v1+v2;
document.write("",sum," ");
v1=v2;
v2=sum;
}