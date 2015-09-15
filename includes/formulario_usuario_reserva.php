      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Datos del usuario para la reserva</h3>
            </div>
            <div class="panel-body" method="post">
              <form class="form-inline" method="post">
              <input type="hidden" name="alta_usuario" value="alta_usuario">
              <input type="hidden" name="deporte" value="<?php echo $_POST['deporte'];?>">
              <input type="hidden" name="fecha" value="<?php echo $_POST['fecha'];?>">
                <div class="form-group">
                  <label class="sr-only" for="exampleInputEmail3">Email address</label>
                  <input type="email" class="form-control"  placeholder="Email">
                </div>
                <div class="form-group">
                  <label class="sr-only" for="exampleInputPassword3">Nombre</label>
                  <input type="text" class="form-control"  placeholder="Nombre" name="nombre">
                </div>
                <div class="form-group">
                  <label class="sr-only" for="exampleInputPassword3">Apellido</label>
                  <input type="text" class="form-control"  placeholder="1&deg; Apellido" name="apellido_p">
                </div>
                <div class="form-group">
                  <label class="sr-only" for="exampleInputPassword3">Movil</label>
                  <input type="text" class="form-control" placeholder="Movil" name="movil">
                </div>
                <div class="form-group">
                  <label class="sr-only" for="exampleInputPassword3">Empadronado</label>
                  <select class="form-control" name="empadronado">
                    <option value="">Seleccione</option>
                    <option value="SI">Pobla de Vallbona</option>
                    <option value="1">Benaguasil</option>
                    <option value="2">La Eliana</option>
                    <option value="3">Lliria</option>
                    <option value="4">San Antonio de Benageber</option>
                    <option value="5">Valencia</option>
                    <option value="6">Otro</option>
                  </select>
                </div>
                <button type="submit" class="btn btn-success">Continuar</button>
              </form>
            </div>
          </div>
        </div>
      </div> 