<?php
/* DATOS DE LAS 9-10*/
$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 1' AND hora = 'h9' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f1h9 = $gb -> getNumRows();
$gb -> setClose();		
if ($f1h9<1) {$f1h9_btn_text = "Reservar"; $f1h9_btn_class = "info";}
if ($f1h9>0) {$f1h9_btn_text = "Ocupada"; $f1h9_btn_class = "danger"; $f1h9_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 1' AND hora = 'h95' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f1h95 = $gb -> getNumRows();
$gb -> setClose();		
if ($f1h95<1) {$f1h95_btn_text = "Reservar"; $f1h95_btn_class = "info";}
if ($f1h95>0) {$f1h95_btn_text = "Ocupada"; $f1h95_btn_class = "danger"; $f1h95_estado='disabled="disabled"';}




$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 2' AND hora = 'h9' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f2h9 = $gb -> getNumRows();
$gb -> setClose();		
if ($f2h9<1) {$f2h9_btn_text = "Reservar"; $f2h9_btn_class = "info";}
if ($f2h9>0) {$f2h9_btn_text = "Ocupada"; $f2h9_btn_class = "danger"; $f2h9_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 2' AND hora = 'h95' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f2h95 = $gb -> getNumRows();
$gb -> setClose();		
if ($f2h95<1) {$f2h95_btn_text = "Reservar"; $f2h95_btn_class = "info";}
if ($f2h95>0) {$f2h95_btn_text = "Ocupada"; $f2h95_btn_class = "danger"; $f2h95_estado='disabled="disabled"';}



$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 3' AND hora = 'h9' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f3h9 = $gb -> getNumRows();
$gb -> setClose();		
if ($f3h9<1) {$f3h9_btn_text = "Reservar"; $f3h9_btn_class = "info";}
if ($f3h9>0) {$f3h9_btn_text = "Ocupada"; $f3h9_btn_class = "danger"; $f3h9_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 3' AND hora = 'h95' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f3h95 = $gb -> getNumRows();
$gb -> setClose();		
if ($f3h95<1) {$f3h95_btn_text = "Reservar"; $f3h95_btn_class = "info";}
if ($f3h95>0) {$f3h95_btn_text = "Ocupada"; $f3h95_btn_class = "danger"; $f3h95_estado='disabled="disabled"';}





/* DATOS DE LAS 10-11*/
$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 1' AND hora = 'h10' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f1h10 = $gb -> getNumRows();
$gb -> setClose();		
if ($f1h10<1) {$f1h10_btn_text = "Reservar"; $f1h10_btn_class = "info";}
if ($f1h10>0) {$f1h10_btn_text = "Ocupada"; $f1h10_btn_class = "danger"; $f1h10_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 1' AND hora = 'h105' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f1h105 = $gb -> getNumRows();
$gb -> setClose();		
if ($f1h105<1) {$f1h105_btn_text = "Reservar"; $f1h105_btn_class = "info";}
if ($f1h105>0) {$f1h105_btn_text = "Ocupada"; $f1h105_btn_class = "danger"; $f1h105_estado='disabled="disabled"';}




$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 2' AND hora = 'h10' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f2h10 = $gb -> getNumRows();
$gb -> setClose();		
if ($f2h10<1) {$f2h10_btn_text = "Reservar"; $f2h10_btn_class = "info";}
if ($f2h10>0) {$f2h10_btn_text = "Ocupada"; $f2h10_btn_class = "danger"; $f2h10_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 2' AND hora = 'h105' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f2h105 = $gb -> getNumRows();
$gb -> setClose();		
if ($f2h105<1) {$f2h105_btn_text = "Reservar"; $f2h105_btn_class = "info";}
if ($f2h105>0) {$f2h105_btn_text = "Ocupada"; $f2h105_btn_class = "danger"; $f2h105_estado='disabled="disabled"';}




$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 3' AND hora = 'h10' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f3h10 = $gb -> getNumRows();
$gb -> setClose();		
if ($f3h10<1) {$f3h10_btn_text = "Reservar"; $f3h10_btn_class = "info";}
if ($f3h10>0) {$f3h10_btn_text = "Ocupada"; $f3h10_btn_class = "danger"; $f3h10_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 3' AND hora = 'h105' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f3h105 = $gb -> getNumRows();
$gb -> setClose();		
if ($f3h105<1) {$f3h105_btn_text = "Reservar"; $f3h105_btn_class = "info";}
if ($f3h105>0) {$f3h105_btn_text = "Ocupada"; $f3h105_btn_class = "danger"; $f3h105_estado='disabled="disabled"';}








/* datos de las 11 a las 12*/
$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 1' AND hora = 'h11' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f1h11 = $gb -> getNumRows();
$gb -> setClose();		
if ($f1h11<1) {$f1h11_btn_text = "Reservar"; $f1h11_btn_class = "info";}
if ($f1h11>0) {$f1h11_btn_text = "Ocupada"; $f1h11_btn_class = "danger"; $f1h11_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 1' AND hora = 'h115' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f1h115 = $gb -> getNumRows();
$gb -> setClose();		
if ($f1h115<1) {$f1h115_btn_text = "Reservar"; $f1h115_btn_class = "info";}
if ($f1h115>0) {$f1h115_btn_text = "Ocupada"; $f1h115_btn_class = "danger"; $f1h115_estado='disabled="disabled"';}




$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 2' AND hora = 'h11' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f2h11 = $gb -> getNumRows();
$gb -> setClose();		
if ($f2h11<1) {$f2h11_btn_text = "Reservar"; $f2h11_btn_class = "info";}
if ($f2h11>0) {$f2h11_btn_text = "Ocupada"; $f2h11_btn_class = "danger"; $f2h11_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 2' AND hora = 'h115' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f2h115 = $gb -> getNumRows();
$gb -> setClose();		
if ($f2h115<1) {$f2h115_btn_text = "Reservar"; $f2h115_btn_class = "info";}
if ($f2h115>0) {$f2h115_btn_text = "Ocupada"; $f2h115_btn_class = "danger"; $f2h115_estado='disabled="disabled"';}




$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 3' AND hora = 'h11' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f3h11 = $gb -> getNumRows();
$gb -> setClose();		
if ($f3h11<1) {$f3h11_btn_text = "Reservar"; $f3h11_btn_class = "info";}
if ($f3h11>0) {$f3h11_btn_text = "Ocupada"; $f3h11_btn_class = "danger"; $f3h11_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 3' AND hora = 'h115' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f3h115 = $gb -> getNumRows();
$gb -> setClose();		
if ($f3h115<1) {$f3h115_btn_text = "Reservar"; $f3h115_btn_class = "info";}
if ($f3h115>0) {$f3h115_btn_text = "Ocupada"; $f3h115_btn_class = "danger"; $f3h115_estado='disabled="disabled"';}




/* DATOS DE LAS 12-13*/
$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 1' AND hora = 'h12' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f1h12 = $gb -> getNumRows();
$gb -> setClose();		
if ($f1h12<1) {$f1h12_btn_text = "Reservar"; $f1h12_btn_class = "info";}
if ($f1h12>0) {$f1h12_btn_text = "Ocupada"; $f1h12_btn_class = "danger"; $f1h12_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 1' AND hora = 'h125' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f1h125 = $gb -> getNumRows();
$gb -> setClose();		
if ($f1h125<1) {$f1h125_btn_text = "Reservar"; $f1h125_btn_class = "info";}
if ($f1h125>0) {$f1h125_btn_text = "Ocupada"; $f1h125_btn_class = "danger"; $f1h125_estado='disabled="disabled"';}




$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 2' AND hora = 'h12' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f2h12 = $gb -> getNumRows();
$gb -> setClose();		
if ($f2h12<1) {$f2h12_btn_text = "Reservar"; $f2h12_btn_class = "info";}
if ($f2h12>0) {$f2h12_btn_text = "Ocupada"; $f2h12_btn_class = "danger"; $f2h12_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 2' AND hora = 'h125' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f2h12 = $gb -> getNumRows();
$gb -> setClose();		
if ($f2h125<1) {$f2h125_btn_text = "Reservar"; $f2h125_btn_class = "info";}
if ($f2h125>0) {$f2h125_btn_text = "Ocupada"; $f2h125_btn_class = "danger"; $f2h125_estado='disabled="disabled"';}





$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 3' AND hora = 'h12' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f3h12 = $gb -> getNumRows();
$gb -> setClose();		
if ($f3h12<1) {$f3h12_btn_text = "Reservar"; $f3h12_btn_class = "info";}
if ($f3h12>0) {$f3h12_btn_text = "Ocupada"; $f3h12_btn_class = "danger"; $f3h12_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 3' AND hora = 'h125' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f3h125 = $gb -> getNumRows();
$gb -> setClose();		
if ($f3h125<1) {$f3h125_btn_text = "Reservar"; $f3h125_btn_class = "info";}
if ($f3h125>0) {$f3h125_btn_text = "Ocupada"; $f3h125_btn_class = "danger"; $f3h125_estado='disabled="disabled"';}




/* DATOS DE LAS 13-14*/
$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 1' AND hora = 'h13' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f1h13 = $gb -> getNumRows();
$gb -> setClose();		
if ($f1h13<1) {$f1h13_btn_text = "Reservar"; $f1h13_btn_class = "info";}
if ($f1h13>0) {$f1h13_btn_text = "Ocupada"; $f1h13_btn_class = "danger"; $f1h13_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 1' AND hora = 'h135' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f1h135 = $gb -> getNumRows();
$gb -> setClose();		
if ($f1h13<1) {$f1h135_btn_text = "Reservar"; $f1h135_btn_class = "info";}
if ($f1h13>0) {$f1h135_btn_text = "Ocupada"; $f1h135_btn_class = "danger"; $f1h135_estado='disabled="disabled"';}




$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 2' AND hora = 'h13' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f2h13 = $gb -> getNumRows();
$gb -> setClose();		
if ($f2h13<1) {$f2h13_btn_text = "Reservar"; $f2h13_btn_class = "info";}
if ($f2h13>0) {$f2h13_btn_text = "Ocupada"; $f2h13_btn_class = "danger"; $f2h13_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 2' AND hora = 'h135' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f2h13 = $gb -> getNumRows();
$gb -> setClose();		
if ($f2h135<1) {$f2h135_btn_text = "Reservar"; $f2h135_btn_class = "info";}
if ($f2h135>0) {$f2h135_btn_text = "Ocupada"; $f2h135_btn_class = "danger"; $f2h135_estado='disabled="disabled"';}




$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 3' AND hora = 'h13' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f3h13 = $gb -> getNumRows();
$gb -> setClose();		
if ($f3h13<1) {$f3h13_btn_text = "Reservar"; $f3h13_btn_class = "info";}
if ($f3h13>0) {$f3h13_btn_text = "Ocupada"; $f3h13_btn_class = "danger"; $f3h13_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 3' AND hora = 'h135' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f3h135 = $gb -> getNumRows();
$gb -> setClose();		
if ($f3h135<1) {$f3h135_btn_text = "Reservar"; $f3h135_btn_class = "info";}
if ($f3h135>0) {$f3h135_btn_text = "Ocupada"; $f3h135_btn_class = "danger"; $f3h135_estado='disabled="disabled"';}






/* DATOS DE LAS 13-14*/
$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 1' AND hora = 'h14' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f1h14 = $gb -> getNumRows();
$gb -> setClose();		
if ($f1h14<1) {$f1h14_btn_text = "Reservar"; $f1h14_btn_class = "info";}
if ($f1h14>0) {$f1h14_btn_text = "Ocupada"; $f1h14_btn_class = "danger"; $f1h14_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 1' AND hora = 'h145' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f1h145 = $gb -> getNumRows();
$gb -> setClose();		
if ($f1h145<1) {$f1h145_btn_text = "Reservar"; $f1h145_btn_class = "info";}
if ($f1h145>0) {$f1h145_btn_text = "Ocupada"; $f1h145_btn_class = "danger"; $f1h145_estado='disabled="disabled"';}




$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 2' AND hora = 'h14' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f2h14 = $gb -> getNumRows();
$gb -> setClose();		
if ($f2h14<1) {$f2h14_btn_text = "Reservar"; $f2h14_btn_class = "info";}
if ($f2h14>0) {$f2h14_btn_text = "Ocupada"; $f2h14_btn_class = "danger"; $f2h14_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 2' AND hora = 'h145' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f2h145 = $gb -> getNumRows();
$gb -> setClose();		
if ($f2h145<1) {$f2h145_btn_text = "Reservar"; $f2h145_btn_class = "info";}
if ($f2h145>0) {$f2h145_btn_text = "Ocupada"; $f2h145_btn_class = "danger"; $f2h145_estado='disabled="disabled"';}




$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 3' AND hora = 'h14' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f3h14 = $gb -> getNumRows();
$gb -> setClose();		
if ($f3h14<1) {$f3h14_btn_text = "Reservar"; $f3h14_btn_class = "info";}
if ($f3h14>0) {$f3h14_btn_text = "Ocupada"; $f3h14_btn_class = "danger"; $f3h14_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 3' AND hora = 'h145' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f3h145 = $gb -> getNumRows();
$gb -> setClose();		
if ($f3h145<1) {$f3h145_btn_text = "Reservar"; $f3h145_btn_class = "info";}
if ($f3h145>0) {$f3h145_btn_text = "Ocupada"; $f3h145_btn_class = "danger"; $f3h145_estado='disabled="disabled"';}





/* DATOS DE LAS 13-14*/
$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 1' AND hora = 'h15' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f1h15 = $gb -> getNumRows();
$gb -> setClose();		
if ($f1h15<1) {$f1h15_btn_text = "Reservar"; $f1h15_btn_class = "info";}
if ($f1h15>0) {$f1h15_btn_text = "Ocupada"; $f1h15_btn_class = "danger"; $f1h15_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 1' AND hora = 'h155' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f1h155 = $gb -> getNumRows();
$gb -> setClose();		
if ($f1h155<1) {$f1h155_btn_text = "Reservar"; $f1h155_btn_class = "info";}
if ($f1h155>0) {$f1h155_btn_text = "Ocupada"; $f1h155_btn_class = "danger"; $f1h155_estado='disabled="disabled"';}





$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 2' AND hora = 'h15' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f2h15 = $gb -> getNumRows();
$gb -> setClose();		
if ($f2h15<1) {$f2h15_btn_text = "Reservar"; $f2h15_btn_class = "info";}
if ($f2h15>0) {$f2h15_btn_text = "Ocupada"; $f2h15_btn_class = "danger"; $f2h15_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 2' AND hora = 'h155' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f2h155 = $gb -> getNumRows();
$gb -> setClose();		
if ($f2h155<1) {$f2h155_btn_text = "Reservar"; $f2h155_btn_class = "info";}
if ($f2h155>0) {$f2h155_btn_text = "Ocupada"; $f2h155_btn_class = "danger"; $f2h155_estado='disabled="disabled"';}




$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 3' AND hora = 'h15' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f3h15 = $gb -> getNumRows();
$gb -> setClose();		
if ($f3h15<1) {$f3h15_btn_text = "Reservar"; $f3h15_btn_class = "info";}
if ($f3h15>0) {$f3h15_btn_text = "Ocupada"; $f3h15_btn_class = "danger"; $f3h15_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 3' AND hora = 'h155' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f3h155 = $gb -> getNumRows();
$gb -> setClose();		
if ($f3h155<1) {$f3h155_btn_text = "Reservar"; $f3h155_btn_class = "info";}
if ($f3h155>0) {$f3h155_btn_text = "Ocupada"; $f3h155_btn_class = "danger"; $f3h155_estado='disabled="disabled"';}






/* DATOS DE LAS 13-14*/
$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 1' AND hora = 'h16' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f1h16 = $gb -> getNumRows();
$gb -> setClose();		
if ($f1h16<1) {$f1h16_btn_text = "Reservar"; $f1h16_btn_class = "info";}
if ($f1h16>0) {$f1h16_btn_text = "Ocupada"; $f1h16_btn_class = "danger"; $f1h16_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 1' AND hora = 'h165' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f1h165 = $gb -> getNumRows();
$gb -> setClose();		
if ($f1h165<1) {$f1h165_btn_text = "Reservar"; $f1h165_btn_class = "info";}
if ($f1h165>0) {$f1h165_btn_text = "Ocupada"; $f1h165_btn_class = "danger"; $f1h165_estado='disabled="disabled"';}




$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 2' AND hora = 'h16' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f2h16 = $gb -> getNumRows();
$gb -> setClose();		
if ($f2h16<1) {$f2h16_btn_text = "Reservar"; $f2h16_btn_class = "info";}
if ($f2h16>0) {$f2h16_btn_text = "Ocupada"; $f2h16_btn_class = "danger"; $f2h16_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 2' AND hora = 'h165' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f2h165 = $gb -> getNumRows();
$gb -> setClose();		
if ($f2h165<1) {$f2h165_btn_text = "Reservar"; $f2h165_btn_class = "info";}
if ($f2h165>0) {$f2h165_btn_text = "Ocupada"; $f2h165_btn_class = "danger"; $f2h165_estado='disabled="disabled"';}




$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 3' AND hora = 'h16' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f3h16 = $gb -> getNumRows();
$gb -> setClose();		
if ($f3h16<1) {$f3h16_btn_text = "Reservar"; $f3h16_btn_class = "info";}
if ($f3h16>0) {$f3h16_btn_text = "Ocupada"; $f3h16_btn_class = "danger"; $f3h16_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 3' AND hora = 'h165' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f3h165 = $gb -> getNumRows();
$gb -> setClose();		
if ($f3h165<1) {$f3h165_btn_text = "Reservar"; $f3h165_btn_class = "info";}
if ($f3h165>0) {$f3h165_btn_text = "Ocupada"; $f3h165_btn_class = "danger"; $f3h165_estado='disabled="disabled"';}




/* DATOS DE LAS 13-14*/
$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 1' AND hora = 'h17' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f1h17 = $gb -> getNumRows();
$gb -> setClose();		
if ($f1h17<1) {$f1h17_btn_text = "Reservar"; $f1h17_btn_class = "info";}
if ($f1h17>0) {$f1h17_btn_text = "Ocupada"; $f1h17_btn_class = "danger"; $f1h17_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 1' AND hora = 'h175' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f1h175 = $gb -> getNumRows();
$gb -> setClose();		
if ($f1h175<1) {$f1h175_btn_text = "Reservar"; $f1h175_btn_class = "info";}
if ($f1h175>0) {$f1h175_btn_text = "Ocupada"; $f1h175_btn_class = "danger"; $f1h175_estado='disabled="disabled"';}




$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 2' AND hora = 'h17' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f2h17 = $gb -> getNumRows();
$gb -> setClose();		
if ($f2h17<1) {$f2h17_btn_text = "Reservar"; $f2h17_btn_class = "info";}
if ($f2h17>0) {$f2h17_btn_text = "Ocupada"; $f2h17_btn_class = "danger"; $f2h17_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 2' AND hora = 'h175' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f2h175 = $gb -> getNumRows();
$gb -> setClose();		
if ($f2h175<1) {$f2h175_btn_text = "Reservar"; $f2h175_btn_class = "info";}
if ($f2h175>0) {$f2h175_btn_text = "Ocupada"; $f2h175_btn_class = "danger"; $f2h175_estado='disabled="disabled"';}




$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 3' AND hora = 'h17' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f3h17 = $gb -> getNumRows();
$gb -> setClose();		
if ($f3h17<1) {$f3h17_btn_text = "Reservar"; $f3h17_btn_class = "info";}
if ($f3h17>0) {$f3h17_btn_text = "Ocupada"; $f3h17_btn_class = "danger"; $f3h17_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 3' AND hora = 'h175' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f3h175 = $gb -> getNumRows();
$gb -> setClose();		
if ($f3h175<1) {$f3h175_btn_text = "Reservar"; $f3h175_btn_class = "info";}
if ($f3h175>0) {$f3h175_btn_text = "Ocupada"; $f3h175_btn_class = "danger"; $f3h175_estado='disabled="disabled"';}





/* DATOS DE LAS 13-14*/
$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 1' AND hora = 'h18' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f1h18 = $gb -> getNumRows();
$gb -> setClose();		
if ($f1h18<1) {$f1h18_btn_text = "Reservar"; $f1h18_btn_class = "info";}
if ($f1h18>0) {$f1h18_btn_text = "Ocupada"; $f1h18_btn_class = "danger"; $f1h18_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 1' AND hora = 'h185' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f1h185 = $gb -> getNumRows();
$gb -> setClose();		
if ($f1h185<1) {$f1h185_btn_text = "Reservar"; $f1h185_btn_class = "info";}
if ($f1h185>0) {$f1h185_btn_text = "Ocupada"; $f1h185_btn_class = "danger"; $f1h185_estado='disabled="disabled"';}




$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 2' AND hora = 'h18' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f2h18 = $gb -> getNumRows();
$gb -> setClose();		
if ($f2h18<1) {$f2h18_btn_text = "Reservar"; $f2h18_btn_class = "info";}
if ($f2h18>0) {$f2h18_btn_text = "Ocupada"; $f2h18_btn_class = "danger"; $f2h18_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 2' AND hora = 'h185' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f2h185 = $gb -> getNumRows();
$gb -> setClose();		
if ($f2h185<1) {$f2h185_btn_text = "Reservar"; $f2h185_btn_class = "info";}
if ($f2h185>0) {$f2h185_btn_text = "Ocupada"; $f2h185_btn_class = "danger"; $f2h185_estado='disabled="disabled"';}




$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 3' AND hora = 'h18' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f3h18 = $gb -> getNumRows();
$gb -> setClose();		
if ($f3h18<1) {$f3h18_btn_text = "Reservar"; $f3h18_btn_class = "info";}
if ($f3h18>0) {$f3h18_btn_text = "Ocupada"; $f3h18_btn_class = "danger"; $f3h18_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 3' AND hora = 'h185' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f3h185 = $gb -> getNumRows();
$gb -> setClose();		
if ($f3h185<1) {$f3h185_btn_text = "Reservar"; $f3h185_btn_class = "info";}
if ($f3h185>0) {$f3h185_btn_text = "Ocupada"; $f3h185_btn_class = "danger"; $f3h185_estado='disabled="disabled"';}






/* DATOS DE LAS 13-14*/
$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 1' AND hora = 'h19' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f1h19 = $gb -> getNumRows();
$gb -> setClose();		
if ($f1h19<1) {$f1h19_btn_text = "Reservar"; $f1h19_btn_class = "info";}
if ($f1h19>0) {$f1h19_btn_text = "Ocupada"; $f1h19_btn_class = "danger"; $f1h19_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 1' AND hora = 'h195' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f1h195 = $gb -> getNumRows();
$gb -> setClose();		
if ($f1h195<1) {$f1h195_btn_text = "Reservar"; $f1h195_btn_class = "info";}
if ($f1h195>0) {$f1h195_btn_text = "Ocupada"; $f1h195_btn_class = "danger"; $f1h195_estado='disabled="disabled"';}




$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 2' AND hora = 'h19' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f2h19 = $gb -> getNumRows();
$gb -> setClose();		
if ($f2h19<1) {$f2h19_btn_text = "Reservar"; $f2h19_btn_class = "info";}
if ($f2h19>0) {$f2h19_btn_text = "Ocupada"; $f2h19_btn_class = "danger"; $f2h19_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 2' AND hora = 'h195' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f2h195 = $gb -> getNumRows();
$gb -> setClose();		
if ($f2h195<1) {$f2h195_btn_text = "Reservar"; $f2h195_btn_class = "info";}
if ($f2h195>0) {$f2h195_btn_text = "Ocupada"; $f2h195_btn_class = "danger"; $f2h195_estado='disabled="disabled"';}





$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 3' AND hora = 'h19' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f3h19 = $gb -> getNumRows();
$gb -> setClose();		
if ($f3h19<1) {$f3h19_btn_text = "Reservar"; $f3h19_btn_class = "info";}
if ($f3h19>0) {$f3h19_btn_text = "Ocupada"; $f3h19_btn_class = "danger"; $f3h19_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 3' AND hora = 'h195' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f3h195 = $gb -> getNumRows();
$gb -> setClose();		
if ($f3h195<1) {$f3h195_btn_text = "Reservar"; $f3h195_btn_class = "info";}
if ($f3h195>0) {$f3h195_btn_text = "Ocupada"; $f3h195_btn_class = "danger"; $f3h195_estado='disabled="disabled"';}





/* DATOS DE LAS 13-14*/
$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 1' AND hora = 'h20' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f1h20 = $gb -> getNumRows();
$gb -> setClose();		
if ($f1h20<1) {$f1h20_btn_text = "Reservar"; $f1h20_btn_class = "info";}
if ($f1h20>0) {$f1h20_btn_text = "Ocupada"; $f1h20_btn_class = "danger"; $f1h20_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 1' AND hora = 'h205' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f1h205 = $gb -> getNumRows();
$gb -> setClose();		
if ($f1h205<1) {$f1h205_btn_text = "Reservar"; $f1h205_btn_class = "info";}
if ($f1h205>0) {$f1h205_btn_text = "Ocupada"; $f1h205_btn_class = "danger"; $f1h205_estado='disabled="disabled"';}






$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 2' AND hora = 'h20' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f2h20 = $gb -> getNumRows();
$gb -> setClose();		
if ($f2h20<1) {$f2h20_btn_text = "Reservar"; $f2h20_btn_class = "info";}
if ($f2h20>0) {$f2h20_btn_text = "Ocupada"; $f2h20_btn_class = "danger"; $f2h20_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 2' AND hora = 'h205' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f2h205 = $gb -> getNumRows();
$gb -> setClose();		
if ($f2h205<1) {$f2h205_btn_text = "Reservar"; $f2h205_btn_class = "info";}
if ($f2h205>0) {$f2h205_btn_text = "Ocupada"; $f2h205_btn_class = "danger"; $f2h205_estado='disabled="disabled"';}





$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 3' AND hora = 'h20' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f3h20 = $gb -> getNumRows();
$gb -> setClose();		
if ($f3h20<1) {$f3h20_btn_text = "Reservar"; $f3h20_btn_class = "info";}
if ($f3h20>0) {$f3h20_btn_text = "Ocupada"; $f3h20_btn_class = "danger"; $f3h20_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 3' AND hora = 'h205' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f3h205 = $gb -> getNumRows();
$gb -> setClose();		
if ($f3h205<1) {$f3h205_btn_text = "Reservar"; $f3h205_btn_class = "info";}
if ($f3h205>0) {$f3h205_btn_text = "Ocupada"; $f3h205_btn_class = "danger"; $f3h205_estado='disabled="disabled"';}





/* DATOS DE LAS 13-14*/
$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 1' AND hora = 'h21' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f1h21 = $gb -> getNumRows();
$gb -> setClose();		
if ($f1h21<1) {$f1h21_btn_text = "Reservar"; $f1h21_btn_class = "info";}
if ($f1h21>0) {$f1h21_btn_text = "Ocupada"; $f1h21_btn_class = "danger"; $f1h21_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 1' AND hora = 'h215' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f1h215 = $gb -> getNumRows();
$gb -> setClose();		
if ($f1h215<1) {$f1h215_btn_text = "Reservar"; $f1h215_btn_class = "info";}
if ($f1h215>0) {$f1h215_btn_text = "Ocupada"; $f1h215_btn_class = "danger"; $f1h215_estado='disabled="disabled"';}





$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 2' AND hora = 'h21' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f2h21 = $gb -> getNumRows();
$gb -> setClose();		
if ($f2h21<1) {$f2h21_btn_text = "Reservar"; $f2h21_btn_class = "info";}
if ($f2h21>0) {$f2h21_btn_text = "Ocupada"; $f2h21_btn_class = "danger"; $f2h21_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 2' AND hora = 'h215' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f2h215 = $gb -> getNumRows();
$gb -> setClose();		
if ($f2h215<1) {$f2h215_btn_text = "Reservar"; $f2h215_btn_class = "info";}
if ($f2h215>0) {$f2h215_btn_text = "Ocupada"; $f2h215_btn_class = "danger"; $f2h215_estado='disabled="disabled"';}




$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 3' AND hora = 'h21' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f3h21 = $gb -> getNumRows();
$gb -> setClose();		
if ($f3h21<1) {$f3h21_btn_text = "Reservar"; $f3h21_btn_class = "info";}
if ($f3h21>0) {$f3h21_btn_text = "Ocupada"; $f3h21_btn_class = "danger"; $f3h21_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 3' AND hora = 'h215' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f3h215 = $gb -> getNumRows();
$gb -> setClose();		
if ($f3h215<1) {$f3h215_btn_text = "Reservar"; $f3h215_btn_class = "info";}
if ($f3h215>0) {$f3h215_btn_text = "Ocupada"; $f3h215_btn_class = "danger"; $f3h215_estado='disabled="disabled"';}





$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 1' AND hora = 'h22' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f1h22 = $gb -> getNumRows();
$gb -> setClose();		
if ($f1h22<1) {$f1h22_btn_text = "Reservar"; $f1h22_btn_class = "info";}
if ($f1h22>0) {$f1h22_btn_text = "Ocupada"; $f1h22_btn_class = "danger"; $f1h22_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 2' AND hora = 'h22' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f2h22 = $gb -> getNumRows();
$gb -> setClose();		
if ($f2h22<1) {$f2h22_btn_text = "Reservar"; $f2h22_btn_class = "info";}
if ($f2h22>0) {$f2h22_btn_text = "Ocupada"; $f2h22_btn_class = "danger"; $f2h22_estado='disabled="disabled"';}

$query = "SELECT * FROM club_reservas WHERE fecha= '$_POST[fecha]' AND pista = 'Fronton 3' AND hora = 'h22' AND id_club = '$id_club'";
$gb = new conexionBD();
$gb -> doQuery("$query");
$f3h22 = $gb -> getNumRows();
$gb -> setClose();		
if ($f3h22<1) {$f3h22_btn_text = "Reservar"; $f3h22_btn_class = "info";}
if ($f3h22>0) {$f3h22_btn_text = "Ocupada"; $f3h22_btn_class = "danger"; $f3h22_estado='disabled="disabled"';}

?>
