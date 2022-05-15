function validChangePassword(pForm) {

    let err1 = document.getElementById("err1");
	let err2 = document.getElementById("err2");
	let err3 = document.getElementById("err3");
	

	const opass = pForm.opass.value;
	const pass = pForm.npassword.value;
	const cpass = pForm.cnpassword.value;
	

	if (opass == "") {
		err1.innerHTML = "Old password cannot be empty";
		return false;
	}
	if (pass == "") {
		err2.innerHTML = "Password cannot be empty";
		return false;
	}
	if (cpass == "") {
		err3.innerHTML = "Confirm password cannot be empty";
		return false;
	}
}
	  