<?php
/* DATOS DE LAS 9-10*/
$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Futbol 5' AND hora = 'h9' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$h1h9 = $gb -> getNumRows();
$gb -> setClose();		
if ($h1h9<1) {$h1h9_btn_text = "Reservar"; $h1h9_btn_class = "info";}
if ($h1h9>0) {$h1h9_btn_text = "Ocupada"; $h1h9_btn_class = "danger"; $h1h9_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Futbol 5' AND hora = 'h95' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$h1h95 = $gb -> getNumRows();
$gb -> setClose();		
if ($h1h95<1) {$h1h95_btn_text = "Reservar"; $h1h95_btn_class = "info";}
if ($h1h95>0) {$h1h95_btn_text = "Ocupada"; $h1h95_btn_class = "danger"; $h1h95_estado='disabled="disabled"';}




/* DATOS DE LAS 10-11*/
$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Futbol 5' AND hora = 'h10' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$h1h10 = $gb -> getNumRows();
$gb -> setClose();		
if ($h1h10<1) {$h1h10_btn_text = "Reservar"; $h1h10_btn_class = "info";}
if ($h1h10>0) {$h1h10_btn_text = "Ocupada"; $h1h10_btn_class = "danger"; $h1h10_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Futbol 5' AND hora = 'h105' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$h1h105 = $gb -> getNumRows();
$gb -> setClose();		
if ($h1h105<1) {$h1h105_btn_text = "Reservar"; $h1h105_btn_class = "info";}
if ($h1h105>0) {$h1h105_btn_text = "Ocupada"; $h1h105_btn_class = "danger"; $h1h105_estado='disabled="disabled"';}




/* datos de las 11 a las 12*/
$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Futbol 5' AND hora = 'h11' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$h1h11 = $gb -> getNumRows();
$gb -> setClose();		
if ($h1h11<1) {$h1h11_btn_text = "Reservar"; $h1h11_btn_class = "info";}
if ($h1h11>0) {$h1h11_btn_text = "Ocupada"; $h1h11_btn_class = "danger"; $h1h11_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Futbol 5' AND hora = 'h115' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$h1h115 = $gb -> getNumRows();
$gb -> setClose();		
if ($h1h115<1) {$h1h115_btn_text = "Reservar"; $h1h115_btn_class = "info";}
if ($h1h115>0) {$h1h115_btn_text = "Ocupada"; $h1h115_btn_class = "danger"; $h1h115_estado='disabled="disabled"';}





/* DATOS DE LAS 12-13*/
$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Futbol 5' AND hora = 'h12' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$h1h12 = $gb -> getNumRows();
$gb -> setClose();		
if ($h1h12<1) {$h1h12_btn_text = "Reservar"; $h1h12_btn_class = "info";}
if ($h1h12>0) {$h1h12_btn_text = "Ocupada"; $h1h12_btn_class = "danger"; $h1h12_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Futbol 5' AND hora = 'h125' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$h1h125 = $gb -> getNumRows();
$gb -> setClose();		
if ($h1h125<1) {$h1h125_btn_text = "Reservar"; $h1h125_btn_class = "info";}
if ($h1h125>0) {$h1h125_btn_text = "Ocupada"; $h1h125_btn_class = "danger"; $h1h125_estado='disabled="disabled"';}



/* DATOS DE LAS 13-14*/
$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Futbol 5' AND hora = 'h13' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$h1h13 = $gb -> getNumRows();
$gb -> setClose();		
if ($h1h13<1) {$h1h13_btn_text = "Reservar"; $h1h13_btn_class = "info";}
if ($h1h13>0) {$h1h13_btn_text = "Ocupada"; $h1h13_btn_class = "danger"; $h1h13_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Futbol 5' AND hora = 'h135' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$h1h135 = $gb -> getNumRows();
$gb -> setClose();		
if ($h1h135<1) {$h1h135_btn_text = "Reservar"; $h1h135_btn_class = "info";}
if ($h1h135>0) {$h1h135_btn_text = "Ocupada"; $h1h135_btn_class = "danger"; $h1h135_estado='disabled="disabled"';}




/* DATOS DE LAS 13-14*/
$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Futbol 5' AND hora = 'h14' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$h1h14 = $gb -> getNumRows();
$gb -> setClose();		
if ($h1h14<1) {$h1h14_btn_text = "Reservar"; $h1h14_btn_class = "info";}
if ($h1h14>0) {$h1h14_btn_text = "Ocupada"; $h1h14_btn_class = "danger"; $h1h14_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Futbol 5' AND hora = 'h145' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$h1h14 = $gb -> getNumRows();
$gb -> setClose();		
if ($h1h145<1) {$h1h145_btn_text = "Reservar"; $h1h145_btn_class = "info";}
if ($h1h145>0) {$h1h145_btn_text = "Ocupada"; $h1h145_btn_class = "danger"; $h1h145_estado='disabled="disabled"';}




/* DATOS DE LAS 13-14*/
$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Futbol 5' AND hora = 'h15' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$h1h15 = $gb -> getNumRows();
$gb -> setClose();		
if ($h1h15<1) {$h1h15_btn_text = "Reservar"; $h1h15_btn_class = "info";}
if ($h1h15>0) {$h1h15_btn_text = "Ocupada"; $h1h15_btn_class = "danger"; $h1h15_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Futbol 5' AND hora = 'h155' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$h1h155 = $gb -> getNumRows();
$gb -> setClose();		
if ($h1h155<1) {$h1h155_btn_text = "Reservar"; $h1h155_btn_class = "info";}
if ($h1h155>0) {$h1h155_btn_text = "Ocupada"; $h1h155_btn_class = "danger"; $h1h155_estado='disabled="disabled"';}






/* DATOS DE LAS 13-14*/
$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Futbol 5' AND hora = 'h16' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$h1h16 = $gb -> getNumRows();
$gb -> setClose();		
if ($h1h16<1) {$h1h16_btn_text = "Reservar"; $h1h16_btn_class = "info";}
if ($h1h16>0) {$h1h16_btn_text = "Ocupada"; $h1h16_btn_class = "danger"; $h1h16_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Futbol 5' AND hora = 'h165' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$h1h165 = $gb -> getNumRows();
$gb -> setClose();		
if ($h1h165<1) {$h1h165_btn_text = "Reservar"; $h1h165_btn_class = "info";}
if ($h1h165>0) {$h1h165_btn_text = "Ocupada"; $h1h165_btn_class = "danger"; $h1h165_estado='disabled="disabled"';}







/* DATOS DE LAS 13-14*/
$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Futbol 5' AND hora = 'h17' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$h1h17 = $gb -> getNumRows();
$gb -> setClose();		
if ($h1h17<1) {$h1h17_btn_text = "Reservar"; $h1h17_btn_class = "info";}
if ($h1h17>0) {$h1h17_btn_text = "Ocupada"; $h1h17_btn_class = "danger"; $h1h17_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Futbol 5' AND hora = 'h175' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$h1h175 = $gb -> getNumRows();
$gb -> setClose();		
if ($h1h175<1) {$h1h175_btn_text = "Reservar"; $h1h175_btn_class = "info";}
if ($h1h175>0) {$h1h175_btn_text = "Ocupada"; $h1h175_btn_class = "danger"; $h1h175_estado='disabled="disabled"';}





/* DATOS DE LAS 13-14*/
$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Futbol 5' AND hora = 'h18' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$h1h18 = $gb -> getNumRows();
$gb -> setClose();		
if ($h1h18<1) {$h1h18_btn_text = "Reservar"; $h1h18_btn_class = "info";}
if ($h1h18>0) {$h1h18_btn_text = "Ocupada"; $h1h18_btn_class = "danger"; $h1h18_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Futbol 5' AND hora = 'h185' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$h1h185 = $gb -> getNumRows();
$gb -> setClose();		
if ($h1h185<1) {$h1h185_btn_text = "Reservar"; $h1h185_btn_class = "info";}
if ($h1h185>0) {$h1h185_btn_text = "Ocupada"; $h1h185_btn_class = "danger"; $h1h185_estado='disabled="disabled"';}






/* DATOS DE LAS 13-14*/
$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Futbol 5' AND hora = 'h19' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$h1h19 = $gb -> getNumRows();
$gb -> setClose();		
if ($h1h19<1) {$h1h19_btn_text = "Reservar"; $h1h19_btn_class = "info";}
if ($h1h19>0) {$h1h19_btn_text = "Ocupada"; $h1h19_btn_class = "danger"; $h1h19_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Futbol 5' AND hora = 'h195' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$h1h195 = $gb -> getNumRows();
$gb -> setClose();		
if ($h1h195<1) {$h1h195_btn_text = "Reservar"; $h1h195_btn_class = "info";}
if ($h1h195>0) {$h1h195_btn_text = "Ocupada"; $h1h195_btn_class = "danger"; $h1h195_estado='disabled="disabled"';}






/* DATOS DE LAS 13-14*/
$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Futbol 5' AND hora = 'h20' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$h1h20 = $gb -> getNumRows();
$gb -> setClose();		
if ($h1h20<1) {$h1h20_btn_text = "Reservar"; $h1h20_btn_class = "info";}
if ($h1h20>0) {$h1h20_btn_text = "Ocupada"; $h1h20_btn_class = "danger"; $h1h20_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Futbol 5' AND hora = 'h205' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$h1h205 = $gb -> getNumRows();
$gb -> setClose();		
if ($h1h205<1) {$h1h205_btn_text = "Reservar"; $h1h205_btn_class = "info";}
if ($h1h205>0) {$h1h205_btn_text = "Ocupada"; $h1h205_btn_class = "danger"; $h1h205_estado='disabled="disabled"';}






/* DATOS DE LAS 13-14*/
$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Futbol 5' AND hora = 'h21' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$h1h21 = $gb -> getNumRows();
$gb -> setClose();		
if ($h1h21<1) {$h1h21_btn_text = "Reservar"; $h1h21_btn_class = "info";}
if ($h1h21>0) {$h1h21_btn_text = "Ocupada"; $h1h21_btn_class = "danger"; $h1h21_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Futbol 5' AND hora = 'h215' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$h1h215 = $gb -> getNumRows();
$gb -> setClose();		
if ($h1h215<1) {$h1h215_btn_text = "Reservar"; $h1h215_btn_class = "info";}
if ($h1h215>0) {$h1h215_btn_text = "Ocupada"; $h1h215_btn_class = "danger"; $h1h215_estado='disabled="disabled"';}


$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Futbol 5' AND hora = 'h22' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$h1h21 = $gb -> getNumRows();
$gb -> setClose();		
if ($h1h22<1) {$h1h22_btn_text = "Reservar"; $h1h22_btn_class = "info";}
if ($h1h22>0) {$h1h22_btn_text = "Ocupada"; $h1h22_btn_class = "danger"; $h1h22_estado='disabled="disabled"';}


?>
