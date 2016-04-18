// JavaScript Document
function submitdata() {
	var username  = document.getElementById("username").value;
        var email = document.getElementById("email").value;
	var password = document.getElementById("password").value;
        var password2 = document.getElementById("password2").value;
	// Returns successful data submission message when the entered information is stored in database.
	var dataString = 'username=' + username + '&email=' + email + '&password=' + password; + '&password2=' + password2;
		if (username == '' || email == '' || password == '' || password2 != password) {
		alert("Please Fill All Fields Correctly");
		} 
		else {
					// AJAX code to submit form.
					$.ajax({
					type: "POST",
					url: "submit.php",
					data: dataString,
					cache: false,
					success: function(html) {
					alert(html);
					}
					});
				}
		return false;
}
