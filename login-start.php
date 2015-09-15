<?php include "classes/class_general_db.php";

 $query = "SELECT * FROM usuarios_admin WHERE email = '$_POST[email]' AND password = '$_POST[password]' LIMIT 1";
  //$query = "SELECT * FROM usuarios_admin";
  $gt = new conexionBD();
  $gt -> doQuery("$query");
  $acceso = $gt -> getNumRows();
    while ($gt -> setWhile()) {
      $id         = $gt -> getDataSQL("id_usuario");
      $nombre     = $gt -> getDataSQL("nombre");
      $apellido_p = $gt -> getDataSQL("apellido_p");
      $hashmail   = $gt -> getDataSQL("hashmail");
      }



if ($acceso==1) {setcookie("ValidAdmin", $hashmail,time()+36000);

?>



<script language="JavaScript" type="text/javascript">
var pagina="start.php"
function redireccionar() 
{location.href=pagina} 
setTimeout ("redireccionar()", 0);
</script> 
<?php } 

if ($acceso<>1) {?>
<script language="JavaScript" type="text/javascript">
var pagina="index.php?login=error"
function redireccionar() 
{location.href=pagina} 
setTimeout ("redireccionar()", 0);
</script> 
 <?php  } 
 ?>