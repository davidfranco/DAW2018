function sendContactMessage(){
	var name = $("#name_input").val();
	var email = $("#email_input").val();
	var subject = $("#subject_input").val();
	var message = $("#message_input").val();
	if(name == null || email == null || subject == null || message == null || name == '' || email == '' || subject == '' || message == ''){
		window.alert("Rellene todos los campos antes de continuar.");
		return;
	}
	if(!isEmailAddress(email)){
		window.alert("Introduce un email valido.");
		return;
	}
	window.location.search = jQuery.query.set("page", "contact_sent");
}
var pattern = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/; 
function isEmailAddress(str) {
    return str.match(pattern);    

}