function check() {
	// body...
	if(typeof(Storage)!== undefined){
		localStorage.setItem("name","Chandni");
		document.getElementById('storage').innerHTML=localStorage.getItem("name");

	}

	else{
		document.getElementById('storage').innerHTML="Sorry your browser dosen't support local and session storage";
	}
}