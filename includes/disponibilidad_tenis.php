<?php
/* DATOS DE LAS 9-10*/
$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 1' AND hora = 'h9' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t1h9 = $gb -> getNumRows();
$gb -> setClose();		
if ($t1h9<1) {$t1h9_btn_text = "Reservar"; $t1h9_btn_class = "info";}
if ($t1h9>0) {$t1h9_btn_text = "Ocupada"; $t1h9_btn_class = "danger"; $t1h9_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 1' AND hora = 'h95' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t1h95 = $gb -> getNumRows();
$gb -> setClose();		
if ($t1h95<1) {$t1h95_btn_text = "Reservar"; $t1h95_btn_class = "info";}
if ($t1h95>0) {$t1h95_btn_text = "Ocupada"; $t1h95_btn_class = "danger"; $t1h95_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 2' AND hora = 'h9' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t2h9 = $gb -> getNumRows();
$gb -> setClose();		
if ($t2h9<1) {$t2h9_btn_text = "Reservar"; $t2h9_btn_class = "info";}
if ($t2h9>0) {$t2h9_btn_text = "Ocupada"; $t2h9_btn_class = "danger"; $t2h9_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 2' AND hora = 'h95' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t2h95 = $gb -> getNumRows();
$gb -> setClose();		
if ($t2h95<1) {$t2h95_btn_text = "Reservar"; $t2h95_btn_class = "info";}
if ($t2h95>0) {$t2h95_btn_text = "Ocupada"; $t2h95_btn_class = "danger"; $t2h95_estado='disabled="disabled"';}


$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 3' AND hora = 'h9' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t3h9 = $gb -> getNumRows();
$gb -> setClose();		
if ($t3h9<1) {$t3h9_btn_text = "Reservar"; $t3h9_btn_class = "info";}
if ($t3h9>0) {$t3h9_btn_text = "Ocupada"; $t3h9_btn_class = "danger"; $t3h9_estado='disabled="disabled"';}


$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 3' AND hora = 'h95' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t3h95 = $gb -> getNumRows();
$gb -> setClose();		
if ($t3h95<1) {$t3h95_btn_text = "Reservar"; $t3h95_btn_class = "info";}
if ($t3h95>0) {$t3h95_btn_text = "Ocupada"; $t3h95_btn_class = "danger"; $t3h95_estado='disabled="disabled"';}


$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 4' AND hora = 'h9' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t4h9 = $gb -> getNumRows();
$gb -> setClose();		
if ($t4h9<1) {$t4h9_btn_text = "Reservar"; $t4h9_btn_class = "success";}
if ($t4h9>0) {$t4h9_btn_text = "Ocupada"; $t4h9_btn_class = "danger"; $t4h9_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 4' AND hora = 'h95' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t4h95 = $gb -> getNumRows();
$gb -> setClose();		
if ($t4h95<1) {$t4h95_btn_text = "Reservar"; $t4h95_btn_class = "success";}
if ($t4h95>0) {$t4h95_btn_text = "Ocupada"; $t4h95_btn_class = "danger"; $t4h95_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 5' AND hora = 'h9' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t5h9 = $gb -> getNumRows();
$gb -> setClose();		
if ($t5h9<1) {$t5h9_btn_text = "Reservar"; $t5h9_btn_class = "success";}
if ($t5h9>0) {$t5h9_btn_text = "Ocupada"; $t5h9_btn_class = "danger"; $t5h9_estado='disabled="disabled"';}


$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 5' AND hora = 'h95' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t5h95 = $gb -> getNumRows();
$gb -> setClose();		
if ($t5h95<1) {$t5h95_btn_text = "Reservar"; $t5h95_btn_class = "success";}
if ($t5h95>0) {$t5h95_btn_text = "Ocupada"; $t5h95_btn_class = "danger"; $t5h95_estado='disabled="disabled"';}



$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 6' AND hora = 'h9' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t6h9 = $gb -> getNumRows();
$gb -> setClose();		
if ($t6h9<1) {$t6h9_btn_text = "Reservar"; $t6h9_btn_class = "success";}
if ($t6h9>0) {$t6h9_btn_text = "Ocupada"; $t6h9_btn_class = "danger"; $t6h9_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 6' AND hora = 'h95' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t6h95 = $gb -> getNumRows();
$gb -> setClose();		
if ($t6h95<1) {$t6h95_btn_text = "Reservar"; $t6h95_btn_class = "success";}
if ($t6h95>0) {$t6h95_btn_text = "Ocupada"; $t6h95_btn_class = "danger"; $t6h95_estado='disabled="disabled"';}





/* DATOS DE LAS 10-11*/
$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 1' AND hora = 'h10' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t1h10 = $gb -> getNumRows();
$gb -> setClose();		
if ($t1h10<1) {$t1h10_btn_text = "Reservar"; $t1h10_btn_class = "info";}
if ($t1h10>0) {$t1h10_btn_text = "Ocupada"; $t1h10_btn_class = "danger"; $t1h10_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 1' AND hora = 'h105' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t1h105 = $gb -> getNumRows();
$gb -> setClose();		
if ($t1h105<1) {$t1h105_btn_text = "Reservar"; $t1h105_btn_class = "info";}
if ($t1h105>0) {$t1h105_btn_text = "Ocupada"; $t1h105_btn_class = "danger"; $t1h105_estado='disabled="disabled"';}


$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 2' AND hora = 'h10' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t2h10 = $gb -> getNumRows();
$gb -> setClose();		
if ($t2h10<1) {$t2h10_btn_text = "Reservar"; $t2h10_btn_class = "info";}
if ($t2h10>0) {$t2h10_btn_text = "Ocupada"; $t2h10_btn_class = "danger"; $t2h10_estado='disabled="disabled"';}


$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 2' AND hora = 'h105' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t2h105 = $gb -> getNumRows();
$gb -> setClose();		
if ($t2h105<1) {$t2h105_btn_text = "Reservar"; $t2h105_btn_class = "info";}
if ($t2h105>0) {$t2h105_btn_text = "Ocupada"; $t2h105_btn_class = "danger"; $t2h105_estado='disabled="disabled"';}



$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 3' AND hora = 'h10' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t3h10 = $gb -> getNumRows();
$gb -> setClose();		
if ($t3h10<1) {$t3h10_btn_text = "Reservar"; $t3h10_btn_class = "info";}
if ($t3h10>0) {$t3h10_btn_text = "Ocupada"; $t3h10_btn_class = "danger"; $t3h10_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 3' AND hora = 'h105' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t3h105 = $gb -> getNumRows();
$gb -> setClose();		
if ($t3h105<1) {$t3h105_btn_text = "Reservar"; $t3h105_btn_class = "info";}
if ($t3h105>0) {$t3h105_btn_text = "Ocupada"; $t3h105_btn_class = "danger"; $t3h105_estado='disabled="disabled"';}



$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 4' AND hora = 'h10' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t4h10 = $gb -> getNumRows();
$gb -> setClose();		
if ($t4h10<1) {$t4h10_btn_text = "Reservar"; $t4h10_btn_class = "success";}
if ($t4h10>0) {$t4h10_btn_text = "Ocupada"; $t4h10_btn_class = "danger"; $t4h10_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 4' AND hora = 'h105' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t4h105 = $gb -> getNumRows();
$gb -> setClose();		
if ($t4h105<1) {$t4h105_btn_text = "Reservar"; $t4h105_btn_class = "success";}
if ($t4h105>0) {$t4h105_btn_text = "Ocupada"; $t4h105_btn_class = "danger"; $t4h105_estado='disabled="disabled"';}




$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 5' AND hora = 'h10' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t5h10 = $gb -> getNumRows();
$gb -> setClose();		
if ($t5h10<1) {$t5h10_btn_text = "Reservar"; $t5h10_btn_class = "success";}
if ($t5h10>0) {$t5h10_btn_text = "Ocupada"; $t5h10_btn_class = "danger"; $t5h10_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 5' AND hora = 'h105' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t5h105 = $gb -> getNumRows();
$gb -> setClose();		
if ($t5h105<1) {$t5h105_btn_text = "Reservar"; $t5h105_btn_class = "success";}
if ($t5h105>0) {$t5h105_btn_text = "Ocupada"; $t5h105_btn_class = "danger"; $t5h105_estado='disabled="disabled"';}



$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 6' AND hora = 'h10' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t6h10 = $gb -> getNumRows();
$gb -> setClose();		
if ($t6h10<1) {$t6h10_btn_text = "Reservar"; $t6h10_btn_class = "success";}
if ($t6h10>0) {$t6h10_btn_text = "Ocupada"; $t6h10_btn_class = "danger"; $t6h10_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 6' AND hora = 'h105' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t6h105 = $gb -> getNumRows();
$gb -> setClose();		
if ($t6h105<1) {$t6h105_btn_text = "Reservar"; $t6h105_btn_class = "success";}
if ($t6h105>0) {$t6h105_btn_text = "Ocupada"; $t6h105_btn_class = "danger"; $t6h105_estado='disabled="disabled"';}




/* datos de las 11 a las 12*/
$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 1' AND hora = 'h11' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t1h11 = $gb -> getNumRows();
$gb -> setClose();		
if ($t1h11<1) {$t1h11_btn_text = "Reservar"; $t1h11_btn_class = "info";}
if ($t1h11>0) {$t1h11_btn_text = "Ocupada"; $t1h11_btn_class = "danger"; $t1h11_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 1' AND hora = 'h115' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t1h115 = $gb -> getNumRows();
$gb -> setClose();		
if ($t1h115<1) {$t1h115_btn_text = "Reservar"; $t1h115_btn_class = "info";}
if ($t1h115>0) {$t1h115_btn_text = "Ocupada"; $t1h115_btn_class = "danger"; $t1h115_estado='disabled="disabled"';}


$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 2' AND hora = 'h11' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t2h11 = $gb -> getNumRows();
$gb -> setClose();		
if ($t2h11<1) {$t2h11_btn_text = "Reservar"; $t2h11_btn_class = "info";}
if ($t2h11>0) {$t2h11_btn_text = "Ocupada"; $t2h11_btn_class = "danger"; $t2h11_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 2' AND hora = 'h115' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t2h115 = $gb -> getNumRows();
$gb -> setClose();		
if ($t2h115<1) {$t2h115_btn_text = "Reservar"; $t2h115_btn_class = "info";}
if ($t2h115>0) {$t2h115_btn_text = "Ocupada"; $t2h115_btn_class = "danger"; $t2h115_estado='disabled="disabled"';}


$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 3' AND hora = 'h11' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t3h11 = $gb -> getNumRows();
$gb -> setClose();		
if ($t3h11<1) {$t3h11_btn_text = "Reservar"; $t3h11_btn_class = "info";}
if ($t3h11>0) {$t3h11_btn_text = "Ocupada"; $t3h11_btn_class = "danger"; $t3h11_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 3' AND hora = 'h115' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t3h115 = $gb -> getNumRows();
$gb -> setClose();		
if ($t3h115<1) {$t3h115_btn_text = "Reservar"; $t3h115_btn_class = "info";}
if ($t3h115>0) {$t3h115_btn_text = "Ocupada"; $t3h115_btn_class = "danger"; $t3h115_estado='disabled="disabled"';}


$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 4' AND hora = 'h11' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t4h11 = $gb -> getNumRows();
$gb -> setClose();		
if ($t4h11<1) {$t4h11_btn_text = "Reservar"; $t4h11_btn_class = "success";}
if ($t4h11>0) {$t4h11_btn_text = "Ocupada"; $t4h11_btn_class = "danger"; $t4h11_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 4' AND hora = 'h115' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t4h115 = $gb -> getNumRows();
$gb -> setClose();		
if ($t4h115<1) {$t4h115_btn_text = "Reservar"; $t4h115_btn_class = "success";}
if ($t4h115>0) {$t4h115_btn_text = "Ocupada"; $t4h115_btn_class = "danger"; $t4h115_estado='disabled="disabled"';}


$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 5' AND hora = 'h11' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t5h11 = $gb -> getNumRows();
$gb -> setClose();		
if ($t5h11<1) {$t5h11_btn_text = "Reservar"; $t5h11_btn_class = "success";}
if ($t5h11>0) {$t5h11_btn_text = "Ocupada"; $t5h11_btn_class = "danger"; $t5h11_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 5' AND hora = 'h115' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t5h115 = $gb -> getNumRows();
$gb -> setClose();		
if ($t5h115<1) {$t5h115_btn_text = "Reservar"; $t5h115_btn_class = "success";}
if ($t5h115>0) {$t5h115_btn_text = "Ocupada"; $t5h115_btn_class = "danger"; $t5h115_estado='disabled="disabled"';}


$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 6' AND hora = 'h11' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t6h11 = $gb -> getNumRows();
$gb -> setClose();		
if ($t6h11<1) {$t6h11_btn_text = "Reservar"; $t6h11_btn_class = "success";}
if ($t6h11>0) {$t6h11_btn_text = "Ocupada"; $t6h11_btn_class = "danger"; $t6h11_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 6' AND hora = 'h115' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t6h115 = $gb -> getNumRows();
$gb -> setClose();		
if ($t6h115<1) {$t6h115_btn_text = "Reservar"; $t6h115_btn_class = "success";}
if ($t6h115>0) {$t6h115_btn_text = "Ocupada"; $t6h115_btn_class = "danger"; $t6h115_estado='disabled="disabled"';}


/* DATOS DE LAS 12-13*/
$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 1' AND hora = 'h12' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t1h12 = $gb -> getNumRows();
$gb -> setClose();		
if ($t1h12<1) {$t1h12_btn_text = "Reservar"; $t1h12_btn_class = "info";}
if ($t1h12>0) {$t1h12_btn_text = "Ocupada"; $t1h12_btn_class = "danger"; $t1h12_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 1' AND hora = 'h125' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t1h125 = $gb -> getNumRows();
$gb -> setClose();		
if ($t1h125<1) {$t1h125_btn_text = "Reservar"; $t1h125_btn_class = "info";}
if ($t1h125>0) {$t1h125_btn_text = "Ocupada"; $t1h125_btn_class = "danger"; $t1h125_estado='disabled="disabled"';}



$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 2' AND hora = 'h12' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t2h12 = $gb -> getNumRows();
$gb -> setClose();		
if ($t2h12<1) {$t2h12_btn_text = "Reservar"; $t2h12_btn_class = "info";}
if ($t2h12>0) {$t2h12_btn_text = "Ocupada"; $t2h12_btn_class = "danger"; $t2h12_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 2' AND hora = 'h125' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t2h125 = $gb -> getNumRows();
$gb -> setClose();		
if ($t2h125<1) {$t2h125_btn_text = "Reservar"; $t2h125_btn_class = "info";}
if ($t2h125>0) {$t2h125_btn_text = "Ocupada"; $t2h125_btn_class = "danger"; $t2h125_estado='disabled="disabled"';}




$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 3' AND hora = 'h12' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t3h12 = $gb -> getNumRows();
$gb -> setClose();		
if ($t3h12<1) {$t3h12_btn_text = "Reservar"; $t3h12_btn_class = "info";}
if ($t3h12>0) {$t3h12_btn_text = "Ocupada"; $t3h12_btn_class = "danger"; $t3h12_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 3' AND hora = 'h125' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t3h125 = $gb -> getNumRows();
$gb -> setClose();		
if ($t3h125<1) {$t3h125_btn_text = "Reservar"; $t3h125_btn_class = "info";}
if ($t3h125>0) {$t3h125_btn_text = "Ocupada"; $t3h125_btn_class = "danger"; $t3h125_estado='disabled="disabled"';}



$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 4' AND hora = 'h12' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t4h12 = $gb -> getNumRows();
$gb -> setClose();		
if ($t4h12<1) {$t4h12_btn_text = "Reservar"; $t4h12_btn_class = "success";}
if ($t4h12>0) {$t4h12_btn_text = "Ocupada"; $t4h12_btn_class = "danger"; $t4h12_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 4' AND hora = 'h125' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t4h125 = $gb -> getNumRows();
$gb -> setClose();		
if ($t4h125<1) {$t4h125_btn_text = "Reservar"; $t4h125_btn_class = "success";}
if ($t4h125>0) {$t4h125_btn_text = "Ocupada"; $t4h125_btn_class = "danger"; $t4h125_estado='disabled="disabled"';}




$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 5' AND hora = 'h12' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t5h12 = $gb -> getNumRows();
$gb -> setClose();		
if ($t5h12<1) {$t5h12_btn_text = "Reservar"; $t5h12_btn_class = "success";}
if ($t5h12>0) {$t5h12_btn_text = "Ocupada"; $t5h12_btn_class = "danger"; $t5h12_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 5' AND hora = 'h125' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t5h125 = $gb -> getNumRows();
$gb -> setClose();		
if ($t5h125<1) {$t5h125_btn_text = "Reservar"; $t5h125_btn_class = "success";}
if ($t5h125>0) {$t5h125_btn_text = "Ocupada"; $t5h125_btn_class = "danger"; $t5h125_estado='disabled="disabled"';}




$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 6' AND hora = 'h12' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t6h12 = $gb -> getNumRows();
$gb -> setClose();		
if ($t6h12<1) {$t6h12_btn_text = "Reservar"; $t6h12_btn_class = "success";}
if ($t6h12>0) {$t6h12_btn_text = "Ocupada"; $t6h12_btn_class = "danger"; $t6h12_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 6' AND hora = 'h125' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t6h125 = $gb -> getNumRows();
$gb -> setClose();		
if ($t6h125<1) {$t6h125_btn_text = "Reservar"; $t6h125_btn_class = "success";}
if ($t6h125>0) {$t6h125_btn_text = "Ocupada"; $t6h125_btn_class = "danger"; $t6h125_estado='disabled="disabled"';}



/* DATOS DE LAS 13-14*/
$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 1' AND hora = 'h13' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t1h13 = $gb -> getNumRows();
$gb -> setClose();		
if ($t1h13<1) {$t1h13_btn_text = "Reservar"; $t1h13_btn_class = "info";}
if ($t1h13>0) {$t1h13_btn_text = "Ocupada"; $t1h13_btn_class = "danger"; $t1h13_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 1' AND hora = 'h135' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t1h135 = $gb -> getNumRows();
$gb -> setClose();		
if ($t1h135<1) {$t1h135_btn_text = "Reservar"; $t1h135_btn_class = "info";}
if ($t1h135>0) {$t1h135_btn_text = "Ocupada"; $t1h135_btn_class = "danger"; $t1h135_estado='disabled="disabled"';}





$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 2' AND hora = 'h13' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t2h13 = $gb -> getNumRows();
$gb -> setClose();		
if ($t2h13<1) {$t2h13_btn_text = "Reservar"; $t2h13_btn_class = "info";}
if ($t2h13>0) {$t2h13_btn_text = "Ocupada"; $t2h13_btn_class = "danger"; $t2h13_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 2' AND hora = 'h135' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t2h135 = $gb -> getNumRows();
$gb -> setClose();		
if ($t2h135<1) {$t2h135_btn_text = "Reservar"; $t2h135_btn_class = "info";}
if ($t2h135>0) {$t2h135_btn_text = "Ocupada"; $t2h135_btn_class = "danger"; $t2h135_estado='disabled="disabled"';}



$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 3' AND hora = 'h13' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t3h13 = $gb -> getNumRows();
$gb -> setClose();		
if ($t3h13<1) {$t3h13_btn_text = "Reservar"; $t3h13_btn_class = "info";}
if ($t3h13>0) {$t3h13_btn_text = "Ocupada"; $t3h13_btn_class = "danger"; $t3h13_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 3' AND hora = 'h135' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t3h135 = $gb -> getNumRows();
$gb -> setClose();		
if ($t3h135<1) {$t3h135_btn_text = "Reservar"; $t3h135_btn_class = "info";}
if ($t3h135>0) {$t3h135_btn_text = "Ocupada"; $t3h135_btn_class = "danger"; $t3h135_estado='disabled="disabled"';}





$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 4' AND hora = 'h13' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t4h13 = $gb -> getNumRows();
$gb -> setClose();		
if ($t4h13<1) {$t4h13_btn_text = "Reservar"; $t4h13_btn_class = "success";}
if ($t4h13>0) {$t4h13_btn_text = "Ocupada"; $t4h13_btn_class = "danger"; $t4h13_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 4' AND hora = 'h135' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t4h135 = $gb -> getNumRows();
$gb -> setClose();		
if ($t4h135<1) {$t4h135_btn_text = "Reservar"; $t4h135_btn_class = "success";}
if ($t4h135>0) {$t4h135_btn_text = "Ocupada"; $t4h135_btn_class = "danger"; $t4h135_estado='disabled="disabled"';}




$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 5' AND hora = 'h13' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t5h13 = $gb -> getNumRows();
$gb -> setClose();		
if ($t5h13<1) {$t5h13_btn_text = "Reservar"; $t5h13_btn_class = "success";}
if ($t5h13>0) {$t5h13_btn_text = "Ocupada"; $t5h13_btn_class = "danger"; $t5h13_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 5' AND hora = 'h135' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t5h135 = $gb -> getNumRows();
$gb -> setClose();		
if ($t5h135<1) {$t5h135_btn_text = "Reservar"; $t5h135_btn_class = "success";}
if ($t5h135>0) {$t5h135_btn_text = "Ocupada"; $t5h135_btn_class = "danger"; $t5h135_estado='disabled="disabled"';}




$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 6' AND hora = 'h13' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t6h13 = $gb -> getNumRows();
$gb -> setClose();		
if ($t6h13<1) {$t6h13_btn_text = "Reservar"; $t6h13_btn_class = "success";}
if ($t6h13>0) {$t6h13_btn_text = "Ocupada"; $t6h13_btn_class = "danger"; $t6h13_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 6' AND hora = 'h135' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t6h135 = $gb -> getNumRows();
$gb -> setClose();		
if ($t6h135<1) {$t6h135_btn_text = "Reservar"; $t6h135_btn_class = "success";}
if ($t6h135>0) {$t6h135_btn_text = "Ocupada"; $t6h135_btn_class = "danger"; $t6h135_estado='disabled="disabled"';}




/* DATOS DE LAS 14-15*/
$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 1' AND hora = 'h14' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t1h14 = $gb -> getNumRows();
$gb -> setClose();		
if ($t1h14<1) {$t1h14_btn_text = "Reservar"; $t1h14_btn_class = "info";}
if ($t1h14>0) {$t1h14_btn_text = "Ocupada"; $t1h14_btn_class = "danger"; $t1h14_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 1' AND hora = 'h145' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t1h145 = $gb -> getNumRows();
$gb -> setClose();		
if ($t1h145<1) {$t1h145_btn_text = "Reservar"; $t1h145_btn_class = "info";}
if ($t1h145>0) {$t1h145_btn_text = "Ocupada"; $t1h145_btn_class = "danger"; $t1h145_estado='disabled="disabled"';}



$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 2' AND hora = 'h14' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t2h14 = $gb -> getNumRows();
$gb -> setClose();		
if ($t2h14<1) {$t2h14_btn_text = "Reservar"; $t2h14_btn_class = "info";}
if ($t2h14>0) {$t2h14_btn_text = "Ocupada"; $t2h14_btn_class = "danger"; $t2h14_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 2' AND hora = 'h145' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t2h145 = $gb -> getNumRows();
$gb -> setClose();		
if ($t2h145<1) {$t2h145_btn_text = "Reservar"; $t2h145_btn_class = "info";}
if ($t2h145>0) {$t2h145_btn_text = "Ocupada"; $t2h145_btn_class = "danger"; $t2h145_estado='disabled="disabled"';}




$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 3' AND hora = 'h14' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t3h14 = $gb -> getNumRows();
$gb -> setClose();		
if ($t3h14<1) {$t3h14_btn_text = "Reservar"; $t3h14_btn_class = "info";}
if ($t3h14>0) {$t3h14_btn_text = "Ocupada"; $t3h14_btn_class = "danger"; $t3h14_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 3' AND hora = 'h145' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t3h145 = $gb -> getNumRows();
$gb -> setClose();		
if ($t3h145<1) {$t3h145_btn_text = "Reservar"; $t3h145_btn_class = "info";}
if ($t3h145>0) {$t3h145_btn_text = "Ocupada"; $t3h145_btn_class = "danger"; $t3h145_estado='disabled="disabled"';}



$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 4' AND hora = 'h14' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t4h14 = $gb -> getNumRows();
$gb -> setClose();		
if ($t4h14<1) {$t4h14_btn_text = "Reservar"; $t4h14_btn_class = "success";}
if ($t4h14>0) {$t4h14_btn_text = "Ocupada"; $t4h14_btn_class = "danger"; $t4h14_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 4' AND hora = 'h145' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t4h145 = $gb -> getNumRows();
$gb -> setClose();		
if ($t4h145<1) {$t4h145_btn_text = "Reservar"; $t4h145_btn_class = "success";}
if ($t4h145>0) {$t4h145_btn_text = "Ocupada"; $t4h145_btn_class = "danger"; $t4h145_estado='disabled="disabled"';}




$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 5' AND hora = 'h14' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t5h14 = $gb -> getNumRows();
$gb -> setClose();		
if ($t5h14<1) {$t5h14_btn_text = "Reservar"; $t5h14_btn_class = "success";}
if ($t5h14>0) {$t5h14_btn_text = "Ocupada"; $t5h14_btn_class = "danger"; $t5h14_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 5' AND hora = 'h145' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t5h145 = $gb -> getNumRows();
$gb -> setClose();		
if ($t5h145<1) {$t5h145_btn_text = "Reservar"; $t5h145_btn_class = "success";}
if ($t5h145>0) {$t5h145_btn_text = "Ocupada"; $t5h145_btn_class = "danger"; $t5h145_estado='disabled="disabled"';}




$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 6' AND hora = 'h14' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t6h14 = $gb -> getNumRows();
$gb -> setClose();		
if ($t6h14<1) {$t6h14_btn_text = "Reservar"; $t6h14_btn_class = "success";}
if ($t6h14>0) {$t6h14_btn_text = "Ocupada"; $t6h14_btn_class = "danger"; $t6h14_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 6' AND hora = 'h145' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t6h145 = $gb -> getNumRows();
$gb -> setClose();		
if ($t6h145<1) {$t6h145_btn_text = "Reservar"; $t6h145_btn_class = "success";}
if ($t6h145>0) {$t6h145_btn_text = "Ocupada"; $t6h145_btn_class = "danger"; $t6h145_estado='disabled="disabled"';}


/* DATOS DE LAS 15-16*/
$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 1' AND hora = 'h15' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t1h15 = $gb -> getNumRows();
$gb -> setClose();		
if ($t1h15<1) {$t1h15_btn_text = "Reservar"; $t1h15_btn_class = "info";}
if ($t1h15>0) {$t1h15_btn_text = "Ocupada"; $t1h15_btn_class = "danger"; $t1h15_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 1' AND hora = 'h155' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t1h155 = $gb -> getNumRows();
$gb -> setClose();		
if ($t1h155<1) {$t1h155_btn_text = "Reservar"; $t1h155_btn_class = "info";}
if ($t1h155>0) {$t1h155_btn_text = "Ocupada"; $t1h155_btn_class = "danger"; $t1h155_estado='disabled="disabled"';}



$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 2' AND hora = 'h15' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t2h15 = $gb -> getNumRows();
$gb -> setClose();		
if ($t2h15<1) {$t2h15_btn_text = "Reservar"; $t2h15_btn_class = "info";}
if ($t2h15>0) {$t2h15_btn_text = "Ocupada"; $t2h15_btn_class = "danger"; $t2h15_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 2' AND hora = 'h155' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t2h155 = $gb -> getNumRows();
$gb -> setClose();		
if ($t2h155<1) {$t2h155_btn_text = "Reservar"; $t2h155_btn_class = "info";}
if ($t2h155>0) {$t2h155_btn_text = "Ocupada"; $t2h155_btn_class = "danger"; $t2h155_estado='disabled="disabled"';}



$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 3' AND hora = 'h15' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t3h15 = $gb -> getNumRows();
$gb -> setClose();		
if ($t3h15<1) {$t3h15_btn_text = "Reservar"; $t3h15_btn_class = "info";}
if ($t3h15>0) {$t3h15_btn_text = "Ocupada"; $t3h15_btn_class = "danger"; $t3h15_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 3' AND hora = 'h155' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t3h155 = $gb -> getNumRows();
$gb -> setClose();		
if ($t3h155<1) {$t3h155_btn_text = "Reservar"; $t3h155_btn_class = "info";}
if ($t3h155>0) {$t3h155_btn_text = "Ocupada"; $t3h155_btn_class = "danger"; $t3h155_estado='disabled="disabled"';}



$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 4' AND hora = 'h15' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t4h15 = $gb -> getNumRows();
$gb -> setClose();		
if ($t4h15<1) {$t4h15_btn_text = "Reservar"; $t4h15_btn_class = "success";}
if ($t4h15>0) {$t4h15_btn_text = "Ocupada"; $t4h15_btn_class = "danger"; $t4h15_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 4' AND hora = 'h155' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t4h155 = $gb -> getNumRows();
$gb -> setClose();		
if ($t4h155<1) {$t4h155_btn_text = "Reservar"; $t4h155_btn_class = "success";}
if ($t4h155>0) {$t4h155_btn_text = "Ocupada"; $t4h155_btn_class = "danger"; $t4h155_estado='disabled="disabled"';}




$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 5' AND hora = 'h15' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t5h15 = $gb -> getNumRows();
$gb -> setClose();		
if ($t5h15<1) {$t5h15_btn_text = "Reservar"; $t5h15_btn_class = "success";}
if ($t5h15>0) {$t5h15_btn_text = "Ocupada"; $t5h15_btn_class = "danger"; $t5h15_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 5' AND hora = 'h155' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t5h155 = $gb -> getNumRows();
$gb -> setClose();		
if ($t5h155<1) {$t5h155_btn_text = "Reservar"; $t5h155_btn_class = "success";}
if ($t5h155>0) {$t5h155_btn_text = "Ocupada"; $t5h155_btn_class = "danger"; $t5h155_estado='disabled="disabled"';}



$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 6' AND hora = 'h15' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t6h15 = $gb -> getNumRows();
$gb -> setClose();		
if ($t6h15<1) {$t6h15_btn_text = "Reservar"; $t6h15_btn_class = "success";}
if ($t6h15>0) {$t6h15_btn_text = "Ocupada"; $t6h15_btn_class = "danger"; $t6h15_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 6' AND hora = 'h155' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t6h155 = $gb -> getNumRows();
$gb -> setClose();		
if ($t6h155<1) {$t6h155_btn_text = "Reservar"; $t6h155_btn_class = "success";}
if ($t6h155>0) {$t6h155_btn_text = "Ocupada"; $t6h155_btn_class = "danger"; $t6h155_estado='disabled="disabled"';}




/* DATOS DE LAS 16-17*/
$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 1' AND hora = 'h16' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t1h16 = $gb -> getNumRows();
$gb -> setClose();		
if ($t1h16<1) {$t1h16_btn_text = "Reservar"; $t1h16_btn_class = "info";}
if ($t1h16>0) {$t1h16_btn_text = "Ocupada"; $t1h16_btn_class = "danger"; $t1h16_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 1' AND hora = 'h165' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t1h165 = $gb -> getNumRows();
$gb -> setClose();		
if ($t1h165<1) {$t1h165_btn_text = "Reservar"; $t1h165_btn_class = "info";}
if ($t1h165>0) {$t1h165_btn_text = "Ocupada"; $t1h165_btn_class = "danger"; $t1h165_estado='disabled="disabled"';}



$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 2' AND hora = 'h16' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t2h16 = $gb -> getNumRows();
$gb -> setClose();		
if ($t2h16<1) {$t2h16_btn_text = "Reservar"; $t2h16_btn_class = "info";}
if ($t2h16>0) {$t2h16_btn_text = "Ocupada"; $t2h16_btn_class = "danger"; $t2h16_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 2' AND hora = 'h165' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t2h165 = $gb -> getNumRows();
$gb -> setClose();		
if ($t2h165<1) {$t2h165_btn_text = "Reservar"; $t2h165_btn_class = "info";}
if ($t2h165>0) {$t2h165_btn_text = "Ocupada"; $t2h165_btn_class = "danger"; $t2h165_estado='disabled="disabled"';}




$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 3' AND hora = 'h16' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t3h16 = $gb -> getNumRows();
$gb -> setClose();		
if ($t3h16<1) {$t3h16_btn_text = "Reservar"; $t3h16_btn_class = "info";}
if ($t3h16>0) {$t3h16_btn_text = "Ocupada"; $t3h16_btn_class = "danger"; $t3h16_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 3' AND hora = 'h165' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t3h165 = $gb -> getNumRows();
$gb -> setClose();		
if ($t3h165<1) {$t3h165_btn_text = "Reservar"; $t3h165_btn_class = "info";}
if ($t3h165>0) {$t3h165_btn_text = "Ocupada"; $t3h165_btn_class = "danger"; $t3h165_estado='disabled="disabled"';}



$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 4' AND hora = 'h16' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t4h16 = $gb -> getNumRows();
$gb -> setClose();		
if ($t4h16<1) {$t4h16_btn_text = "Reservar"; $t4h16_btn_class = "success";}
if ($t4h16>0) {$t4h16_btn_text = "Ocupada"; $t4h16_btn_class = "danger"; $t4h16_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 4' AND hora = 'h165' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t4h165 = $gb -> getNumRows();
$gb -> setClose();		
if ($t4h165<1) {$t4h165_btn_text = "Reservar"; $t4h165_btn_class = "success";}
if ($t4h165>0) {$t4h165_btn_text = "Ocupada"; $t4h165_btn_class = "danger"; $t4h165_estado='disabled="disabled"';}




$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 5' AND hora = 'h16' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t5h16 = $gb -> getNumRows();
$gb -> setClose();		
if ($t5h16<1) {$t5h16_btn_text = "Reservar"; $t5h16_btn_class = "success";}
if ($t5h16>0) {$t5h16_btn_text = "Ocupada"; $t5h16_btn_class = "danger"; $t5h16_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 5' AND hora = 'h165' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t5h165 = $gb -> getNumRows();
$gb -> setClose();		
if ($t5h165<1) {$t5h165_btn_text = "Reservar"; $t5h165_btn_class = "success";}
if ($t5h165>0) {$t5h165_btn_text = "Ocupada"; $t5h165_btn_class = "danger"; $t5h165_estado='disabled="disabled"';}



$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 6' AND hora = 'h16' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t6h16 = $gb -> getNumRows();
$gb -> setClose();		
if ($t6h16<1) {$t6h16_btn_text = "Reservar"; $t6h16_btn_class = "success";}
if ($t6h16>0) {$t6h16_btn_text = "Ocupada"; $t6h16_btn_class = "danger"; $t6h16_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 6' AND hora = 'h165' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t6h165 = $gb -> getNumRows();
$gb -> setClose();		
if ($t6h165<1) {$t6h165_btn_text = "Reservar"; $t6h165_btn_class = "success";}
if ($t6h165>0) {$t6h165_btn_text = "Ocupada"; $t6h165_btn_class = "danger"; $t6h165_estado='disabled="disabled"';}



/* DATOS DE LAS 17-18*/
$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 1' AND hora = 'h17' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t1h17 = $gb -> getNumRows();
$gb -> setClose();		
if ($t1h17<1) {$t1h17_btn_text = "Reservar"; $t1h17_btn_class = "info";}
if ($t1h17>0) {$t1h17_btn_text = "Ocupada"; $t1h17_btn_class = "danger"; $t1h17_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 1' AND hora = 'h175' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t1h175 = $gb -> getNumRows();
$gb -> setClose();		
if ($t1h175<1) {$t1h175_btn_text = "Reservar"; $t1h175_btn_class = "info";}
if ($t1h175>0) {$t1h175_btn_text = "Ocupada"; $t1h175_btn_class = "danger"; $t1h175_estado='disabled="disabled"';}




$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 2' AND hora = 'h17' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t2h17 = $gb -> getNumRows();
$gb -> setClose();		
if ($t2h17<1) {$t2h17_btn_text = "Reservar"; $t2h17_btn_class = "info";}
if ($t2h17>0) {$t2h17_btn_text = "Ocupada"; $t2h17_btn_class = "danger"; $t2h17_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 2' AND hora = 'h175' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t2h175 = $gb -> getNumRows();
$gb -> setClose();		
if ($t2h175<1) {$t2h175_btn_text = "Reservar"; $t2h175_btn_class = "info";}
if ($t2h175>0) {$t2h175_btn_text = "Ocupada"; $t2h175_btn_class = "danger"; $t2h175_estado='disabled="disabled"';}




$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 3' AND hora = 'h17' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t3h17 = $gb -> getNumRows();
$gb -> setClose();		
if ($t3h17<1) {$t3h17_btn_text = "Reservar"; $t3h17_btn_class = "info";}
if ($t3h17>0) {$t3h17_btn_text = "Ocupada"; $t3h17_btn_class = "danger"; $t3h17_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 3' AND hora = 'h175' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t3h175 = $gb -> getNumRows();
$gb -> setClose();		
if ($t3h175<1) {$t3h175_btn_text = "Reservar"; $t3h175_btn_class = "info";}
if ($t3h175>0) {$t3h175_btn_text = "Ocupada"; $t3h175_btn_class = "danger"; $t3h175_estado='disabled="disabled"';}




$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 4' AND hora = 'h17' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t4h17 = $gb -> getNumRows();
$gb -> setClose();		
if ($t4h17<1) {$t4h17_btn_text = "Reservar"; $t4h17_btn_class = "success";}
if ($t4h17>0) {$t4h17_btn_text = "Ocupada"; $t4h17_btn_class = "danger"; $t4h17_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 4' AND hora = 'h175' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t4h175 = $gb -> getNumRows();
$gb -> setClose();		
if ($t4h175<1) {$t4h175_btn_text = "Reservar"; $t4h175_btn_class = "success";}
if ($t4h175>0) {$t4h175_btn_text = "Ocupada"; $t4h175_btn_class = "danger"; $t4h175_estado='disabled="disabled"';}




$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 5' AND hora = 'h17' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t5h17 = $gb -> getNumRows();
$gb -> setClose();		
if ($t5h17<1) {$t5h17_btn_text = "Reservar"; $t5h17_btn_class = "success";}
if ($t5h17>0) {$t5h17_btn_text = "Ocupada"; $t5h17_btn_class = "danger"; $t5h17_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 5' AND hora = 'h175' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t5h175 = $gb -> getNumRows();
$gb -> setClose();		
if ($t5h175<1) {$t5h175_btn_text = "Reservar"; $t5h175_btn_class = "success";}
if ($t5h175>0) {$t5h175_btn_text = "Ocupada"; $t5h175_btn_class = "danger"; $t5h175_estado='disabled="disabled"';}




$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 6' AND hora = 'h17' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t6h17 = $gb -> getNumRows();
$gb -> setClose();		
if ($t6h17<1) {$t6h17_btn_text = "Reservar"; $t6h17_btn_class = "success";}
if ($t6h17>0) {$t6h17_btn_text = "Ocupada"; $t6h17_btn_class = "danger"; $t6h17_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 6' AND hora = 'h175' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t6h175 = $gb -> getNumRows();
$gb -> setClose();		
if ($t6h175<1) {$t6h175_btn_text = "Reservar"; $t6h175_btn_class = "success";}
if ($t6h175>0) {$t6h175_btn_text = "Ocupada"; $t6h175_btn_class = "danger"; $t6h175_estado='disabled="disabled"';}




/* DATOS DE LAS 18-19*/
$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 1' AND hora = 'h18' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t1h18 = $gb -> getNumRows();
$gb -> setClose();		
if ($t1h18<1) {$t1h18_btn_text = "Reservar"; $t1h18_btn_class = "info";}
if ($t1h18>0) {$t1h18_btn_text = "Ocupada"; $t1h18_btn_class = "danger"; $t1h18_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 1' AND hora = 'h185' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t1h185 = $gb -> getNumRows();
$gb -> setClose();		
if ($t1h185<1) {$t1h185_btn_text = "Reservar"; $t1h185_btn_class = "info";}
if ($t1h185>0) {$t1h185_btn_text = "Ocupada"; $t1h185_btn_class = "danger"; $t1h185_estado='disabled="disabled"';}




$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 2' AND hora = 'h18' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t2h18 = $gb -> getNumRows();
$gb -> setClose();		
if ($t2h18<1) {$t2h18_btn_text = "Reservar"; $t2h18_btn_class = "info";}
if ($t2h18>0) {$t2h18_btn_text = "Ocupada"; $t2h18_btn_class = "danger"; $t2h18_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 2' AND hora = 'h185' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t2h185 = $gb -> getNumRows();
$gb -> setClose();		
if ($t2h185<1) {$t2h185_btn_text = "Reservar"; $t2h185_btn_class = "info";}
if ($t2h185>0) {$t2h185_btn_text = "Ocupada"; $t2h185_btn_class = "danger"; $t2h185_estado='disabled="disabled"';}


$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 3' AND hora = 'h18' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t3h18 = $gb -> getNumRows();
$gb -> setClose();		
if ($t3h18<1) {$t3h18_btn_text = "Reservar"; $t3h18_btn_class = "info";}
if ($t3h18>0) {$t3h18_btn_text = "Ocupada"; $t3h18_btn_class = "danger"; $t3h18_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 3' AND hora = 'h185' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t3h185 = $gb -> getNumRows();
$gb -> setClose();		
if ($t3h185<1) {$t3h185_btn_text = "Reservar"; $t3h185_btn_class = "info";}
if ($t3h185>0) {$t3h185_btn_text = "Ocupada"; $t3h185_btn_class = "danger"; $t3h185_estado='disabled="disabled"';}




$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 4' AND hora = 'h18' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t4h18 = $gb -> getNumRows();
$gb -> setClose();		
if ($t4h18<1) {$t4h18_btn_text = "Reservar"; $t4h18_btn_class = "success";}
if ($t4h18>0) {$t4h18_btn_text = "Ocupada"; $t4h18_btn_class = "danger"; $t4h18_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 4' AND hora = 'h185' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t4h185 = $gb -> getNumRows();
$gb -> setClose();		
if ($t4h185<1) {$t4h185_btn_text = "Reservar"; $t4h185_btn_class = "success";}
if ($t4h185>0) {$t4h185_btn_text = "Ocupada"; $t4h185_btn_class = "danger"; $t4h185_estado='disabled="disabled"';}




$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 5' AND hora = 'h18' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t5h18 = $gb -> getNumRows();
$gb -> setClose();		
if ($t5h18<1) {$t5h18_btn_text = "Reservar"; $t5h18_btn_class = "success";}
if ($t5h18>0) {$t5h18_btn_text = "Ocupada"; $t5h18_btn_class = "danger"; $t5h18_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 5' AND hora = 'h185' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t5h185 = $gb -> getNumRows();
$gb -> setClose();		
if ($t5h185<1) {$t5h185_btn_text = "Reservar"; $t5h185_btn_class = "success";}
if ($t5h185>0) {$t5h185_btn_text = "Ocupada"; $t5h185_btn_class = "danger"; $t5h185_estado='disabled="disabled"';}




$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 6' AND hora = 'h18' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t6h18 = $gb -> getNumRows();
$gb -> setClose();		
if ($t6h18<1) {$t6h18_btn_text = "Reservar"; $t6h18_btn_class = "success";}
if ($t6h18>0) {$t6h18_btn_text = "Ocupada"; $t6h18_btn_class = "danger"; $t6h18_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 6' AND hora = 'h185' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t6h185 = $gb -> getNumRows();
$gb -> setClose();		
if ($t6h185<1) {$t6h185_btn_text = "Reservar"; $t6h185_btn_class = "success";}
if ($t6h185>0) {$t6h185_btn_text = "Ocupada"; $t6h185_btn_class = "danger"; $t6h185_estado='disabled="disabled"';}




/* DATOS DE LAS 19-20*/
$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 1' AND hora = 'h19' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t1h19 = $gb -> getNumRows();
$gb -> setClose();		
if ($t1h19<1) {$t1h19_btn_text = "Reservar"; $t1h19_btn_class = "info";}
if ($t1h19>0) {$t1h19_btn_text = "Ocupada"; $t1h19_btn_class = "danger"; $t1h19_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 1' AND hora = 'h195' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t1h195 = $gb -> getNumRows();
$gb -> setClose();		
if ($t1h195<1) {$t1h195_btn_text = "Reservar"; $t1h195_btn_class = "info";}
if ($t1h195>0) {$t1h195_btn_text = "Ocupada"; $t1h195_btn_class = "danger"; $t1h195_estado='disabled="disabled"';}




$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 2' AND hora = 'h19' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t2h19 = $gb -> getNumRows();
$gb -> setClose();		
if ($t2h19<1) {$t2h19_btn_text = "Reservar"; $t2h19_btn_class = "info";}
if ($t2h19>0) {$t2h19_btn_text = "Ocupada"; $t2h19_btn_class = "danger"; $t2h19_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 2' AND hora = 'h195' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t2h195 = $gb -> getNumRows();
$gb -> setClose();		
if ($t2h195<1) {$t2h195_btn_text = "Reservar"; $t2h195_btn_class = "info";}
if ($t2h195>0) {$t2h195_btn_text = "Ocupada"; $t2h195_btn_class = "danger"; $t2h195_estado='disabled="disabled"';}




$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 3' AND hora = 'h19' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t3h19 = $gb -> getNumRows();
$gb -> setClose();		
if ($t3h19<1) {$t3h19_btn_text = "Reservar"; $t3h19_btn_class = "info";}
if ($t3h19>0) {$t3h19_btn_text = "Ocupada"; $t3h19_btn_class = "danger"; $t3h19_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 3' AND hora = 'h195' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t3h195 = $gb -> getNumRows();
$gb -> setClose();		
if ($t3h195<1) {$t3h195_btn_text = "Reservar"; $t3h195_btn_class = "info";}
if ($t3h195>0) {$t3h195_btn_text = "Ocupada"; $t3h195_btn_class = "danger"; $t3h195_estado='disabled="disabled"';}




$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 4' AND hora = 'h19' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t4h19 = $gb -> getNumRows();
$gb -> setClose();		
if ($t4h19<1) {$t4h19_btn_text = "Reservar"; $t4h19_btn_class = "success";}
if ($t4h19>0) {$t4h19_btn_text = "Ocupada"; $t4h19_btn_class = "danger"; $t4h19_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 4' AND hora = 'h195' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t4h195 = $gb -> getNumRows();
$gb -> setClose();		
if ($t4h195<1) {$t4h195_btn_text = "Reservar"; $t4h195_btn_class = "success";}
if ($t4h195>0) {$t4h195_btn_text = "Ocupada"; $t4h195_btn_class = "danger"; $t4h195_estado='disabled="disabled"';}




$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 5' AND hora = 'h19' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t5h19 = $gb -> getNumRows();
$gb -> setClose();		
if ($t5h19<1) {$t5h19_btn_text = "Reservar"; $t5h19_btn_class = "success";}
if ($t5h19>0) {$t5h19_btn_text = "Ocupada"; $t5h19_btn_class = "danger"; $t5h19_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 5' AND hora = 'h195' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t5h195 = $gb -> getNumRows();
$gb -> setClose();		
if ($t5h195<1) {$t5h195_btn_text = "Reservar"; $t5h195_btn_class = "success";}
if ($t5h195>0) {$t5h195_btn_text = "Ocupada"; $t5h195_btn_class = "danger"; $t5h195_estado='disabled="disabled"';}




$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 6' AND hora = 'h19' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t6h19 = $gb -> getNumRows();
$gb -> setClose();		
if ($t6h19<1) {$t6h19_btn_text = "Reservar"; $t6h19_btn_class = "success";}
if ($t6h19>0) {$t6h19_btn_text = "Ocupada"; $t6h19_btn_class = "danger"; $t6h19_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 6' AND hora = 'h195' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t6h195 = $gb -> getNumRows();
$gb -> setClose();		
if ($t6h195<1) {$t6h195_btn_text = "Reservar"; $t6h195_btn_class = "success";}
if ($t6h195>0) {$t6h195_btn_text = "Ocupada"; $t6h195_btn_class = "danger"; $t6h195_estado='disabled="disabled"';}




/* DATOS DE LAS 20-21*/
$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 1' AND hora = 'h20' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t1h20 = $gb -> getNumRows();
$gb -> setClose();		
if ($t1h20<1) {$t1h20_btn_text = "Reservar"; $t1h20_btn_class = "info";}
if ($t1h20>0) {$t1h20_btn_text = "Ocupada"; $t1h20_btn_class = "danger"; $t1h20_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 1' AND hora = 'h205' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t1h205 = $gb -> getNumRows();
$gb -> setClose();		
if ($t1h205<1) {$t1h205_btn_text = "Reservar"; $t1h205_btn_class = "info";}
if ($t1h205>0) {$t1h205_btn_text = "Ocupada"; $t1h205_btn_class = "danger"; $t1h205_estado='disabled="disabled"';}




$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 2' AND hora = 'h20' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t2h20 = $gb -> getNumRows();
$gb -> setClose();		
if ($t2h20<1) {$t2h20_btn_text = "Reservar"; $t2h20_btn_class = "info";}
if ($t2h20>0) {$t2h20_btn_text = "Ocupada"; $t2h20_btn_class = "danger"; $t2h20_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 2' AND hora = 'h205' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t2h205 = $gb -> getNumRows();
$gb -> setClose();		
if ($t2h205<1) {$t2h205_btn_text = "Reservar"; $t2h205_btn_class = "info";}
if ($t2h205>0) {$t2h205_btn_text = "Ocupada"; $t2h205_btn_class = "danger"; $t2h205_estado='disabled="disabled"';}






$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 3' AND hora = 'h20' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t3h20 = $gb -> getNumRows();
$gb -> setClose();		
if ($t3h20<1) {$t3h20_btn_text = "Reservar"; $t3h20_btn_class = "info";}
if ($t3h20>0) {$t3h20_btn_text = "Ocupada"; $t3h20_btn_class = "danger"; $t3h20_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 3' AND hora = 'h205' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t3h205 = $gb -> getNumRows();
$gb -> setClose();		
if ($t3h205<1) {$t3h205_btn_text = "Reservar"; $t3h205_btn_class = "info";}
if ($t3h205>0) {$t3h205_btn_text = "Ocupada"; $t3h205_btn_class = "danger"; $t3h205_estado='disabled="disabled"';}




$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 4' AND hora = 'h20' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t4h20 = $gb -> getNumRows();
$gb -> setClose();		
if ($t4h20<1) {$t4h20_btn_text = "Reservar"; $t4h20_btn_class = "success";}
if ($t4h20>0) {$t4h20_btn_text = "Ocupada"; $t4h20_btn_class = "danger"; $t4h20_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 4' AND hora = 'h205' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t4h205 = $gb -> getNumRows();
$gb -> setClose();		
if ($t4h205<1) {$t4h205_btn_text = "Reservar"; $t4h205_btn_class = "success";}
if ($t4h205>0) {$t4h205_btn_text = "Ocupada"; $t4h205_btn_class = "danger"; $t4h205_estado='disabled="disabled"';}




$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 5' AND hora = 'h20' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t5h20 = $gb -> getNumRows();
$gb -> setClose();		
if ($t5h20<1) {$t5h20_btn_text = "Reservar"; $t5h20_btn_class = "success";}
if ($t5h20>0) {$t5h20_btn_text = "Ocupada"; $t5h20_btn_class = "danger"; $t5h20_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 5' AND hora = 'h205' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t5h205 = $gb -> getNumRows();
$gb -> setClose();		
if ($t5h205<1) {$t5h205_btn_text = "Reservar"; $t5h205_btn_class = "success";}
if ($t5h205>0) {$t5h205_btn_text = "Ocupada"; $t5h205_btn_class = "danger"; $t5h205_estado='disabled="disabled"';}






$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 6' AND hora = 'h20' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t6h20 = $gb -> getNumRows();
$gb -> setClose();		
if ($t6h20<1) {$t6h20_btn_text = "Reservar"; $t6h20_btn_class = "success";}
if ($t6h20>0) {$t6h20_btn_text = "Ocupada"; $t6h20_btn_class = "danger"; $t6h20_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 6' AND hora = 'h205' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t6h205 = $gb -> getNumRows();
$gb -> setClose();		
if ($t6h205<1) {$t6h205_btn_text = "Reservar"; $t6h205_btn_class = "success";}
if ($t6h205>0) {$t6h205_btn_text = "Ocupada"; $t6h205_btn_class = "danger"; $t6h205_estado='disabled="disabled"';}





/* DATOS DE LAS 21-22*/
$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 1' AND hora = 'h21' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t1h21 = $gb -> getNumRows();
$gb -> setClose();		
if ($t1h21<1) {$t1h21_btn_text = "Reservar"; $t1h21_btn_class = "info";}
if ($t1h21>0) {$t1h21_btn_text = "Ocupada"; $t1h21_btn_class = "danger"; $t1h21_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 1' AND hora = 'h215' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t1h215 = $gb -> getNumRows();
$gb -> setClose();		
if ($t1h215<1) {$t1h215_btn_text = "Reservar"; $t1h215_btn_class = "info";}
if ($t1h215>0) {$t1h215_btn_text = "Ocupada"; $t1h215_btn_class = "danger"; $t1h215_estado='disabled="disabled"';}





$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 2' AND hora = 'h21' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t2h21 = $gb -> getNumRows();
$gb -> setClose();		
if ($t2h21<1) {$t2h21_btn_text = "Reservar"; $t2h21_btn_class = "info";}
if ($t2h21>0) {$t2h21_btn_text = "Ocupada"; $t2h21_btn_class = "danger"; $t2h21_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 2' AND hora = 'h215' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t2h215 = $gb -> getNumRows();
$gb -> setClose();		
if ($t2h215<1) {$t2h215_btn_text = "Reservar"; $t2h215_btn_class = "info";}
if ($t2h215>0) {$t2h215_btn_text = "Ocupada"; $t2h215_btn_class = "danger"; $t2h215_estado='disabled="disabled"';}





$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 3' AND hora = 'h21' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t3h21 = $gb -> getNumRows();
$gb -> setClose();		
if ($t3h21<1) {$t3h21_btn_text = "Reservar"; $t3h21_btn_class = "info";}
if ($t3h21>0) {$t3h21_btn_text = "Ocupada"; $t3h21_btn_class = "danger"; $t3h21_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 3' AND hora = 'h215' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t3h215 = $gb -> getNumRows();
$gb -> setClose();		
if ($t3h215<1) {$t3h215_btn_text = "Reservar"; $t3h215_btn_class = "info";}
if ($t3h215>0) {$t3h215_btn_text = "Ocupada"; $t3h215_btn_class = "danger"; $t3h215_estado='disabled="disabled"';}





$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 4' AND hora = 'h21' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t4h21 = $gb -> getNumRows();
$gb -> setClose();		
if ($t4h21<1) {$t4h21_btn_text = "Reservar"; $t4h21_btn_class = "success";}
if ($t4h21>0) {$t4h21_btn_text = "Ocupada"; $t4h21_btn_class = "danger"; $t4h21_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 4' AND hora = 'h215' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t4h215 = $gb -> getNumRows();
$gb -> setClose();		
if ($t4h215<1) {$t4h215_btn_text = "Reservar"; $t4h215_btn_class = "success";}
if ($t4h215>0) {$t4h215_btn_text = "Ocupada"; $t4h215_btn_class = "danger"; $t4h215_estado='disabled="disabled"';}





$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 5' AND hora = 'h21' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t5h21 = $gb -> getNumRows();
$gb -> setClose();		
if ($t5h21<1) {$t5h21_btn_text = "Reservar"; $t5h21_btn_class = "success";}
if ($t5h21>0) {$t5h21_btn_text = "Ocupada"; $t5h21_btn_class = "danger"; $t5h21_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 5' AND hora = 'h215' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t5h215 = $gb -> getNumRows();
$gb -> setClose();		
if ($t5h215<1) {$t5h215_btn_text = "Reservar"; $t5h215_btn_class = "success";}
if ($t5h215>0) {$t5h215_btn_text = "Ocupada"; $t5h215_btn_class = "danger"; $t5h215_estado='disabled="disabled"';}





$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 6' AND hora = 'h21' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t6h21 = $gb -> getNumRows();
$gb -> setClose();		
if ($t6h21<1) {$t6h21_btn_text = "Reservar"; $t6h21_btn_class = "success";}
if ($t6h21>0) {$t6h21_btn_text = "Ocupada"; $t6h21_btn_class = "danger"; $t6h21_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 6' AND hora = 'h215' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t6h215 = $gb -> getNumRows();
$gb -> setClose();		
if ($t6h215<1) {$t6h215_btn_text = "Reservar"; $t6h215_btn_class = "success";}
if ($t6h215>0) {$t6h215_btn_text = "Ocupada"; $t6h215_btn_class = "danger"; $t6h215_estado='disabled="disabled"';}



$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 1' AND hora = 'h22' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t1h22 = $gb -> getNumRows();
$gb -> setClose();		
if ($t1h22<1) {$t1h22_btn_text = "Reservar"; $t1h22_btn_class = "info";}
if ($t1h22>0) {$t1h22_btn_text = "Ocupada"; $t1h22_btn_class = "danger"; $t1h22_estado='disabled="disabled"';}


$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 2' AND hora = 'h22' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t2h22 = $gb -> getNumRows();
$gb -> setClose();		
if ($t2h22<1) {$t2h22_btn_text = "Reservar"; $t2h22_btn_class = "info";}
if ($t2h22>0) {$t2h22_btn_text = "Ocupada"; $t2h22_btn_class = "danger"; $t2h22_estado='disabled="disabled"';}


$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 3' AND hora = 'h22' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t3h22 = $gb -> getNumRows();
$gb -> setClose();		
if ($t3h22<1) {$t3h22_btn_text = "Reservar"; $t3h22_btn_class = "info";}
if ($t3h22>0) {$t3h22_btn_text = "Ocupada"; $t3h22_btn_class = "danger"; $t3h22_estado='disabled="disabled"';}


$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 4' AND hora = 'h22' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t4h22 = $gb -> getNumRows();
$gb -> setClose();		
if ($t4h22<1) {$t4h22_btn_text = "Reservar"; $t4h22_btn_class = "success";}
if ($t4h22>0) {$t4h22_btn_text = "Ocupada"; $t4h22_btn_class = "danger"; $t4h22_estado='disabled="disabled"';}


$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 5' AND hora = 'h22' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t5h22 = $gb -> getNumRows();
$gb -> setClose();		
if ($t5h22<1) {$t5h22_btn_text = "Reservar"; $t5h22_btn_class = "success";}
if ($t5h22>0) {$t5h22_btn_text = "Ocupada"; $t5h22_btn_class = "danger"; $t5h22_estado='disabled="disabled"';}


$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Tenis 6' AND hora = 'h22' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$t6h22 = $gb -> getNumRows();
$gb -> setClose();		
if ($t6h22<1) {$t6h22_btn_text = "Reservar"; $t6h22_btn_class = "success";}
if ($t6h22>0) {$t6h22_btn_text = "Ocupada"; $t6h22_btn_class = "danger"; $t6h22_estado='disabled="disabled"';}
?>
