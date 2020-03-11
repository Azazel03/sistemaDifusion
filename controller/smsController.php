<?php
require_once '../model/SMSModel.php';

$contacto = $_POST["contacto"];
$mensaje = $_POST["mensaje"];
$tipo = $_POST["tipo"];
$remitente = "noreply@difusion.cl";

if($tipo == "sms"){
	$sms = new SMS($contacto,$mensaje);
	$sms->envio();
}
?>