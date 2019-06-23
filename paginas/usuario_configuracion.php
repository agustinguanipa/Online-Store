<?php
  session_start();

  if (!isset($_SESSION['loggedInCliente'])) {
    header('Location: usuario_inicio.php');
    exit();
  }
?>

<?php require_once('usuario_header.php'); ?>



<head>
	<title>Configuración | SIGMAEMCA Online Store</title>
</head>

<body>
	<div class="jumbotron text-center" style="background-color: #FBFCFF;">
    <div class="container">
      <h1>Configuración</h1>
      <hr class="my-4">
      <div class="row justify-content-center">
        <div class="col-sm-6 form-group">
          <div class="card">
           <div class="card-header">
            <b>Editar Datos</b>
           </div>
           <div class="card-body">
            <div class="form-group text-center">
              <div class="formulario-registro-inicio">
                <form role="form" id="edit_cliente" name="edit_cliente" class="justify-content-center" align="center" action="editar_cliente.php" method="post">
                  <div class="form-row">
                    <div class="col form-group">
                      <label class="form-label" for="nomb1_clie">Primer Nombre: </label>
                      <input type="text" class="form-control" name="nomb1_clie" autocomplete="off" id="nomb1_clie" placeholder="Carlos" maxlength="20" onkeyup="this.value = this.value.toUpperCase();" value="<?php echo $cliente['nomb1_clie'];?>">
                    </div>
                    <div class="col form-group">
                      <label class="form-label" for="nomb2_clie">Segundo Nombre: </label>
                      <input type="text" class="form-control" name="nomb2_clie" autocomplete="off" id="nomb2_clie" placeholder="Agustin" maxlength="20" onkeyup="this.value = this.value.toUpperCase();">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col form-group">
                      <label class="form-label" for="apel1_clie">Primer Apellido</label>
                      <input type="text" class="form-control" name="apel1_clie" autocomplete="off" id="apel1_clie" placeholder="Guanipa" maxlength="20" onkeyup="this.value = this.value.toUpperCase();">
                    </div>
                    <div class="col form-group">
                      <label class="form-label" for="apel2_clie">Segundo Apellido</label>
                      <input type="text" class="form-control" name="apel2_clie" autocomplete="off" id="apel2_clie" placeholder="Alvarez" maxlength="20" onkeyup="this.value = this.value.toUpperCase();">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col form-group">
                      <label class="form-label" for="gener_clie">Genero: </label>
                      <select class="form-control" id="gener_clie" name="gener_clie">
                        <option value="MASCULINO">MASCULINO</option>
                        <option value="FEMENINO">FEMENINO</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col form-group">
                      <label class="form-label" for="telef_clie">Telefono: </label>
                      <input type="text" class="form-control telef-mask" name="telef_clie" autocomplete="off" id="telef_clie" placeholder="(0000) 000 0000" maxlength="15">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col form-group">
                      <label class="form-label" for="email_clie">E-Mail: </label>
                      <input type="email" class="form-control" name="email_clie" autocomplete="off" id="email_clie" placeholder="correo@mail.com" maxlength="100" onkeyup="this.value = this.value.toUpperCase();">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col form-group">
                      <button type="submit" class="btn btn-primary btn-block" name="add"><i class="fa fa-save"></i> Guardar Cambios</button>
                      <button type="reset" class="btn btn-secondary btn-block" data-dismiss="modal"><i class="fa fa-undo"></i> Limpiar</button>
                    </div>
                  </div>
                </form>
              </div> 
            </div>
           </div>
         </div>
       </div>
     </div>
    </div>
  </div>
</body>

<?php require_once('usuario_footer.php');  ?>

