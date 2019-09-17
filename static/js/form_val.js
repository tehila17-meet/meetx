function sendData() {
	  var pwd = document.getElementById("myForm").elements[0].value;
	  if (pwd == "123") {
	  		location.reload();
	  		return true;
			  }
	  else{
		alert("Wrong PWD");
		location.reload();
		return false;
	  }
}