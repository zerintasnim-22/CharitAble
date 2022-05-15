function validDeleteForm(pForm) {

    let del = document.getElementById("del");
	

	const ename = pForm.ename.value;
	
    if (ename === "") {
		del.innerHTML = "Event Name cannot be empty";
		return false;
	}
}