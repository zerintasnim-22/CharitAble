function validateForgotPassword(pForm) {

    let err1 = document.getElementById("err1");
	let err2 = document.getElementById("err2");
	let err3 = document.getElementById("err3");

	const user = pForm.username.value;
	const pass = pForm.npassword.value;
	const cpass = pForm.cpassword.value;

	
let flag = true;

	if (user === "") {
		err1.innerHTML = "Username cannot be empty";
		return false;
	}
	if (pass === "") {
		err2.innerHTML = "Password cannot be empty";
		return false;
	}
	if (cpass === "") {
		err3.innerHTML = "Confirm Password cannot be empty";
		return false;
	}
	
}
