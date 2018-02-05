function validateform(){
	var name =document.getElementById('fname').value;
	var eid=document.getElementById('email').value;
	var pass=document.getElementById('pass').value;
	var repass=document.getElementById('rpass').value;
	var addr=document.getElementById('Address').value;
	if (name==""){
		alert("Fill Ur Name");
	}
	if (eid==""){
		alert("Fill ur EmailId");
	}
	if (pass==""){
		alert("Fill ur Password");
	}
	if (repass==""){
		alert("Fill Confirm password");
	}
	if (addr==""){
		alert("Fill ur Address");
	}
	if (pass != repass) {
        alert("Passwords do not match.");
        return false;
        }
    return true;
}