<?php  
$archivo = basename($_SERVER['PHP_SELF']);

?>

<div class="row">
  <div class="col-md-12">
     <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Navegar</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Bienvenido <?php echo "$nombre $apellido_p";?></a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li <?php if ($archivo == "start.php") {echo "class=\"active\"";}?>><a href="start.php">Inicio</a></li>
            <li <?php if ($archivo == "cuadrante.php") {echo "class=\"active\"";}?>><a href="cuadrante.php">Cuadrante Hoy</a></li>       
            <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Reservas <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li <?php if ($archivo == "reserva-unitaria.php") {echo "class=\"active\"";}?>><a href="reserva-unitaria.php">Reserva &Uacute;nica</a></li>
            <li <?php if ($archivo == "reserva-periodica.php") {echo "class=\"active\"";}?>><a href="reserva-periodica.php">Reserva Peri&oacute;dica</a></li>
          </ul>
        </li>
            <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Caja <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li <?php if ($archivo == "pago-reserva.php") {echo "class=\"active\"";}?>><a href="pago-reserva.php">Pago Reserva</a></li>
            <li <?php if ($archivo == "pago-cordaje.php") {echo "class=\"active\"";}?>><a href="pago-cordaje.php">Pago Cordaje</a></li>
            <li <?php if ($archivo == "venta.php") {echo "class=\"active\"";}?>><a href="venta.php">Venta</a></li>
            <li <?php if ($archivo == "gasto.php") {echo "class=\"active\"";}?>><a href="gasto.php">Gasto</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cordaje <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li <?php if ($archivo == "recepcion-raqueta.php") {echo "class=\"active\"";}?>><a href="recepcion-raqueta.php">Recepci&oacute;n Raqueta</a></li>
            <li <?php if ($archivo == "entrega-raqueta.php") {echo "class=\"active\"";}?>><a href="entrega-raqueta.php">Entrega Raqueta</a></li>
          </ul>
        </li>
            <li <?php if ($archivo == "index.php") {echo "class=\"active\"";}?>><a href="index.php?login=getout&a=<?php echo $hashmail;?>">Salir</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  </div>
</div>