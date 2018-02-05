
function ins(val)
{
	document.getElementById('data').value+=val;
}
function clr(val)
{
	document.getElementById('data').value=val;
}
function ev(val)
{
	clr(eval(document.getElementById('data').value))
}