function validupdate(pForm) {

    let uperr1 = document.getElementById("uperr1");
	let uperr2 = document.getElementById("uperr2");
	let uperr3 = document.getElementById("uperr3");
	let uperr4 = document.getElementById("uperr4");


	const ename = pForm.ename.value;
	const etype = pForm.etype.value;
	const doe = pForm.doe.value;
	const efee = pForm.efee.value;

	let flag = true;

	if (ename === "") {
		uperr1.innerHTML = "Event Name cannot be empty";
		return false;
	}
	if (etype === "Select") {
		uperr2.innerHTML = "Please choose an event type";
		return false;
	}
	if (doe === "") {
		uperr3.innerHTML = "Please enter date of event";
		return false;
	}
	if (efee === "") {
		uperr4.innerHTML = "Please enter the fee of the event";
		return false;
	}
	  
}


function validateEventSearch(pForm)
{
let errh = document.getElementById("errh");



const s = pForm.s.value;



if (s == "") {
errh.innerHTML = "Empty!";
return false;
}
const actionUrl = pForm.action;
const actionM = pForm.method;



let xhttp = new XMLHttpRequest();



xhttp.onload = function() {
document.getElementById("hint").innerHTML = this.responseText;
}
xhttp.open(actionM, actionUrl + "?q=" + s);
xhttp.send();
}