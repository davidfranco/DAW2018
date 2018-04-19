var actionInCourse = false;
function sendContactMessage(){
	if(actionInCourse){
		return;
	}
	actionInCourse = true;
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
	var url = SERVER_URL + "/contact";
	var data = {
		"name": name,
		"email": email,
		"subject": subject,
		"message": message
	};
	$.ajax({
		url: url,
		method: "POST",
        data: JSON.stringify(data),
        dataType: 'json',
        contentType: "application/json",
		success: function(data){
			window.location.search = jQuery.query.set("page", "contact_sent");
        },
		 error: function(XMLHttpRequest, textStatus, errorThrown) {
			 actionInCourse = false;
			 alert("No se pudo  enviar el mensaje.");
		}
     });
}
var pattern = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/; 
function isEmailAddress(str) {
    return str.match(pattern);    

}