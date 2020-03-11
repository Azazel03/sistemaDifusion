$(document).ready(function() {
    $("#button_sms").click(function(){
		var contacto = $("#numero").val();
		var mensaje = $("#mensaje_sms").val();
		var tipo = "sms";
		$.ajax({
			url: "../smsController.php",
		    type: "POST",
		    data: {contacto, mensaje, tipo},
		    success: function(datos)
		    {   
		    	console.log(datos);                 
		        alert('SMS enviado');
		    }
		});	
	});	
});
