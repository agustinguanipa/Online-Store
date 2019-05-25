<?php require_once('header_logreg.php'); ?>


<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add New</h4></center>
            </div>
            <div class="modal-body">
      <div class="container-fluid">
      <form role="form" id="usuario_registro" class="justify-content-center" align="center" action="add.php" method="post">
          <h3>Registrarse</h3>
          <hr class="my-4">
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="nomb1_clie">Primer Nombre: </label>
              <input type="text" class="form-control" name="nomb1_clie" autocomplete="off" id="nomb1_clie" placeholder="Carlos" maxlength="20" onkeyup="this.value = this.value.toUpperCase();">
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
              <input type="email" class="form-control" name="email_clie" autocomplete="off" id="email_clie" placeholder="correo@mail.com" onkeyup="this.value = this.value.toUpperCase();">
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="usuar_clie">Usuario: </label>
              <input type="text" class="form-control" name="usuar_clie" autocomplete="off" id="usuar_clie" placeholder="miusuario" maxlength="20" onkeyup="this.value = this.value.toUpperCase();">
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="contr_clie">Contraseña: </label>
              <input type="password" class="form-control" name="contr_clie" autocomplete="off" id="contr_clie" placeholder="********" maxlength="20">
            </div>
            <div class="col form-group">
              <label class="form-label" for="confirm_password">Confirmar Contraseña: </label>
              <input type="password" class="form-control" name="confirm_password" autocomplete="off" id="confirm_password" placeholder="********" maxlength="20">
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <button type="submit" class="btn btn-primary btn-block" name="add">Registrarse</button>
              <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Cancelar</button>
            </div>
          </div>
          <p class="text-center">Tienes una Cuenta? <a href="usuario_inicio.php">Iniciar Sesión</a> </p>
        </form>
            </div>

        </div>
    </div>
</div>