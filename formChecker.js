function validate() {
	var quantity1 = document.getElementById('product1').value;
	var quantity2 = document.getElementById('product2').value;
	var quantity3 = document.getElementById('product3').value;

	var re = /\S+@\S+\.\S+/;
	var username = document.getElementById('username').value;
	var password = document.getElementById('password').value;

	if (quantity1 == "" || quantity2 == "" || quantity3 == "") {
		alert("Please fill out all quantities.");
		return false;
	}

	if (username == "") {
		alert("Please provide a username.");
		return false;
	}else if (!re.test(username)) {
		alert("Username must be in the form of name@domain.com.");
		return false;
	}

	if (password == "") {
		alert("Please provide a password.");
		return false;
	}
	
	return true;
}