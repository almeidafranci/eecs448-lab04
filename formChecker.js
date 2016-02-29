function validate() {
	var username = document.getElementById('username').value;
	if (username == "") {
		alert("Please provide a username.");
		return false;
	}
	return true;
}