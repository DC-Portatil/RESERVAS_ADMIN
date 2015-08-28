<?php include "classes/class_general_db.php";

  $query = "SELECT * FROM club_usuarios_reservas WHERE email = '$_POST[email]' AND password = '$_POST[password]' AND validado = 'SI'";
  $gt = new conexionBD();
  $gt -> doQuery("$query");
  $acceso = $gt -> getNumRows();
    while ($gt -> setWhile()) {
      $id     = $gt -> getDataSQL("id");
      $nombre   = $gt -> getDataSQL("nombre");
      $apellido_p = $gt -> getDataSQL("apellido_p");
      $hashmail = $gt -> getDataSQL("hashmail");
      }

if ($acceso>0) {setcookie("ValidUser", $hashmail,time()+3600);  
?>
<script language="JavaScript" type="text/javascript">
var pagina="start.php"
function redireccionar() 
{location.href=pagina} 
setTimeout ("redireccionar()", 0);
</script> 
<?php } 

if ($acceso<1) {?>
<script language="JavaScript" type="text/javascript">
var pagina="index.php?login=error"
function redireccionar() 
{location.href=pagina} 
setTimeout ("redireccionar()", 0);
</script> 
 <?php } ?>

 