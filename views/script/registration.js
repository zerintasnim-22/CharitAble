function validateForm(pForm) {

    let regerr1 = document.getElementById("regerr1");
	let regerr2 = document.getElementById("regerr2");
	let regerr3 = document.getElementById("regerr3");
	let regerr4 = document.getElementById("regerr4");
	let regerr5 = document.getElementById("regerr5");
	let regerr6 = document.getElementById("regerr6");
	let regerr7 = document.getElementById("regerr7");
	let regerr8 = document.getElementById("regerr8");
	let regerr9 = document.getElementById("regerr9");
	let regerr10 = document.getElementById("regerr10");
	

	const firstname = pForm.firstname.value;
	const lastname = pForm.lastname.value;
	const dob = pForm.dob.value;
	const present_address = pForm.present_address.value;
	const permanent_address = pForm.permanent_address.value;
	const tel = pForm.tel.value;
	const email = pForm.email.value;
	const username = pForm.username.value;
	const password = pForm.password.value;
	const confirmpassword = pForm.confirmpassword.value;
	const gender = pForm.gender.value;

	let flag = true;


	if (firstname === "") {
		regerr1.innerHTML = "Firstname cannot be empty";
		return false;
	}
	if (lastname === "") {
		regerr2.innerHTML = "Lastname cannot be empty";
		return false;
	}
	if (dob === "") {
		regerr3.innerHTML = "Please enter your date of birth";
		return false;
	}
	if (present_address === "") {
		regerr4.innerHTML = "Enter your Present Address";
		return false;
	}
	if (permanent_address === "") {
		regerr5.innerHTML = "Enter your Permanent Address";
		return false;
	}
	if (tel === "") {
		regerr6.innerHTML = "Phone number is required";
		return false;
	}
	if (email === "") {
		regerr7.innerHTML = "Valid Email address is required";
		return false;
	}
	if (username === "") {
		regerr8.innerHTML = "Username cannot be empty";
		return false;
	}
	if (password === "") {
		regerr9.innerHTML = "Password cannot be empty";
		return false;
	}
	if (confirmpassword === "") {
		regerr10.innerHTML = "Please reenter your Password";
		return false;
	}
	if (gender === "") {
		regerr11.innerHTML = "Please enter your Gender";
		return false;
	}
	
}