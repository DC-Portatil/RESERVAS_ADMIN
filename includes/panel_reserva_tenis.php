<table class="table">
	<tr>
		<td></td>
		<td colspan="3">Pistas (1,2 y 3) Tenis Quick</td>
		<td colspan="3">Pistas (4,5 y 6) C&eacute;sped Artificial</td>	
	</tr>	
	<tr>	
		<td>&nbsp;</td>
		<td align="center">
		<div class="alert alert-info">Tenis 1</div>

			</td>
		</td>
		<td align="center">
		<div class="alert alert-info">Tenis 2</div>

			</td>
		</td>
		<td align="center">
			<div class="alert alert-info">Tenis 3</div>

		</td>
		<td align="center">
		<div class="alert alert-success">Tenis 4</div>

		</td>
		</td>
		<td align="center">
		<div class="alert alert-success">Tenis 5</div>

		</td>
		</td>
		<td align="center">
		<div class="alert alert-success">Tenis 6</div>

		</td>
	</tr>
	<tr>
<?php 
include "includes/disponibilidad_tenis.php";

?>
	
		<td>09:00-09:30</td>
		<td><a href="#doreserva" class="h9 openDialog btn btn-<?php echo $t1h9_btn_class;?>" <?php echo $t1h9_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 1" data-hora="h9" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t1h9_btn_text;?></a></td>
		<td><a href="#doreserva" class="h9 openDialog btn btn-<?php echo $t2h9_btn_class;?>" <?php echo $t2h9_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 2" data-hora="h9" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t2h9_btn_text;?></a></td>
		<td><a href="#doreserva" class="h9 openDialog btn btn-<?php echo $t3h9_btn_class;?>" <?php echo $t3h9_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 3" data-hora="h9" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t3h9_btn_text;?></a></td>
		<td><a href="#doreserva" class="h9 openDialog btn btn-<?php echo $t4h9_btn_class;?>" <?php echo $t4h9_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 4" data-hora="h9" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t4h9_btn_text;?></a></td>
		<td><a href="#doreserva" class="h9 openDialog btn btn-<?php echo $t5h9_btn_class;?>" <?php echo $t5h9_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 5" data-hora="h9" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t5h9_btn_text;?></a></td>
		<td><a href="#doreserva" class="h9 openDialog btn btn-<?php echo $t6h9_btn_class;?>" <?php echo $t6h9_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 6" data-hora="h9" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t6h9_btn_text;?></a></td>
	</tr>
	<tr>
		<td>09:30-10:00</td>
		<td><a href="#doreserva" class="h95 openDialog btn btn-<?php echo $t1h95_btn_class;?>" <?php echo $t1h95_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 1" data-hora="h95" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t1h95_btn_text;?></a></td>
		<td><a href="#doreserva" class="h95 openDialog btn btn-<?php echo $t2h95_btn_class;?>" <?php echo $t2h95_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 2" data-hora="h95" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t2h95_btn_text;?></a></td>
		<td><a href="#doreserva" class="h95 openDialog btn btn-<?php echo $t3h95_btn_class;?>" <?php echo $t3h95_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 3" data-hora="h95" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t3h95_btn_text;?></a></td>
		<td><a href="#doreserva" class="h95 openDialog btn btn-<?php echo $t4h95_btn_class;?>" <?php echo $t4h95_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 4" data-hora="h95" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t4h95_btn_text;?></a></td>
		<td><a href="#doreserva" class="h95 openDialog btn btn-<?php echo $t5h95_btn_class;?>" <?php echo $t5h95_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 5" data-hora="h95" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t5h95_btn_text;?></a></td>
		<td><a href="#doreserva" class="h95 openDialog btn btn-<?php echo $t6h95_btn_class;?>" <?php echo $t6h95_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 6" data-hora="h95" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t6h95_btn_text;?></a></td>
	</tr>	
	<tr>
		<td>10:00-10:30</td>
		<td><a href="#doreserva" class="h10 openDialog btn btn-<?php echo $t1h10_btn_class;?>" <?php echo $t1h10_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 1" data-hora="h10" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t1h10_btn_text;?></a></td>
		<td><a href="#doreserva" class="h10 openDialog btn btn-<?php echo $t2h10_btn_class;?>" <?php echo $t2h10_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 2" data-hora="h10" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t2h10_btn_text;?></a></td>
		<td><a href="#doreserva" class="h10 openDialog btn btn-<?php echo $t3h10_btn_class;?>" <?php echo $t3h10_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 3" data-hora="h10" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t3h10_btn_text;?></a></td>
		<td><a href="#doreserva" class="h10 openDialog btn btn-<?php echo $t4h10_btn_class;?>" <?php echo $t4h10_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 4" data-hora="h10" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t4h10_btn_text;?></a></td>
		<td><a href="#doreserva" class="h10 openDialog btn btn-<?php echo $t5h10_btn_class;?>" <?php echo $t5h10_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 5" data-hora="h10" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t5h10_btn_text;?></a></td>
		<td><a href="#doreserva" class="h10 openDialog btn btn-<?php echo $t6h10_btn_class;?>" <?php echo $t6h10_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 6" data-hora="h10" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t6h10_btn_text;?></a></td>
	</tr>
		<tr>
		<td>10:30-11:00</td>
		<td><a href="#doreserva" class="h105 openDialog btn btn-<?php echo $t1h105_btn_class;?>" <?php echo $t1h105_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 1" data-hora="h105" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t1h105_btn_text;?></a></td>
		<td><a href="#doreserva" class="h105 openDialog btn btn-<?php echo $t2h105_btn_class;?>" <?php echo $t2h105_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 2" data-hora="h105" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t2h105_btn_text;?></a></td>
		<td><a href="#doreserva" class="h105 openDialog btn btn-<?php echo $t3h105_btn_class;?>" <?php echo $t3h105_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 3" data-hora="h105" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t3h105_btn_text;?></a></td>
		<td><a href="#doreserva" class="h105 openDialog btn btn-<?php echo $t4h105_btn_class;?>" <?php echo $t4h105_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 4" data-hora="h105" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t4h105_btn_text;?></a></td>
		<td><a href="#doreserva" class="h105 openDialog btn btn-<?php echo $t5h105_btn_class;?>" <?php echo $t5h105_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 5" data-hora="h105" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t5h105_btn_text;?></a></td>
		<td><a href="#doreserva" class="h105 openDialog btn btn-<?php echo $t6h105_btn_class;?>" <?php echo $t6h105_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 6" data-hora="h105" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t6h105_btn_text;?></a></td>
	</tr>
	<tr>
		<td>11:00-11:30</td>
		<td><a href="#doreserva" class="h11 openDialog btn btn-<?php echo $t1h11_btn_class;?>" <?php echo $t1h11_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 1" data-hora="h11" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t1h11_btn_text;?></a></td>
		<td><a href="#doreserva" class="h11 openDialog btn btn-<?php echo $t2h11_btn_class;?>" <?php echo $t2h11_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 2" data-hora="h11" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t2h11_btn_text;?></a></td>
		<td><a href="#doreserva" class="h11 openDialog btn btn-<?php echo $t3h11_btn_class;?>" <?php echo $t3h11_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 3" data-hora="h11" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t3h11_btn_text;?></a></td>
		<td><a href="#doreserva" class="h11 openDialog btn btn-<?php echo $t4h11_btn_class;?>" <?php echo $t4h11_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 4" data-hora="h11" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t4h11_btn_text;?></a></td>
		<td><a href="#doreserva" class="h11 openDialog btn btn-<?php echo $t5h11_btn_class;?>" <?php echo $t5h11_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 5" data-hora="h11" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t5h11_btn_text;?></a></td>
		<td><a href="#doreserva" class="h11 openDialog btn btn-<?php echo $t6h11_btn_class;?>" <?php echo $t6h11_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 6" data-hora="h11" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t6h11_btn_text;?></a></td>
	</tr>
		<tr>
		<td>11:30-12:00</td>
		<td><a href="#doreserva" class="h115 openDialog btn btn-<?php echo $t1h115_btn_class;?>" <?php echo $t1h115_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 1" data-hora="h115" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t1h115_btn_text;?></a></td>
		<td><a href="#doreserva" class="h115 openDialog btn btn-<?php echo $t2h115_btn_class;?>" <?php echo $t2h115_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 2" data-hora="h115" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t2h115_btn_text;?></a></td>
		<td><a href="#doreserva" class="h115 openDialog btn btn-<?php echo $t3h115_btn_class;?>" <?php echo $t3h115_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 3" data-hora="h115" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t3h115_btn_text;?></a></td>
		<td><a href="#doreserva" class="h115 openDialog btn btn-<?php echo $t4h115_btn_class;?>" <?php echo $t4h115_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 4" data-hora="h115" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t4h115_btn_text;?></a></td>
		<td><a href="#doreserva" class="h115 openDialog btn btn-<?php echo $t5h115_btn_class;?>" <?php echo $t5h115_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 5" data-hora="h115" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t5h115_btn_text;?></a></td>
		<td><a href="#doreserva" class="h115 openDialog btn btn-<?php echo $t6h115_btn_class;?>" <?php echo $t6h115_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 6" data-hora="h115" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t6h115_btn_text;?></a></td>
	</tr>
	<tr>
		<td>12:00-12:30</td>
		<td><a href="#doreserva" class="h12 openDialog btn btn-<?php echo $t1h12_btn_class;?>" <?php echo $t1h12_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 1" data-hora="h12" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t1h12_btn_text;?></a></td>
		<td><a href="#doreserva" class="h12 openDialog btn btn-<?php echo $t2h12_btn_class;?>" <?php echo $t2h12_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 2" data-hora="h12" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t2h12_btn_text;?></a></td>
		<td><a href="#doreserva" class="h12 openDialog btn btn-<?php echo $t3h12_btn_class;?>" <?php echo $t3h12_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 3" data-hora="h12" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t3h12_btn_text;?></a></td>
		<td><a href="#doreserva" class="h12 openDialog btn btn-<?php echo $t4h12_btn_class;?>" <?php echo $t4h12_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 4" data-hora="h12" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t4h12_btn_text;?></a></td>
		<td><a href="#doreserva" class="h12 openDialog btn btn-<?php echo $t5h12_btn_class;?>" <?php echo $t5h12_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 5" data-hora="h12" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t5h12_btn_text;?></a></td>
		<td><a href="#doreserva" class="h12 openDialog btn btn-<?php echo $t6h12_btn_class;?>" <?php echo $t6h12_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 6" data-hora="h12" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t6h12_btn_text;?></a></td>
	</tr>
		<tr>
		<td>12:30-13:00</td>
		<td><a href="#doreserva" class="h125 openDialog btn btn-<?php echo $t1h125_btn_class;?>" <?php echo $t1h125_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 1" data-hora="h125" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t1h125_btn_text;?></a></td>
		<td><a href="#doreserva" class="h125 openDialog btn btn-<?php echo $t2h125_btn_class;?>" <?php echo $t2h125_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 2" data-hora="h125" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t2h125_btn_text;?></a></td>
		<td><a href="#doreserva" class="h125 openDialog btn btn-<?php echo $t3h125_btn_class;?>" <?php echo $t3h125_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 3" data-hora="h125" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t3h125_btn_text;?></a></td>
		<td><a href="#doreserva" class="h125 openDialog btn btn-<?php echo $t4h125_btn_class;?>" <?php echo $t4h125_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 4" data-hora="h125" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t4h125_btn_text;?></a></td>
		<td><a href="#doreserva" class="h125 openDialog btn btn-<?php echo $t5h125_btn_class;?>" <?php echo $t5h125_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 5" data-hora="h125" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t5h125_btn_text;?></a></td>
		<td><a href="#doreserva" class="h125 openDialog btn btn-<?php echo $t6h125_btn_class;?>" <?php echo $t6h125_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 6" data-hora="h125" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t6h125_btn_text;?></a></td>
	</tr>
	<tr>
		<td>13:00-13:30</td>
		<td><a href="#doreserva" class="h13 openDialog btn btn-<?php echo $t1h13_btn_class;?>" <?php echo $t1h13_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 1" data-hora="h13" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t1h13_btn_text;?></a></td>
		<td><a href="#doreserva" class="h13 openDialog btn btn-<?php echo $t2h13_btn_class;?>" <?php echo $t2h13_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 2" data-hora="h13" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t2h13_btn_text;?></a></td>
		<td><a href="#doreserva" class="h13 openDialog btn btn-<?php echo $t3h13_btn_class;?>" <?php echo $t3h13_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 3" data-hora="h13" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t3h13_btn_text;?></a></td>
		<td><a href="#doreserva" class="h13 openDialog btn btn-<?php echo $t4h13_btn_class;?>" <?php echo $t4h13_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 4" data-hora="h13" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t4h13_btn_text;?></a></td>
		<td><a href="#doreserva" class="h13 openDialog btn btn-<?php echo $t5h13_btn_class;?>" <?php echo $t5h13_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 5" data-hora="h13" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t5h13_btn_text;?></a></td>
		<td><a href="#doreserva" class="h13 openDialog btn btn-<?php echo $t6h13_btn_class;?>" <?php echo $t6h13_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 6" data-hora="h13" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t6h13_btn_text;?></a></td>
	</tr>
	<tr>
		<td>13:30-14:00</td>
		<td><a href="#doreserva" class="h135 openDialog btn btn-<?php echo $t1h135_btn_class;?>" <?php echo $t1h135_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 1" data-hora="h135" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t1h135_btn_text;?></a></td>
		<td><a href="#doreserva" class="h135 openDialog btn btn-<?php echo $t2h135_btn_class;?>" <?php echo $t2h135_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 2" data-hora="h135" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t2h135_btn_text;?></a></td>
		<td><a href="#doreserva" class="h135 openDialog btn btn-<?php echo $t3h135_btn_class;?>" <?php echo $t3h135_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 3" data-hora="h135" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t3h135_btn_text;?></a></td>
		<td><a href="#doreserva" class="h135 openDialog btn btn-<?php echo $t4h135_btn_class;?>" <?php echo $t4h135_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 4" data-hora="h135" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t4h135_btn_text;?></a></td>
		<td><a href="#doreserva" class="h135 openDialog btn btn-<?php echo $t5h135_btn_class;?>" <?php echo $t5h135_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 5" data-hora="h135" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t5h135_btn_text;?></a></td>
		<td><a href="#doreserva" class="h135 openDialog btn btn-<?php echo $t6h135_btn_class;?>" <?php echo $t6h135_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 6" data-hora="h135" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t6h135_btn_text;?></a></td>
	</tr>
	<tr>
		<td>14:00-14:30</td>
		<td><a href="#doreserva" class="h14 openDialog btn btn-<?php echo $t1h14_btn_class;?>" <?php echo $t1h14_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 1" data-hora="h14" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t1h14_btn_text;?></a></td>
		<td><a href="#doreserva" class="h14 openDialog btn btn-<?php echo $t2h14_btn_class;?>" <?php echo $t2h14_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 2" data-hora="h14" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t2h14_btn_text;?></a></td>
		<td><a href="#doreserva" class="h14 openDialog btn btn-<?php echo $t3h14_btn_class;?>" <?php echo $t3h14_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 3" data-hora="h14" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t3h14_btn_text;?></a></td>
		<td><a href="#doreserva" class="h14 openDialog btn btn-<?php echo $t4h14_btn_class;?>" <?php echo $t4h14_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 4" data-hora="h14" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t4h14_btn_text;?></a></td>
		<td><a href="#doreserva" class="h14 openDialog btn btn-<?php echo $t5h14_btn_class;?>" <?php echo $t5h14_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 5" data-hora="h14" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t5h14_btn_text;?></a></td>
		<td><a href="#doreserva" class="h14 openDialog btn btn-<?php echo $t6h14_btn_class;?>" <?php echo $t6h14_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 6" data-hora="h14" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t6h14_btn_text;?></a></td>
	</tr>
	<tr>
		<td>14:30-15:00</td>
		<td><a href="#doreserva" class="h145 openDialog btn btn-<?php echo $t1h145_btn_class;?>" <?php echo $t1h145_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 1" data-hora="h145" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t1h145_btn_text;?></a></td>
		<td><a href="#doreserva" class="h145 openDialog btn btn-<?php echo $t2h145_btn_class;?>" <?php echo $t2h145_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 2" data-hora="h145" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t2h145_btn_text;?></a></td>
		<td><a href="#doreserva" class="h145 openDialog btn btn-<?php echo $t3h145_btn_class;?>" <?php echo $t3h145_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 3" data-hora="h145" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t3h145_btn_text;?></a></td>
		<td><a href="#doreserva" class="h145 openDialog btn btn-<?php echo $t4h145_btn_class;?>" <?php echo $t4h145_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 4" data-hora="h145" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t4h145_btn_text;?></a></td>
		<td><a href="#doreserva" class="h145 openDialog btn btn-<?php echo $t5h145_btn_class;?>" <?php echo $t5h145_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 5" data-hora="h145" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t5h145_btn_text;?></a></td>
		<td><a href="#doreserva" class="h145 openDialog btn btn-<?php echo $t6h145_btn_class;?>" <?php echo $t6h145_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 6" data-hora="h145" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t6h145_btn_text;?></a></td>
	</tr>
	<tr>
		<td>15:00-15:30</td>
		<td><a href="#doreserva" class="h15 openDialog btn btn-<?php echo $t1h15_btn_class;?>" <?php echo $t1h15_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 1" data-hora="h15" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t1h15_btn_text;?></a></td>
		<td><a href="#doreserva" class="h15 openDialog btn btn-<?php echo $t2h15_btn_class;?>" <?php echo $t2h15_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 2" data-hora="h15" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t2h15_btn_text;?></a></td>
		<td><a href="#doreserva" class="h15 openDialog btn btn-<?php echo $t3h15_btn_class;?>" <?php echo $t3h15_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 3" data-hora="h15" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t3h15_btn_text;?></a></td>
		<td><a href="#doreserva" class="h15 openDialog btn btn-<?php echo $t4h15_btn_class;?>" <?php echo $t4h15_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 4" data-hora="h15" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t4h15_btn_text;?></a></td>
		<td><a href="#doreserva" class="h15 openDialog btn btn-<?php echo $t5h15_btn_class;?>" <?php echo $t5h15_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 5" data-hora="h15" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t5h15_btn_text;?></a></td>
		<td><a href="#doreserva" class="h15 openDialog btn btn-<?php echo $t6h15_btn_class;?>" <?php echo $t6h15_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 6" data-hora="h15" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t6h15_btn_text;?></a></td>
	</tr>
		<tr>
		<td>15:30-16:00</td>
		<td><a href="#doreserva" class="h155 openDialog btn btn-<?php echo $t1h155_btn_class;?>" <?php echo $t1h155_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 1" data-hora="h155" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t1h155_btn_text;?></a></td>
		<td><a href="#doreserva" class="h155 openDialog btn btn-<?php echo $t2h155_btn_class;?>" <?php echo $t2h155_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 2" data-hora="h155" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t2h155_btn_text;?></a></td>
		<td><a href="#doreserva" class="h155 openDialog btn btn-<?php echo $t3h155_btn_class;?>" <?php echo $t3h155_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 3" data-hora="h155" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t3h155_btn_text;?></a></td>
		<td><a href="#doreserva" class="h155 openDialog btn btn-<?php echo $t4h155_btn_class;?>" <?php echo $t4h155_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 4" data-hora="h155" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t4h155_btn_text;?></a></td>
		<td><a href="#doreserva" class="h155 openDialog btn btn-<?php echo $t5h155_btn_class;?>" <?php echo $t5h155_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 5" data-hora="h155" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t5h155_btn_text;?></a></td>
		<td><a href="#doreserva" class="h155 openDialog btn btn-<?php echo $t6h155_btn_class;?>" <?php echo $t6h155_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 6" data-hora="h155" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t6h155_btn_text;?></a></td>
	</tr>
	<tr>
		<td>16:00-16:30</td>
		<td><a href="#doreserva" class="h16 openDialog btn btn-<?php echo $t1h16_btn_class;?>" <?php echo $t1h16_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 1" data-hora="h16" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t1h16_btn_text;?></a></td>
		<td><a href="#doreserva" class="h16 openDialog btn btn-<?php echo $t2h16_btn_class;?>" <?php echo $t2h16_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 2" data-hora="h16" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t2h16_btn_text;?></a></td>
		<td><a href="#doreserva" class="h16 openDialog btn btn-<?php echo $t3h16_btn_class;?>" <?php echo $t3h16_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 3" data-hora="h16" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t3h16_btn_text;?></a></td>
		<td><a href="#doreserva" class="h16 openDialog btn btn-<?php echo $t4h16_btn_class;?>" <?php echo $t4h16_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 4" data-hora="h16" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t4h16_btn_text;?></a></td>
		<td><a href="#doreserva" class="h16 openDialog btn btn-<?php echo $t5h16_btn_class;?>" <?php echo $t5h16_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 5" data-hora="h16" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t5h16_btn_text;?></a></td>
		<td><a href="#doreserva" class="h16 openDialog btn btn-<?php echo $t6h16_btn_class;?>" <?php echo $t6h16_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 6" data-hora="h16" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t6h16_btn_text;?></a></td>
	</tr>
	<tr>
		<td>16:30-17:00</td>
		<td><a href="#doreserva" class="h165 openDialog btn btn-<?php echo $t1h165_btn_class;?>" <?php echo $t1h165_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 1" data-hora="h165" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t1h165_btn_text;?></a></td>
		<td><a href="#doreserva" class="h165 openDialog btn btn-<?php echo $t2h165_btn_class;?>" <?php echo $t2h165_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 2" data-hora="h165" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t2h165_btn_text;?></a></td>
		<td><a href="#doreserva" class="h165 openDialog btn btn-<?php echo $t3h165_btn_class;?>" <?php echo $t3h165_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 3" data-hora="h165" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t3h165_btn_text;?></a></td>
		<td><a href="#doreserva" class="h165 openDialog btn btn-<?php echo $t4h165_btn_class;?>" <?php echo $t4h165_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 4" data-hora="h165" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t4h165_btn_text;?></a></td>
		<td><a href="#doreserva" class="h165 openDialog btn btn-<?php echo $t5h165_btn_class;?>" <?php echo $t5h165_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 5" data-hora="h165" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t5h165_btn_text;?></a></td>
		<td><a href="#doreserva" class="h165 openDialog btn btn-<?php echo $t6h165_btn_class;?>" <?php echo $t6h165_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 6" data-hora="h165" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t6h165_btn_text;?></a></td>
	</tr>
	<tr>
		<td>17:00-17:30</td>
		<td><a href="#doreserva" class="h17 openDialog btn btn-<?php echo $t1h17_btn_class;?>" <?php echo $t1h17_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 1" data-hora="h17" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t1h17_btn_text;?></a></td>
		<td><a href="#doreserva" class="h17 openDialog btn btn-<?php echo $t2h17_btn_class;?>" <?php echo $t2h17_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 2" data-hora="h17" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t2h17_btn_text;?></a></td>
		<td><a href="#doreserva" class="h17 openDialog btn btn-<?php echo $t3h17_btn_class;?>" <?php echo $t3h17_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 3" data-hora="h17" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t3h17_btn_text;?></a></td>
		<td><a href="#doreserva" class="h17 openDialog btn btn-<?php echo $t4h17_btn_class;?>" <?php echo $t4h17_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 4" data-hora="h17" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t4h17_btn_text;?></a></td>
		<td><a href="#doreserva" class="h17 openDialog btn btn-<?php echo $t5h17_btn_class;?>" <?php echo $t5h17_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 5" data-hora="h17" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t5h17_btn_text;?></a></td>
		<td><a href="#doreserva" class="h17 openDialog btn btn-<?php echo $t6h17_btn_class;?>" <?php echo $t6h17_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 6" data-hora="h17" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t6h17_btn_text;?></a></td>
	</tr>
	<tr id="1730"></tr>
	<tr>
		<td>17:30-18:00</td>
		<td><a href="#doreserva" class="h175 openDialog btn btn-<?php echo $t1h175_btn_class;?>" <?php echo $t1h175_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 1" data-hora="h175" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t1h175_btn_text;?></a></td>
		<td><a href="#doreserva" class="h175 openDialog btn btn-<?php echo $t2h175_btn_class;?>" <?php echo $t2h175_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 2" data-hora="h175" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t2h175_btn_text;?></a></td>
		<td><a href="#doreserva" class="h175 openDialog btn btn-<?php echo $t3h175_btn_class;?>" <?php echo $t3h175_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 3" data-hora="h175" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t3h175_btn_text;?></a></td>
		<td><a href="#doreserva" class="h175 openDialog btn btn-<?php echo $t4h175_btn_class;?>" <?php echo $t4h175_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 4" data-hora="h175" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t4h175_btn_text;?></a></td>
		<td><a href="#doreserva" class="h175 openDialog btn btn-<?php echo $t5h175_btn_class;?>" <?php echo $t5h175_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 5" data-hora="h175" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t5h175_btn_text;?></a></td>
		<td><a href="#doreserva" class="h175 openDialog btn btn-<?php echo $t6h175_btn_class;?>" <?php echo $t6h175_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 6" data-hora="h175" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t6h175_btn_text;?></a></td>
	</tr>
	<tr id="1800"></tr>
	<tr>
		<td>18:00-18:30</td>
		<td><a href="#doreserva" class="h18 openDialog btn btn-<?php echo $t1h18_btn_class;?>" <?php echo $t1h18_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 1" data-hora="h18" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t1h18_btn_text;?></a></td>
		<td><a href="#doreserva" class="h18 openDialog btn btn-<?php echo $t2h18_btn_class;?>" <?php echo $t2h18_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 2" data-hora="h18" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t2h18_btn_text;?></a></td>
		<td><a href="#doreserva" class="h18 openDialog btn btn-<?php echo $t3h18_btn_class;?>" <?php echo $t3h18_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 3" data-hora="h18" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t3h18_btn_text;?></a></td>
		<td><a href="#doreserva" class="h18 openDialog btn btn-<?php echo $t4h18_btn_class;?>" <?php echo $t4h18_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 4" data-hora="h18" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t4h18_btn_text;?></a></td>
		<td><a href="#doreserva" class="h18 openDialog btn btn-<?php echo $t5h18_btn_class;?>" <?php echo $t5h18_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 5" data-hora="h18" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t5h18_btn_text;?></a></td>
		<td><a href="#doreserva" class="h18 openDialog btn btn-<?php echo $t6h18_btn_class;?>" <?php echo $t6h18_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 6" data-hora="h18" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t6h18_btn_text;?></a></td>
	</tr>
	<tr id="1830"></tr>
	<tr>
		<td>18:30-19:00</td>
		<td><a href="#doreserva" class="h185 openDialog btn btn-<?php echo $t1h185_btn_class;?>" <?php echo $t1h185_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 1" data-hora="h185" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t1h185_btn_text;?></a></td>
		<td><a href="#doreserva" class="h185 openDialog btn btn-<?php echo $t2h185_btn_class;?>" <?php echo $t2h185_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 2" data-hora="h185" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t2h185_btn_text;?></a></td>
		<td><a href="#doreserva" class="h185 openDialog btn btn-<?php echo $t3h185_btn_class;?>" <?php echo $t3h185_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 3" data-hora="h185" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t3h185_btn_text;?></a></td>
		<td><a href="#doreserva" class="h185 openDialog btn btn-<?php echo $t4h185_btn_class;?>" <?php echo $t4h185_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 4" data-hora="h185" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t4h185_btn_text;?></a></td>
		<td><a href="#doreserva" class="h185 openDialog btn btn-<?php echo $t5h185_btn_class;?>" <?php echo $t5h185_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 5" data-hora="h185" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t5h185_btn_text;?></a></td>
		<td><a href="#doreserva" class="h185 openDialog btn btn-<?php echo $t6h185_btn_class;?>" <?php echo $t6h185_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 6" data-hora="h185" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t6h185_btn_text;?></a></td>
	</tr>	
	<tr id="1900"></tr>
	<tr>
		<td>19:00-19:30</td>
		<td><a href="#doreserva" class="h19 openDialog btn btn-<?php echo $t1h19_btn_class;?>" <?php echo $t1h19_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 1" data-hora="h19" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t1h19_btn_text;?></a></td>
		<td><a href="#doreserva" class="h19 openDialog btn btn-<?php echo $t2h19_btn_class;?>" <?php echo $t2h19_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 2" data-hora="h19" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t2h19_btn_text;?></a></td>
		<td><a href="#doreserva" class="h19 openDialog btn btn-<?php echo $t3h19_btn_class;?>" <?php echo $t3h19_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 3" data-hora="h19" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t3h19_btn_text;?></a></td>
		<td><a href="#doreserva" class="h19 openDialog btn btn-<?php echo $t4h19_btn_class;?>" <?php echo $t4h19_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 4" data-hora="h19" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t4h19_btn_text;?></a></td>
		<td><a href="#doreserva" class="h19 openDialog btn btn-<?php echo $t5h19_btn_class;?>" <?php echo $t5h19_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 5" data-hora="h19" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t5h19_btn_text;?></a></td>
		<td><a href="#doreserva" class="h19 openDialog btn btn-<?php echo $t6h19_btn_class;?>" <?php echo $t6h19_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 6" data-hora="h19" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t6h19_btn_text;?></a></td>
	</tr>	
	<tr id="1930"></tr>
	<tr>
		<td>19:30-20:00</td>
		<td><a href="#doreserva" class="h195 openDialog btn btn-<?php echo $t1h195_btn_class;?>" <?php echo $t1h195_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 1" data-hora="h195" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t1h195_btn_text;?></a></td>
		<td><a href="#doreserva" class="h195 openDialog btn btn-<?php echo $t2h195_btn_class;?>" <?php echo $t2h195_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 2" data-hora="h195" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t2h195_btn_text;?></a></td>
		<td><a href="#doreserva" class="h195 openDialog btn btn-<?php echo $t3h195_btn_class;?>" <?php echo $t3h195_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 3" data-hora="h195" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t3h195_btn_text;?></a></td>
		<td><a href="#doreserva" class="h195 openDialog btn btn-<?php echo $t4h195_btn_class;?>" <?php echo $t4h195_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 4" data-hora="h195" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t4h195_btn_text;?></a></td>
		<td><a href="#doreserva" class="h195 openDialog btn btn-<?php echo $t5h195_btn_class;?>" <?php echo $t5h195_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 5" data-hora="h195" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t5h195_btn_text;?></a></td>
		<td><a href="#doreserva" class="h195 openDialog btn btn-<?php echo $t6h195_btn_class;?>" <?php echo $t6h195_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 6" data-hora="h195" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t6h195_btn_text;?></a></td>
	</tr>	
	<tr id="2000"></tr>
	<tr>
		<td>20:00-20:30</td>
		<td><a href="#doreserva" class="h20 openDialog btn btn-<?php echo $t1h20_btn_class;?>" <?php echo $t1h20_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 1" data-hora="h20" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t1h20_btn_text;?></a></td>
		<td><a href="#doreserva" class="h20 openDialog btn btn-<?php echo $t2h20_btn_class;?>" <?php echo $t2h20_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 2" data-hora="h20" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t2h20_btn_text;?></a></td>
		<td><a href="#doreserva" class="h20 openDialog btn btn-<?php echo $t3h20_btn_class;?>" <?php echo $t3h20_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 3" data-hora="h20" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t3h20_btn_text;?></a></td>
		<td><a href="#doreserva" class="h20 openDialog btn btn-<?php echo $t4h20_btn_class;?>" <?php echo $t4h20_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 4" data-hora="h20" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t4h20_btn_text;?></a></td>
		<td><a href="#doreserva" class="h20 openDialog btn btn-<?php echo $t5h20_btn_class;?>" <?php echo $t5h20_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 5" data-hora="h20" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t5h20_btn_text;?></a></td>
		<td><a href="#doreserva" class="h20 openDialog btn btn-<?php echo $t6h20_btn_class;?>" <?php echo $t6h20_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 6" data-hora="h20" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t6h20_btn_text;?></a></td>
	</tr>
	<tr id="2030"></tr>
	<tr>
		<td>20:30-21:00</td>
		<td><a href="#doreserva" class="h205 openDialog btn btn-<?php echo $t1h205_btn_class;?>" <?php echo $t1h205_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 1" data-hora="h205" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t1h205_btn_text;?></a></td>
		<td><a href="#doreserva" class="h205 openDialog btn btn-<?php echo $t2h205_btn_class;?>" <?php echo $t2h205_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 2" data-hora="h205" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t2h205_btn_text;?></a></td>
		<td><a href="#doreserva" class="h205 openDialog btn btn-<?php echo $t3h205_btn_class;?>" <?php echo $t3h205_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 3" data-hora="h205" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t3h205_btn_text;?></a></td>
		<td><a href="#doreserva" class="h205 openDialog btn btn-<?php echo $t4h205_btn_class;?>" <?php echo $t4h205_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 4" data-hora="h205" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t4h205_btn_text;?></a></td>
		<td><a href="#doreserva" class="h205 openDialog btn btn-<?php echo $t5h205_btn_class;?>" <?php echo $t5h205_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 5" data-hora="h205" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t5h205_btn_text;?></a></td>
		<td><a href="#doreserva" class="h205 openDialog btn btn-<?php echo $t6h205_btn_class;?>" <?php echo $t6h205_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 6" data-hora="h205" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t6h205_btn_text;?></a></td>
	</tr>
	<tr id="2100"></tr>
	<tr>
		<td>21:00-21:30</td>
		<td><a href="#doreserva" class="h21 openDialog btn btn-<?php echo $t1h21_btn_class;?>" <?php echo $t1h21_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 1" data-hora="h21" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t1h21_btn_text;?></a></td>
		<td><a href="#doreserva" class="h21 openDialog btn btn-<?php echo $t2h21_btn_class;?>" <?php echo $t2h21_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 2" data-hora="h21" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t2h21_btn_text;?></a></td>
		<td><a href="#doreserva" class="h21 openDialog btn btn-<?php echo $t3h21_btn_class;?>" <?php echo $t3h21_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 3" data-hora="h21" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t3h21_btn_text;?></a></td>
		<td><a href="#doreserva" class="h21 openDialog btn btn-<?php echo $t4h21_btn_class;?>" <?php echo $t4h21_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 4" data-hora="h21" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t4h21_btn_text;?></a></td>
		<td><a href="#doreserva" class="h21 openDialog btn btn-<?php echo $t5h21_btn_class;?>" <?php echo $t5h21_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 5" data-hora="h21" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t5h21_btn_text;?></a></td>
		<td><a href="#doreserva" class="h21 openDialog btn btn-<?php echo $t6h21_btn_class;?>" <?php echo $t6h21_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 6" data-hora="h21" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t6h21_btn_text;?></a></td>
	</tr>
	<tr id="2130"></tr>
	<tr>
		<td>21:30-22:00</td>
		<td><a href="#doreserva" class="h215 openDialog btn btn-<?php echo $t1h215_btn_class;?>" <?php echo $t1h215_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 1" data-hora="h215" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t1h215_btn_text;?></a></td>
		<td><a href="#doreserva" class="h215 openDialog btn btn-<?php echo $t2h215_btn_class;?>" <?php echo $t2h215_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 2" data-hora="h215" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t2h215_btn_text;?></a></td>
		<td><a href="#doreserva" class="h215 openDialog btn btn-<?php echo $t3h215_btn_class;?>" <?php echo $t3h215_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 3" data-hora="h215" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t3h215_btn_text;?></a></td>
		<td><a href="#doreserva" class="h215 openDialog btn btn-<?php echo $t4h215_btn_class;?>" <?php echo $t4h215_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 4" data-hora="h215" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t4h215_btn_text;?></a></td>
		<td><a href="#doreserva" class="h215 openDialog btn btn-<?php echo $t5h215_btn_class;?>" <?php echo $t5h215_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 5" data-hora="h215" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t5h215_btn_text;?></a></td>
		<td><a href="#doreserva" class="h215 openDialog btn btn-<?php echo $t6h215_btn_class;?>" <?php echo $t6h215_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 6" data-hora="h215" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t6h215_btn_text;?></a></td>
	</tr>
	<tr id="2200"></tr>
	<tr>
		<td>22:00-22:30</td>
		<td><a href="#doreserva" class="h22 openDialog btn btn-<?php echo $t1h22_btn_class;?>" <?php echo $t1h22_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 1" data-hora="h22" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t1h22_btn_text;?></a></td>
		<td><a href="#doreserva" class="h22 openDialog btn btn-<?php echo $t2h22_btn_class;?>" <?php echo $t2h22_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 2" data-hora="h22" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t2h22_btn_text;?></a></td>
		<td><a href="#doreserva" class="h22 openDialog btn btn-<?php echo $t3h22_btn_class;?>" <?php echo $t3h22_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 3" data-hora="h22" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t3h22_btn_text;?></a></td>
		<td><a href="#doreserva" class="h22 openDialog btn btn-<?php echo $t4h22_btn_class;?>" <?php echo $t4h22_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 4" data-hora="h22" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t4h22_btn_text;?></a></td>
		<td><a href="#doreserva" class="h22 openDialog btn btn-<?php echo $t5h22_btn_class;?>" <?php echo $t5h22_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 5" data-hora="h22" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t5h22_btn_text;?></a></td>
		<td><a href="#doreserva" class="h22 openDialog btn btn-<?php echo $t6h22_btn_class;?>" <?php echo $t6h22_estado;?> data-toggle="modal"   data-dia="<?php echo $dia_consultado;?>" data-mes="<?php echo $new_fecha;?>" data-fecha="<?php echo $_POST['fecha'];?>" data-pista="Tenis 6" data-hora="h22" data-usuario="<?php echo $id_usuario_reserva;?>"><?php echo $t6h22_btn_text;?></a></td>
	</tr>
	</table>			

<?php
	//buscamos el horario cuando comienza la luz segun el mes

$ghj = explode("/",$_POST['fecha']);
$mesdereserva = $ghj['1'];

$query = "SELECT hora FROM meses_iluminacion WHERE mes = '$mesdereserva' AND id_club = '$id_club'";
$pp = new conexionBD();
$pp -> doQuery("$query");
	while ( $pp -> setWhile()){
		$hora_inicio_luz = $pp -> getDataSQL("hora");
	}
$pp -> setClose();

include "includes/indica_inicio_iluminacion_tenis.php";

?>


<!-- Modal -->
<div class="modal fade" id="doreserva" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Confirmaci&oacute;n de Reserva</h4>
      </div>
      <div class="modal-body">
      	<div class="row">
	      	<div class="col-md-7">
	      		<form method="post" name="form1">
	      		<input type="hidden" name="pista_selected" value="pista_selected" >
	      		<input type="hidden" name="doreserva" value="doreserva">
	      		<input type="hidden" id="hora" value="" name="hora">
	      		<input type="hidden" id="fecha" value="" name="fecha">
	      		<input type="hidden" id="mes" value="" name="mes">
	      		<input type="hidden" value="tenis" name="tipo_pista">
	      		<input type="hidden" value="fecha_selected" name="fecha_selected">
	      		<input type="hidden" id="ppista" name="pista">

		      	<div class="alert alert-info"><strong>Reserva <span id="titdia"></span>, <span id="titfecha"></span></strong><hr>Pista <span id="titpista"></span>. <br><strong><span id="tithora"></span></strong></div>
		        <div class="alert alert-success">Para confirmar que deseas reservar esta pista, debes hacer clic en <strong>confirmar reserva.</strong></div>
	      	</div>
	      	<div class="col-md-5">
	      		<div class="panel panel-primary">
	      			<div class="panel-heading">
	      				<h3 class="panel-title">Pista <span id="pista"></span></h3>
	      			</div>	
	      			<div class="panel-body">
	      				<img src="" id="image" class="img-thumbnail">
	      			</div>
	      		</div>
	      	</div>
      	</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button id="confres" type="button" class="btn btn-danger" onclick="document.form1.submit();">Confirmar Reserva</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!-- control de horas para descativar reservas en horas actuales y/o pasadas-->
<?php include "includes/desactiva_reservas.php"; ?>


<script type="text/javascript">


	$(document).on("click", ".openDialog", function () {
		 var usuario = $(this).data('usuario');
		 var pista = $(this).data('pista');
		 var hora  = $(this).data('hora');
		 var dia   = $(this).data('dia');	
		 var mes   = $(this).data('mes');			 
		 var fecha = $(this).data('fecha');		

		 if (usuario<1) {$("#confres").attr('disabled','disabled');} 

		 $("#doreserva #hora").val(hora);
		 $("#doreserva #pista").html(pista);
		 $("#doreserva #ppista").val(pista);
		 $("#doreserva #titfecha").html(fecha);
		 $("#doreserva #titdia").html(dia);		 
		 $("#doreserva #fecha").val(fecha);
		 $("#doreserva #mes").val(mes);


		 if (pista=="Tenis 1") { $("#doreserva #titpista, #pista").html("Tenis 1 (Dura)");}
		 if (pista=="Tenis 2") { $("#doreserva #titpista, #pista").html("Tenis 2 (Dura)");}
		 if (pista=="Tenis 3") { $("#doreserva #titpista, #pista").html("Tenis 3 (Dura)");}		
		 if (pista=="Tenis 4") { $("#doreserva #titpista, #pista").html("Tenis 4 (C&eacute;sped)");	}
		 if (pista=="Tenis 5") { $("#doreserva #titpista, #pista").html("Tenis 5 (C&eacute;sped)");	}
		 if (pista=="Tenis 6") { $("#doreserva #titpista, #pista").html("Tenis 6 (C&eacute;sped)");	}	

		if (hora=="h9") { $("#doreserva #tithora").html("De 09:00 a 09:30");}
		if (hora=="h10") { $("#doreserva #tithora").html("De 10:00 a 10:30");}
		if (hora=="h11") { $("#doreserva #tithora").html("De 11:00 a 11:30");}
		if (hora=="h12") { $("#doreserva #tithora").html("De 12:00 a 12:30");}
		if (hora=="h13") { $("#doreserva #tithora").html("De 13:00 a 13:30");}
		if (hora=="h14") { $("#doreserva #tithora").html("De 14:00 a 14:30");}
		if (hora=="h15") { $("#doreserva #tithora").html("De 15:00 a 15:30");}
		if (hora=="h16") { $("#doreserva #tithora").html("De 16:00 a 16:30");}
		if (hora=="h17") { $("#doreserva #tithora").html("De 17:00 a 17:30");}
		if (hora=="h18") { $("#doreserva #tithora").html("De 18:00 a 18:30");}
		if (hora=="h19") { $("#doreserva #tithora").html("De 19:00 a 19:30");}
		if (hora=="h20") { $("#doreserva #tithora").html("De 20:00 a 20:30");}
		if (hora=="h21") { $("#doreserva #tithora").html("De 21:00 a 21:30");}
		if (hora=="h22") { $("#doreserva #tithora").html("De 22:00 a 22:30");}

		if (hora=="h95") { $("#doreserva #tithora").html("De 09:30 a 10:00");}
		if (hora=="h105") { $("#doreserva #tithora").html("De 10:30 a 11:00");}
		if (hora=="h115") { $("#doreserva #tithora").html("De 11:30 a 12:00");}
		if (hora=="h125") { $("#doreserva #tithora").html("De 12:30 a 13:00");}
		if (hora=="h135") { $("#doreserva #tithora").html("De 13:30 a 14:00");}
		if (hora=="h145") { $("#doreserva #tithora").html("De 14:30 a 15:00");}
		if (hora=="h155") { $("#doreserva #tithora").html("De 15:30 a 16:00");}
		if (hora=="h165") { $("#doreserva #tithora").html("De 16:30 a 17:00");}
		if (hora=="h175") { $("#doreserva #tithora").html("De 17:30 a 18:00");}
		if (hora=="h185") { $("#doreserva #tithora").html("De 18:30 a 19:00");}
		if (hora=="h195") { $("#doreserva #tithora").html("De 19:30 a 20:00");}
		if (hora=="h205") { $("#doreserva #tithora").html("De 20:30 a 21:00");}
		if (hora=="h215") { $("#doreserva #tithora").html("De 21:30 a 22:00");}
		});
</script>