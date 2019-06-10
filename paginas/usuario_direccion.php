<?php
  session_start();

  if (!isset($_SESSION['loggedin'])) {
    header('Location: usuario_inicio.php');
    exit();
  }
?>

<?php require_once('usuario_header.php'); ?>

<head>
	<title>Direcciones | SIGMAEMCA Online Store</title>
</head>

<body>
	<div class="jumbotron text-center" style="background-color: #FBFCFF;">
    <div class="container">
      <h1>Direcciones</h1>
      <hr class="my-4">
      <div class="row">
        <div class="col-sm-8 form-group">
          <div class="card">
             <div class="card-header">
              <b>Añadir Dirección</b>
            </div>
            <div class="card-body">
              <div class="form-group text-center">
                <div class="formulario-pago">
                  <form role="form" id="usuario_registro" class="justify-content-center" align="center" action="guardar_cliente.php" method="post">
                    <div class="form-row">
                      <div class="col form-group">
                        <label class="form-label" for="nomb_pais">País: </label>
                        <select class="form-control" id="nomb_pais" name="nomb_pais">
                          <option value="VENEZUELA">VENEZUELA</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="col form-group">
                        <label class="form-label" for="nomb_esta">Estado: </label>
                        <select class="form-control" id="nomb_esta" name="nomb_esta">
                          <option value="TACHIRA">TACHIRA</option>
                        </select>
                      </div>
                      <div class="col form-group">
                        <label class="form-label" for="nomb_muni">Municipio: </label>
                        <select class="form-control" id="nomb_muni" name="nomb_muni">
                          <option value="SAN CRISTOBAL">SAN CRISTOBAL</option>
                          <option value="CARDENAS">CARDENAS</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="col form-group">
                        <label class="form-label" for="calle_dire">Calle: </label>
                        <input type="text" class="form-control" name="calle_dire" autocomplete="off" id="calle_dire" placeholder="Calle, Carrera, Casa, Edificio" maxlength="20" onkeyup="this.value = this.value.toUpperCase();">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="col form-group">
                        <label class="form-label" for="aveni_dire">Avenida: </label>
                        <input type="text" class="form-control" name="aveni_dire" autocomplete="off" id="aveni_dire" placeholder="" maxlength="20" onkeyup="this.value = this.value.toUpperCase();">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="col form-group">
                        <label class="form-label" for="secto_dire">Sector: </label>
                        <input type="text" class="form-control" name="secto_dire" autocomplete="off" id="secto_dire" placeholder="" maxlength="20" onkeyup="this.value = this.value.toUpperCase();">
                      </div>
                      <div class="col form-group">
                        <label class="form-label" for="codpo_dire">Código Postal: </label>
                        <input type="text" class="form-control" name="codpo_dire" autocomplete="off" id="codpo_dire" placeholder="" maxlength="20" onkeyup="this.value = this.value.toUpperCase();">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="col form-group">
                        <button type="submit" class="btn btn-primary btn-block" name="add"><i class="fa fa-save"></i> Añadir</button>
                        <button type="reset" class="btn btn-secondary btn-block" data-dismiss="modal"><i class="fa fa-undo"></i> Limpiar</button>
                      </div>
                    </div>
                  </form>
                </div> 
              </div>
            </div>
            <div class="card-footer">
              <a href="usuario_checkout.php" class="btn btn-success float-right"><i class="fa fa-arrow-circle-right"></i> Siguiente</a>
              <a href="usuario_pago.php" class="btn btn-primary float-left"><i class="fa fa-arrow-circle-left"></i> Volver</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4 form-group">
          <div class="card">
            <div class="card-header bg-primary titulo-cuenta">
              Seleccionar Dirección de Envío
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
        </div>
      </div>
    </div>
  </div>
</body>

<?php require_once('usuario_footer.php');  ?>

