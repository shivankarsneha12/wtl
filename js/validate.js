function checkRollNo(e){
	var element=e.target;
	if(/[^a-zA-Z0-9]/.test(element.value)){
		alert("Invalid RollNo. Only a-z, A-Z and 0-9 characters are allowed");
		element.value="";
		return false;
	}
	if(!/[a-zA-Z]/.test(element.value)){
		alert("Invalid RollNo. You must also use a-z or A-Z characters");
		element.value="";
		return false;
	}
	if(!/[0-9]/.test(element.value)){
		alert("Invalid RollNo. You must also use 0-9 characters");
		element.value="";
		return false;
	}
	if(element.value.length>8 || element.value.length<6){
		alert("Invalid RollNo.");
		element.value="";
		return false;
	}
		return true;
}



function checkEmail(e){
	var element=e.target;
	if(/[^a-zA-Z0-9@._]/.test(element.value)){
		alert("Invalid Email. Only a-z, A-Z, 0-9, @, . and _ characters are allowed");
		element.value="";
		return false;
	}
	if(!/[a-z0-9]/.test(element.value)){
		alert("Invalid Email. You must also use a-z or 0-9 characters");
		element.value="";
		return false;
	}
	if(!/[^ 'f_.]/.test(element.value)){
		alert("Invalid Email. Only _ and . characters are allowed");
		element.value="";
		return false;
	}
	if(!/[@]/.test(element.value)){
		alert("Invalid Email. You must also use @ characters");
		element.value="";
		return false;
	}
	if(!/[a-z]/.test(element.value)){
		alert("Invalid Email. You must also use a-z characters");
		element.value="";
		return false;
	}
		return true;
}




function checkName(e){
	var element=e.target;
	if(/[^a-zA-Z]/.test(element.value)){
		alert("Invalid Name. Only characters a-z, A-Z are allowed");
		element.value="";
		return false;
	}
	return true;
}


function checkAddress(e){
	var element=e.target;
	if(element.value.length<50){
		alert("Address is too short!");
		element.value="";
		return false;
	}
	return true;
}


var rollno=document.getElementById("rollno");
var sname=document.getElementById("sname");
var address=document.getElementById("address");

rollno.addEventListener('blur',checkRollNo,false);
sname.addEventListener('blur',checkName,false);
address.addEventListener('blur',checkAddress,false);