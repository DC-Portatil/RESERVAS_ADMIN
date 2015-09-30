<?php 
if (isset($_COOKIE["ValidAdmin"])) {
include "classes/class_general_db.php";
include "includes/admin_data.php";
include "includes/manipula_fechas.php";
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
        <div class="col-md-12">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">
                Reservas para <?php echo "$dia_hoy_l - [$hoy]";?>
               
              </h3>
            </div>
            <div class="panel-body">
              <?php 
                include "includes/panel_reservas_general.php";
              ?>
            </div>
          </div>
        </div>
      </div> 
 

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