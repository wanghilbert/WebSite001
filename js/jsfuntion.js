
function check_login_info_valid() {
	var thisform = document.getElementById("login-form");
	var thisname=thisform.username.value;
	var thispw=thisform.password.value;
	if(thisname==null||thisname=="")
	{
		alert("name is empty!");		
		return false
	}
	else if(thispw==null||thispw=="")
	{
		alert("password is empty!");
		return false;
	}
	else{
		alert("ok!");
		return true;		
	}
}
function check_register_info_valid() {
	var thisform = document.getElementById("register-form");
	var thisname=thisform.username.value;
	var thispw=thisform.password.value;
	var thispw2=thisform.Repassword.value;
	var thismail=thisform.email.value;
	var apos=thismail.indexOf("@");
	var dotpos=thismail.lastIndexOf(".");
	var thismobile=thisform.mobile.value;
	var mobilelength=thismobile.length;
	
	if(thisname==null||thisname=="")
	{
		alert("name is empty!");		
		return false
	}
	else if(thispw==null||thispw=="")
	{
		alert("password is empty!");
		return false;
	}
	else if(thispw2==null||thispw2=="")
	{
		alert("repeat password is empty!");
		return false;		
	}
	else if(thispw!=thispw2)
	{
		alert("passwords are not same!");
		return false;				
	}
	else if(apos<1||dotpos-apos<2)
	{
		alert("email address is invalid!");
		return false;
	}
	else if(mobilelength<11||"1"!=thismobile[0])
	{
		alert("mobile number is invalid!");
		return false;
		
	}
	else{
		alert("ok!");
		return true;		
	}
}

