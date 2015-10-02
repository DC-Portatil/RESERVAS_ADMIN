<?php 

if ($_GET['login']=="getout") {
setcookie("ValidUser", $_GET['a'],time()-3600);
 $msg='<div class="alert alert-success space-up1"><small>Gracias por utilizar este sistema.Te esperamos pronto!</div>';
}
if ($_GET['login']=="error") { $msg='<div class="alert alert-danger space-up1"><small>Email o password incorrectos.<br><a href="recordar-password.php"><strong>Recordar Contrase&ntilde;a</strong></small></a></div>';}
if ($_GET['login']=="timeout") { $msg='<div class="alert alert-danger space-up1"><small>Tu sesi&oacute;n ha expirado! Por seguridad tienes que volver a identificarte.</div>';}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CIUTAT ESPORTIVA | Sistema de Reservas</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
<div class="container">
  <div class="row">
    <div class="col-md-4">
      <img src="images/logo.png">
    </div>
    </div>
  <div class="row space-up1">
    <div class="col-md-12">
      <div class="alert alert-info">
        <h1>Bienvenido!</h1>
    <p>Para poder utilizar este servicio los usuarios deben estar registrados.</p>
      </div>
    </div>
  </div>


  <!-- Example row of columns -->
  <div class="row">
    <div class="col-lg-4">
      <h2>Identif&iacute;cate</h2>
      <form class="form-signin" method="post" onSubmit="return valida()" role="form" name="form" id="form" action="login-start.php">
        <input type="text" class="form-control" placeholder="T&uacute; Email" autofocus name="email" id="email">
        <input type="password" class="form-control" placeholder="Contrase&ntilde;a" name="password" id="password">
        <!--<label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>-->
        <button class="btn btn-lg btn-primary btn-block" type="submit">Acceder</button><?php echo $msg;?>
      </form>
      
    </div>

    <div class="col-lg-4">
      <h2>El tiempo</h2>
      <div id="c_a4e357478cd1a983b9998b9e54b87ee4" class="completo"></div><script type="text/javascript" src="http://www.eltiempo.es/widget/widget_loader/a4e357478cd1a983b9998b9e54b87ee4"></script>
    </div>
    <div class="col-md-4"></div>
  </div>

  <hr>

  <footer>
    <p>&copy; Courtcentral Sport Management SL. All rights reserved. 2015&nbsp;&nbsp;||&nbsp;&nbsp;Visita nuestra web: <a href="http://www.courtcentral.es" target="_blank">www.courtcentral.es</a></p>
  </footer>
</div> <!-- /container -->

<?php include "footer.php";?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
function valida(){
	if (this.form.email.value.length==0) {
		alert ('Debes especificar tu Email');
		document.getElementById('email').focus();
		return false;
		}

	if (this.form.password.value.length==0) {
		document.getElementById('password').focus();
		alert ('Debes especificar tu contraseña');
		return false;
		}

}
    </script>
  </body>
</html>
<?php include "footer.php";?>