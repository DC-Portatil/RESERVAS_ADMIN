<?php 

$id_club = "29";
$query = "SELECT * FROM club_precios WHERE id_club = '$id_club' AND pista = 'Tenis 1' ";
$hy = new conexionBD();
$hy -> doQuery("$query");
	while ( $hy -> setWhile()) {
		$tqslemp = $hy -> getDataSQL("res_sl");
		$tqclemp = $hy -> getDataSQL("res_cl");
		$tqslnoe = $hy -> getDataSQL("nres_sl");
		$tqclnoe = $hy -> getDataSQL("nres_cl");
	}
$hy -> setClose();	

$query = "SELECT * FROM club_precios WHERE id_club = '$id_club' AND pista = 'Tenis 4' ";
$hy = new conexionBD();
$hy -> doQuery("$query");
	while ( $hy -> setWhile()) {
		$tcslemp = $hy -> getDataSQL("res_sl");
		$tcclemp = $hy -> getDataSQL("res_cl");
		$tcslnoe = $hy -> getDataSQL("nres_sl");
		$tcclnoe = $hy -> getDataSQL("nres_cl");
	}
$hy -> setClose();	

$query = "SELECT * FROM club_precios WHERE id_club = '$id_club' AND pista = 'Fronton 1' ";
$hy = new conexionBD();
$hy -> doQuery("$query");
	while ( $hy -> setWhile()) {
		$fgslemp = $hy -> getDataSQL("res_sl");
		$fgclemp = $hy -> getDataSQL("res_cl");
		$fgslnoe = $hy -> getDataSQL("nres_sl");
		$fgclnoe = $hy -> getDataSQL("nres_cl");
	}
$hy -> setClose();	

$query = "SELECT * FROM club_precios WHERE id_club = '$id_club' AND pista = 'Fronton 3' ";
$hy = new conexionBD();
$hy -> doQuery("$query");
	while ( $hy -> setWhile()) {
		$fpslemp = $hy -> getDataSQL("res_sl");
		$fpclemp = $hy -> getDataSQL("res_cl");
		$fpslnoe = $hy -> getDataSQL("nres_sl");
		$fpclnoe = $hy -> getDataSQL("nres_cl");
	}
$hy -> setClose();	

$query = "SELECT * FROM club_precios WHERE id_club = '$id_club' AND pista = 'Futbol 5' ";
$hy = new conexionBD();
$hy -> doQuery("$query");
	while ( $hy -> setWhile()) {
		$fuslemp = $hy -> getDataSQL("res_sl");
		$fuclemp = $hy -> getDataSQL("res_cl");
		$fuslnoe = $hy -> getDataSQL("nres_sl");
		$fuclnoe = $hy -> getDataSQL("nres_cl");
	}
$hy -> setClose();	

?>