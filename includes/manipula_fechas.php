<?php
$cadena="$_POST[fecha]";
if ((!$_POST['fecha']) or ($_POST['fecha']=="")) {$cadena = $fecha;}

$maximo= strlen ($cadena);
$ide= "/";
$ide2= "/";
$total= stripos($cadena,$ide);
$total2= stripos($cadena,$ide2);
$total3= ($maximo-$total-$total2-1);
$final= substr ($cadena,$total,-$total3);
$new_fecha = str_replace("/","",$final);

$dia_actual = substr($cadena,0,2);
$year_actual = substr($cadena,-4); 


//test


if ($new_fecha == "01") {$month = "Jan";}
if ($new_fecha == "02") {$month = "Feb";}
if ($new_fecha == "03")	{$month = "Mar";}
if ($new_fecha == "04") {$month = "Apr";}
if ($new_fecha == "05") {$month = "May";}
if ($new_fecha == "06") {$month = "Jun";}
if ($new_fecha == "07") {$month = "Jul";}
if ($new_fecha == "08") {$month = "Aug";}
if ($new_fecha == "09") {$month = "Sep";}
if ($new_fecha == "10") {$month = "Oct";}
if ($new_fecha == "11") {$month = "Nov";}
if ($new_fecha == "12") {$month = "Dec";}

//calculo del dia anterior en funcion del calendario
$fechaComparacion = strtotime("$dia_actual $month $year_actual");
$calculo= strtotime("-1 days", $fechaComparacion); //Le restamos 1 dia
$fecha_dia_anterior = date("d/m/Y", $calculo);

$dia_ayer = $dia_actual - 1;

//obtengo el nombre del dia en funcion del calendario
$dias = array(Domingo,Lunes,Martes,Miercoles,Jueves,Viernes,Sabado,Domingo);
$dia_consultado = $dias[date(N, strtotime("$dia_actual $month $year_actual"))]; 
$dia_consultado_ayer = $dias[date(N, strtotime("$dia_ayer $month $year_actual"))];
?>