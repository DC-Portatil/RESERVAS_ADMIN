<?php  
$archivo = basename($_SERVER['PHP_SELF']);

?>
  <ul class="nav navbar-nav">
  
    <li <?php if ($archivo == "index.php") {echo "class=\"active\"";}?>><a href="index.php">Inicio</a></li>
    <li <?php if ($archivo == "precios.php") {echo "class=\"active\"";}?>><a href="precios.php">Precios</a></li>
    <li <?php if ($archivo == "condiciones-de-uso.php") {echo "class=\"active\"";}?>><a href="#condiciones" data-toggle="modal">Condiciones de Uso</a></li>
    <li <?php if ($archivo == "registro.php") {echo "class=\"active\"";}?>><a href="registro.php">Reg&iacute;strate</a></li>
    <li <?php if ($archivo == "contacto.php") {echo "class=\"active\"";}?>><a href="contacto.php">Cont&aacute;ctanos</a></li>
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Escuela Tenis <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li <?php if ($archivo == "niveles.php") {echo "class=\"active\"";}?>><a href="#">Niveles</a></li>
        <li <?php if ($archivo == "grupos-y-horarios.php") {echo "class=\"active\"";}?>><a href="#">Grupos y Horarios</a></li>
        <li <?php if ($archivo == "mision-y-filosofia.php.php") {echo "class=\"active\"";}?>><a href="#">Misi&oacute;n y Filosof&iacute;a</a></li>
        <li <?php if ($archivo == "actividades-complementarias.php") {echo "class=\"active\"";}?>><a href="#">Actividades complementarias</a></li>
        <li <?php if ($archivo == "equipo-tecnico.php") {echo "class=\"active\"";}?>><a href="#">Entrenadores / Monitores</a></li>
        <li class="divider"></li>
        <li class="dropdown-header">Curso 2013-2014</li>
        <li <?php if ($archivo == "inscrbirse.php") {echo "class=\"active\"";}?>><a href="#">Inscribirse</a></li>
        <li <?php if ($archivo == "especial-adultos.php") {echo "class=\"active\"";}?>><a href="#">Entrenamiento Adultos</a></li>
      </ul>
    </li>
  </ul>



