function ins(val)
{
	document.getElementById('data1').value+=val;
	
}
function ins(val)
{
	document.getElementById('data2').value+=val1;
	
}

function clr(val)
{
	document.getElementById('data1').value=val;
}
function op(val1)
{
	var a = parseInt(document.getElementById('data1').value);
	var b = parseInt(document.getElementById('data2').value);
	var c;
switch(val1)
{
	case '+': c=a+b;break;
	case '-': c=a-b;break;
	case '*': c=a*b;break;
	case '/': c=a/b;break;
}
document.getElementById('data1').value=c;

}