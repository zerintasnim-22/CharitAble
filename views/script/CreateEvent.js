function validateForm(pForm) {

    let ceerr1 = document.getElementById("ceerr1");
	let ceerr2 = document.getElementById("ceerr2");
	let ceerr3 = document.getElementById("ceerr3");
	let ceerr4 = document.getElementById("ceerr4");

	

	const ename = pForm.ename.value;
	const etype = pForm.etype.value;
	const doe = pForm.doe.value;
	const efee = pForm.efee.value;

	let flag = true;


	if (ename === "") {
		ceerr1.innerHTML = "Event Name cannot be empty";
		return false;
	}
	if (etype === "") {
		ceerr2.innerHTML = "Please choose an event type";
		return false;
	}
	if (doe === "") {
		ceerr3.innerHTML = "Please enter date of the event";
		return false;
	}
	if (efee === "") {
		regerr4.innerHTML = "Please enter the fee of the event";
		return false;
	}  
	    
	
}