<html>
<head>
    <title>Send message</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>
<body>
<form id="form">
<p id="returnmessage"></p>
<label>Naslov:</label>
<input type='text' id="subject">
<label>Sporočilo:</label>
<textarea id="message" placeholder="Sporočilo......."></textarea>
<input type="button" id="submit" value="Pošlji sporočilo"/>
</form>
<script>
$(document).ready(function() {
$("#submit").click(function() {
var subject = $("#subject").val();
var message = $("#message").val();
$("#returnmessage").empty(); // To empty previous error/success message.
// Checking for blank fields.
if (message == '' || subject == '' ) {
alert("Prosim izpolnite vsa polja");
} else {
// Returns successful data submission message when the entered information is stored in database.
$.post("sender.php", {
subject1: subject,
message1: message,
}, function(data) {
$("#returnmessage").append(data); // Append returned message to message paragraph.
if (data == "Novice poslane") {
$("#form")[0].reset(); // To reset form fields on success.
}
});
}
});
});
</script>
</body>
</html>