function validateForm(pForm) {

    let err1 = document.getElementById("err1");
	let err2 = document.getElementById("err2");

	const username = pForm.username.value;
	const password = pForm.password.value;

	let flag = true;


	if (username === "") {
		err1.innerHTML = "Username cannot be empty";
		return false;
	}
	if (password === "") {
		err2.innerHTML = "Password cannot be empty";
		return false;
	}
	
}


/*function validation()
{

	let username = document.forms["login"]["username"].value;
	let password = document.forms["login"]["password"].value;
	if (username == "" ||  password == "")
	{
		alert("Fill up the box");
		return false;
	}
var attempt = 3
// Below function Executes on click of login button.
function validate(){
var username = document.getElementById("username").value;
var password = document.getElementById("password").value;
if ( username == "Formget" && password == "formget#123"){
alert ("Login successfully");
window.location = "success.html"; // Redirecting to other page.
return false;
}
else{
attempt --;// Decrementing by one.
alert("You have left "+attempt+" attempt;");
// Disabling fields after 3 attempts.
if( attempt == 0){
document.getElementById("username").disabled = true;
document.getElementById("password").disabled = true;
document.getElementById("submit").disabled = true;
return false;
}
}
}*/