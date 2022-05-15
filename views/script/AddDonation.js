function validateForm(pForm) {

    let aderr1 = document.getElementById("aderr1");
	let aderr2 = document.getElementById("aderr2");
	let aderr3 = document.getElementById("aderr3");
	

	const donerName = pForm.donerName.value;
	const DonationDate = pForm.DonationDate.value;
	const DonationAmount = pForm.DonationAmount.value;

	let flag = true;


	if (donerName === "") {
		aderr1.innerHTML = "Doner Name cannot be empty";
		return false;
	}
	if (DonationDate === "") {
		aderr2.innerHTML = "Please choose an Doanation Date";
		return false;
	}
	if (DonationAmount === "") {
		aderr3.innerHTML = "Please enter Donated Amount";
		return false;
	}
	
    return true;    
	
}