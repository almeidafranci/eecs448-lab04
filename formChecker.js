function validate() {
	var quantity1 = document.getElementById('product1').value;
	var quantity2 = document.getElementById('product2').value;
	var quantity3 = document.getElementById('product3').value;

	var shipping_free = document.getElementById('shipping-free').checked;
	var shipping_night = document.getElementById('shipping-night').checked;
	var shipping_three_day = document.getElementById('shipping-three-day').checked;

	var re = /\S+@\S+\.\S+/;
	var username = document.getElementById('username').value;
	var password = document.getElementById('password').value;

	if (quantity1 == "" || quantity2 == "" || quantity3 == "") {
		alert("Please fill out all quantities.");
		return false;
	}

	if (!shipping_free && !shipping_night && !shipping_three_day) {
		alert("Please choor a shipping method.");
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