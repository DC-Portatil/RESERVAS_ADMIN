<?php 
$hashmail = $_COOKIE['ValidAdmin'];
$id_club = "29";

$query = "SELECT * FROM usuarios_admin WHERE hashmail = '$hashmail'";
$gt = new conexionBD();
$gt -> doQuery("$query");
	while ($gt -> setWhile()) {
		$id_usuario 		= $gt -> getDataSQL("id");
		$categoria			= $gt -> getDataSQL("categoria");
		$nombre 			= $gt -> getDataSQL("nombre");
		$apellido_p 		= $gt -> getDataSQL("apellido_p");
		$apellido_m 		= $gt -> getDataSQL("apellido_m");
		$email 				= $gt -> getDataSQL("email");
		$password   		= $gt -> getDataSQL("password");
		}

//control de reservas no competadas/pagadas por el usuario para proceder a su bloqueo

$year 			= date("Y");
$mes_hoy 		= date("n");
$dia_hoy 		= date("j");
$dia_hoy_l 		= date("l");

$hora_actual 	= date("Hi");
$hoy 			= date("d/m/Y");


if ($dia_hoy_l=="Monday") 		{$dia_hoy_l = "Lunes";}
if ($dia_hoy_l=="Tueday") 		{$dia_hoy_l = "Martes";}
if ($dia_hoy_l=="Thursday") 	{$dia_hoy_l = "Miercoles";}
if ($dia_hoy_l=="Wednesday") 	{$dia_hoy_l = "Jueves";}
if ($dia_hoy_l=="Friday") 		{$dia_hoy_l = "Viernes";}
if ($dia_hoy_l=="Saturday") 	{$dia_hoy_l = "Sabado";}
if ($dia_hoy_l=="Sunday") 		{$dia_hoy_l = "Domingo";}
?>