$(document).ready(function() {
$("#submit").click(function() {
var name = $("#name").val();
var email = $("#email").val();
var message = $("#message").val();
var Bug = $("#Bug").val();
var Page = $("#Page").val();
$("#returnmessage").empty(); // To empty previous error/success message.
// Checking for blank fields.
if (name == '' || email == '' || Bug == '' || Page == '' || message == '') {
alert("Merci de remplir tout les champs !");
} else {
// Returns successful data submission message when the entered information is stored in database.
$.post("../contact_form.php", {
name1: name,
email1: email,
message1: message,
Bug1: Bug,
Page1: Page	
}, function(data) {
$("#returnmessage").append(data); // Append returned message to message paragraph.
if (data == "Your Query has been received, We will contact you soon.") {
$("#form")[0].reset(); // To reset form fields on success.
}
});
}
});
});