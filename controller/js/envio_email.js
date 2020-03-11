$(document).ready(function() {
	$("#button_email").click(function(){
		var contacto = $("#email").val();
		var mensaje = $("#mensaje_email").val();
		var tipo = "correo";
		$.ajax({
			url: "../emailController.php",
		    type: "POST",
		    data: {contacto, mensaje, tipo},
		    success: function(datos)
		    {   
		    	console.log(datos);                 
		        alert('Email enviado');
		    }
		});	
	});
});