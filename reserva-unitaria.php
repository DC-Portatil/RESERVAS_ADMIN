<?php 
if (isset($_COOKIE["ValidAdmin"])) {
include "classes/class_general_db.php";
include "includes/admin_data.php";
include "includes/manipula_fechas.php";

$sport_selected = $_POST['deporte'];

 ?>
 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CIUTAT ESPORTIVA - Registro - Reserva de pistas</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <script src="js/jquery-1.8.3.min.js"></script>
    <link href="css/bootstrap-datepicker.css" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <img src="images/logo.png">
        </div>
      </div>
      <div class="row space-up1">
        <div class="col-md-12">
        <?php include "menu-start.php";?>
        </div>
      </div>  
      <div class="row">
        <div class="col-md-4">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">Selecciona Fecha</h3>
            </div>
            <div class="panel-body">
              <form method="post">
                <input type="hidden" name="fecha_selected" value="fecha_selected">
                <input type="hidden" name="tipo_pista" value="<?php echo $_POST['tipo_pista'];?>">
                <input type="hidden" name="deporte" value="<?php echo $_POST['deporte'];?>">
                <input type="hidden" name="pista_selected" value="pista_selected">
                <input id="datepicker" name="fecha" class="form-control input" readonly onchange="this.form.submit();" value="<?php echo $_POST['fecha'];?>" placeholder="Clic para seleccionar fecha"> 
              </form>  
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">Seleccione deporte:</h3>
            </div>
            <div class="panel-body">
              <form method="post">
              <input type="hidden" name="fecha" value="<?php echo $_POST['fecha'];?>">
                 <select class="form-control" name="deporte" onchange="submit(this);">
                  <option value="">Seleccione</option>
                  <option value="Tenis"   <?php if ($_POST['deporte']=="Tenis") {echo "selected";} ?>>Tenis</option>
                  <option value="Fronton" <?php if ($_POST['deporte']=="Fronton") {echo "selected";} ?>>Fronton</option>
                  <option value="Futbito" <?php if ($_POST['deporte']=="Futbito") {echo "selected";} ?>>Futbito</option>
                </select>
              </form>  
            </div>
          </div>
        </div>
        <?php if ($_POST['deporte']<>"") { ?>
        <div class="col-md-4">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">Indique Tel&eacute;fono Usuario</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-8">
                <form method="post">
                  <input class="form-control" type="text" id="telefono_reserva" value="<?php echo $_POST['telefono_reserva'];?>" name="telefono_reserva">
                </div>
                <div class="col-md-4">
                    <input type="hidden" name="search_usuario" value="search_usuario">
                    <input type="hidden" name="fecha" value="<?php echo $_POST['fecha'];?>">
                    <input type="hidden" name="deporte" value="<?php echo $_POST['deporte'];?>">
                    <input type="submit" class="btn btn-danger" value="Indicar">
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
      <?php 
      if ($_POST['search_usuario']=="search_usuario") { 

        $query = "SELECT id,nombre,apellido_p,email,movil FROM club_usuarios_reservas WHERE movil = '$_POST[telefono_reserva]' LIMIT 1";
        $gt = new conexionBD();
        $gt -> doQuery("$query");
        $existe_usuario = $gt -> getNumRows();
          while ( $gt -> setWhile()) {
            $id_usuario_reserva = $gt -> getDataSQL("id");
            $nombre_reserva     = $gt -> getDataSQL("nombre");
            $apellido_p_reserva = $gt -> getDataSQL("apellido_p");
            $email_reserva      = $gt -> getDataSQL("email");
            $movil_reserva      = $gt -> getDataSQL("movil");
          }


          if ($existe_usuario<1){ include "includes/formulario_usuario_reserva.php"; }   
          if ($existe_usuario>0){   
        ?>
      <div class="row">
        <div class="col-md-12">
          <div class="alert alert-danger">
            Usuario bloqueado para realizar reservas
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="alert alert-success">
            Usuario bloqueado para realizar reservas
          </div>
        </div>
      </div>  
      <div class="row">
        <div class="col-md-12">
          <div class="alert alert-warning">
            No existen reservas anteriores para este usuario. Indica datos:
          </div>
        </div>
      </div>

      <?php }  
        }
      ?>
      <?php if ($_POST['deporte']<>""){ ?>
      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">
                Reservas para (<?php echo "$_POST[fecha]";?>) <strong>[<?php echo $sport_selected;?>]</strong>
               
              </h3>
            </div>
            <div class="panel-body">
              <?php 

              if ($sport_selected=="Tenis")   {include "includes/panel_reserva_tenis.php";}
              if ($sport_selected=="Fronton") {include "includes/panel_reserva_fronton.php";} 
              if ($sport_selected=="Futbito") {include "includes/panel_reserva_futbito.php";} 
              ?>
            </div>
          </div>
        </div>
      </div> 
      <?php } ?> 
 

      <hr>  
          <footer>
            <p>&copy; Courtcentral Sport Management SL. All rights reserved. 2015.</p>
          </footer>
    </div><!-- /.container -->
    </body>
</html> 
  <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/bootstrap-datepicker.es.min.js"></script>


  <script>

function valida_envia(){
  //valido el tipo de reserva
  if (document.valida.fecha.value.length==0){
    alert("Debe seleccionar una fecha para consultar.")
    return false;
  }
}


$(function() {
    $('.input').datepicker({
        format: "dd/mm/yyyy",
        startDate: "<?php echo $today;?>",
        endDate: "<?php echo $endDate;?>",
        todayBtn: "linked",
        language: "es",
        keyboardNavigation: false,
        autoclose: true,
        todayHighlight: true
    });

});
</script>

 <?php  } else { ?>

<script>
  window.location.href = "index.php?login=timeout";
</script>

 <?php  } ?>   