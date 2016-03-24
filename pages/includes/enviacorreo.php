<?php
	//Forma para el envio de correo al cliente
	$nombre = $_GET['txtNombre'];
	$ciudad = $_GET['txtCiudad'];
	$estado = $_GET['txtEstado'];
	$cp = $_GET['txtCP'];
	$pais = $_GET['txtPais'];
	$tel = $_GET['txtTel'];
	$email = $_GET['txtEmail'];
	$hotel = $_GET['txtHotel'];
	$numPersonas = $_GET['txtPersonas'];
	$fechaLlegada = $_GET['txtFechaLlegada'];
	$fechaSalida = $_GET['txtFechaSalida'];
	$tipoHabitacion1 = $_GET['txtTipoHabitacion1'];
	$numCuartos1 = $_GET['txtNumCuartos1'];
	$tipoHabitacion2 = $_GET['txtTipoHabitacion2'];
	$numCuartos2 = $_GET['txtNumCuartos2'];
	$tipoHabitacion3 = $_GET['txtTipoHabitacion3'];
	$numCuartos3 = $_GET['txtNumCuartos3'];
	$comentarios = $_GET['txtComentarios'];
	
	$mensaje = "Informacion de Reservacion de Hoteles Prado del Rio \r\n -------------------------------------------------------------- \r\n" .  " Nombre: " . $nombre . "\r\n" .
	" Ciudad: " . $ciudad . "\r\n" .
	" Estado: " . $estado . "\r\n" .
	" Codigo Postal: " . $cp . "\r\n" .
	" Pais: " . $pais . "\r\n" .
	" Telefono: " . $tel . "\r\n" .
	" Correo electronico: " .  $email . "\r\n" .
	"-------------------------------------------------------------- \r\n" .
	" Hotel: " . $hotel . "\r\n" .
	" Numero de personas: " . $numPersonas . "\r\n" .
	" Fecha de llegada: " . $fechaLlegada . "\r\n" .
	" Fecha de salida: " . $fechaSalida . "\r\n" .
	" Tipo de habitacion: " . $tipoHabitacion1 . "\r\n" .
	" Numero de habitaciones: " . $numCuartos1 . "\r\n" .
	"-------------------------------------------------------------- \r\n" .
	" Tipo de habitacion (Opcional): " . $tipoHabitacion2 . "\r\n" .
	" Numero de habitaciones (Opcional): " . $numCuartos2 . "\r\n" .
	" Tipo de habitacion (Opcional): " . $tipoHabitacion3 . "\r\n" .
	" Numero de habitaciones (Opcional): " . $numCuartos3 . "\r\n" .
	"-------------------------------------------------------------- \r\n" .
	" Comentarios: " . $comentarios . "\r\n-------------------------------------------------------------- \r\n" . "Enviado desde www.pradodelrio.com" ;
	
	if (mail("reservaciones@pradodelrio.com", "Informacion de Reservacion de Hoteles Prado del Rio", $mensaje)) {
		print "Tu correo de reservaci&oacute;n se ha enviado correctamente, gracias.";
	} else {
		print "Ha ocurrido un problema y no pudimos enviar el correo de reservaci&oacute;n, por favor, int&eacute;ntalo m&aacute;s tarde.";
	}
?>