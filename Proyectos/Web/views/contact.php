<script type="text/javascript" src="js/contact.js"></script>
<link rel="stylesheet" href="css/contact.css">

<div class="page-container">
	<div id="currentPage"><h6><u><a href="?page=home">Inicio</a></u> > Contactar</h6></div>
	<div id="contact_form">
		<label for="name_input">Nombre</label>
		<input type="text" class="form-control" id="name_input">
		<label for="email_input">Email</label>
		<input type="email" class="form-control" id="email_input" placeholder="">
		<label for="subject_input">Asunto</label>
		<input type="text" class="form-control" id="subject_input">
		<label for="message_input" style="margin-top: 2em">Mensaje</label>
		<textarea class="form-control" rows="5" id="message_input"></textarea>
		<div id="contact_form_buttons" style="margin-top: 2em">
			<button type="button" class="btn btn-info" onclick="sendContactMessage()">Enviar mensaje</button>
			<a href="?page=home"><button type="button" class="btn btn-default" style="float: right;">Inicio</button></a>
		</div>
	</div>
</div>