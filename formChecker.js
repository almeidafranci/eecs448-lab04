function validate() {
	var re = /\S+@\S+\.\S+/;
	var username = document.getElementById('username').value;
	if (username == "") {
		alert("Please provide a username.");
		return false;
	}else if (!re.test(username)) {
		alert("Username must be in the form of name@domain.com.");
		return false;
	}
	return true;
}