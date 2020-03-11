<?php
require_once '../model/CorreoModel.php';

$contacto = $_POST["contacto"];
$mensaje = $_POST["mensaje"];
$tipo = $_POST["tipo"];
$remitente = "noreply@difusion.cl";

if($tipo == "correo"){
	$correo = new Email($remitente,$contacto,$mensaje);
	$correo->envio();
}	
?>