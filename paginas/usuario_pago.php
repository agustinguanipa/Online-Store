<?php
  session_start();

  if (!isset($_SESSION['loggedInCliente'])) {
    header('Location: usuario_inicio.php');
    exit();
  }
?>

<?php require_once('usuario_header.php'); ?>

<head>
	<title>Pago | SIGMAEMCA Online Store</title>

  <script type="text/javascript">
   $(document).ready(function() {
    $('input[type="file"]').on("change", function() {
      let filenames = [];
      let files = document.getElementById("customFile").files;
      if (files.length > 1) {
        filenames.push("Total Files (" + files.length + ")");
      } else {
        for (let i in files) {
          if (files.hasOwnProperty(i)) {
            filenames.push(files[i].name);
          }
        }
      }
      $(this)
        .next(".custom-file-label")
        .html(filenames.join(","));
    });
  });
  </script>
</head>

<body>
	<div class="jumbotron text-center" style="background-color: #FBFCFF;">
    <div class="container">
      <h1>Pago</h1>
      <hr class="my-4">
      <div class="row">
        <div class="col-sm-8 form-group">
          <div class="card">
            <div class="card-header">
              <b>Registrar Pago</b>
            </div>
            <div class="card-body">
              <div class="form-group text-center">
                <div class="formulario-pago">
                  <form role="form" id="usuario_pago" class="justify-content-center" align="center" action="#" method="post">
                    <div class="form-row">
                      <div class="col form-group">
                        <label class="form-label" for="fecha_pago">Fecha: </label>
                        <input type="date" class="form-control" name="fecha_pago" autocomplete="" id="fecha_pago">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="col form-group">
                        <label class="form-label" for="monto_pago">Monto:</label>
                        <input type="text" class="form-control" name="mont_pago" autocomplete="off" id="monto_pago" placeholder="Bs. 000.000.000,00">
                      </div>
                    </div>
                    <div class="form-row">
                       <div class="col form-group">
                        <label class="form-label" for="tipos_pago">Tipo: </label>
                        <select class="form-control" id="tipos_pago" name="tipos_pago">
                          <option value="MASCULINO">TRANSFERENCIA</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="col form-group">
                        <label class="form-label" for="refer_pago">Referencia: </label>
                        <input type="text" class="form-control" name="refer_pago" autocomplete="off" id="refer_pago" placeholder="000000000000" maxlength="15">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="col form-group">
                        <label class="form-label" for="image_pago">Imagen: </label>
                        <div class="form-group">
                          <div class="custom-file">
                            <input type="file" name="files[]" multiple class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Seleccionar Archivo...</label>
                          </div>
                        </div>
                        <div class="form-group">
                          <button type="submit" name="upload" value="upload" id="upload" class="btn btn-block btn-primary"><i class="fa fa-fw fa-upload"></i> Subir</button>
                        </div>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="col form-group">
                        <button type="submit" class="btn btn-success btn-block" name="add"><i class="fa fa-save"></i> Registrar Pago</button>
                        <button type="reset" class="btn btn-secondary btn-block" data-dismiss="modal"><i class="fa fa-undo"></i> Limpiar</button>
                      </div>
                    </div>
                  </form>
                </div> 
              </div>
            </div>
            <div class="card-footer">
              <a href="usuario_direccion.php" class="btn btn-success float-right"><i class="fa fa-arrow-circle-right"></i> Siguiente</a>
              <a href="usuario_cart.php" class="btn btn-primary float-left"><i class="fa fa-arrow-circle-left"></i> Volver</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4 form-group">
        	<div class="card">
            <div class="card-header bg-primary titulo-cuenta">
              Cuenta Banco Sofitasa
            </div>
            <div class="card-body">
              <p align="left">
                <b>Número de Cuenta:</b> 01370020650008974381</br>
                <b>Nombre:</b> Carlos Agustin Guanipa Alvarez</br>
                <b>Cédula:</b> 26607655</br>
                <b>Correo:</b> agustin_guanipa@hotmail.com
              </p>
            </div>
          </div>
          <br>
          <div class="card">
            <div class="card-header bg-danger titulo-cuenta">
              Cuenta Banco Bicentenario
            </div>
            <div class="card-body">
              <p align="left">
                <b>Número de Cuenta:</b> 01750039200076329032</br>
                <b>Nombre:</b> Carlos Agustin Guanipa Alvarez</br>
                <b>Cédula:</b> 26607655</br>
                <b>Correo:</b> agustin_guanipa@hotmail.com
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

<?php require_once('usuario_footer.php');  ?>

