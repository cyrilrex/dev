function validateform(){
	var name =document.getElementById('fname').value;
	var lastname=document.getElementById('lname').value;
	var eid=document.getElementById('email').value;
	var select=document.getElementById('sel1').value;
	var mobile=document.getElementById('phno').value;
	var addr=document.getElementById('Address').value;
	if (name==""){
		alert("Fill Ur Name");
	}
	if (lastname==""){
		alert("Fill Ur Last Name");
	}
	if (eid==""){
		alert("Fill ur EmailId");
	}
	if (select==""){
		alert("Fill ur Gender");
	}
	if (mobile==""){
		alert("Fill ur Mobile Number");
	}
	if (addr==""){
		alert("Fill ur Address");
	}

}
