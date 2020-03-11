<?php  
class Email{

	private $remitente;
	private $destinatario;
	private $asunto; 

	public function __construct($rem,$dest,$asu){
		$this->remitente = $rem;
		$this->destinatario = $dest;
		$this->asunto = $asu;
	}

	public function cuerpo_correo(){
		$cuerpo = '<html> 
					<head> 
					   <title>Prueba de correo</title> 
					</head> 
					<body> 
					<h1>Hola amigos!</h1> 
					<p> 
					<b>Bienvenidos a mi correo electrónico de prueba</b>. Estoy encantado de tener tantos lectores. Este cuerpo del mensaje es del artículo de envío de mails por PHP. Habría que cambiarlo para poner tu propio cuerpo. Por cierto, cambia también las cabeceras del mensaje. 
					</p> 
					</body> 
					</html>';
		return $cuerpo; 
	}

	public function envio(){		
		//dirección del remitente 
		$headers = "From: " . $this->remitente . "\r\n";
		//dirección de respuesta, si queremos que sea distinta que la del remitente 
		$headers .= "Reply-To: ". $this->remitente . "\r\n";
		//para el envío en formato HTML 
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		//ruta del mensaje desde origen a destino 
		#$headers .= "Return-path: noreply@gmail.com\r\n"; 
		//direcciones que recibián copia 
		#$headers .= "Cc: maria@desarrolloweb.com\r\n"; 
		//direcciones que recibirán copia oculta 
		#$headers .= "Bcc: pepe@pepe.com,juan@juan.com\r\n"; 
		mail($this->destinatario,$this->asunto,self::cuerpo_correo(),$headers); 
	}
}
?>