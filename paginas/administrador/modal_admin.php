<!--- CSS --->
<link rel="stylesheet" type="text/css" href="../../css/estilos.css">
<link rel="stylesheet" type="text/css" href="../../css/estilos_Admin.css">
<!--- Bootstrap 4 --->
<link rel="stylesheet" href="../../libs/bootstrap-4.1.3-dist/css/bootstrap.min.css"/>
<script src="../../libs/bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
<!--- Bootstrap 4 UI E-Commerce --->
<script src="../../libs/bootstrap-ecommerce-uikit/ui-ecommerce/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<link href="../../libs/bootstrap-ecommerce-uikit/ui-ecommerce/css/bootstrap.css" rel="stylesheet" type="text/css"/>
<link href="../../libs/bootstrap-ecommerce-uikit/ui-ecommerce/fonts/fontawesome/css/fontawesome-all.min.css" type="text/css" rel="stylesheet">
<link href="../../libs/bootstrap-ecommerce-uikit/ui-ecommerce/plugins/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="../../libs/bootstrap-ecommerce-uikit/ui-ecommerce/plugins/owlcarousel/assets/owl.theme.default.css" rel="stylesheet">
<script src="../../libs/bootstrap-ecommerce-uikit/ui-ecommerce/plugins/owlcarousel/owl.carousel.min.js"></script>
<link href="../../libs/bootstrap-ecommerce-uikit/ui-ecommerce/css/ui.css" rel="stylesheet" type="text/css"/>
<link href="../../libs/bootstrap-ecommerce-uikit/ui-ecommerce/css/responsive.css" rel="stylesheet" media="only screen and (max-width: 1200px)"/>
<script src="../../libs/bootstrap-ecommerce-uikit/ui-ecommerce/js/script.js" type="text/javascript"></script>
<script type="text/javascript" src="../../libs/jquery-validation-1.19.0/dist/jquery.validate.js"></script>
<!--- jQuery Mask Plugin --->
<script type="text/javascript" src="../../libs/jQuery-Mask-Plugin/dist/jquery.mask.js"></script>
<!--- JS --->
<script src="../../js/validacion.js" type="text/javascript"></script>

<?php
  $sql = "SELECT * FROM tabma_tipo WHERE ident_tipo != 1 AND ident_tipo != 4";
  $result = mysqli_query($con, $sql);
?>

<!-- Modal Add Admin -->
  
<div id="addAdminModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <form name="add_admin" id="add_admin" class="justify-content-center" align="center" action="" enctype="multipart/form-data">
        <div class="modal-header">            
          <h4 class="modal-title">Registrar Usuario</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">          
          <div class="form-row">
          <div class="col form-group">
            <label class="form-label" for="nomb1_usua"><b>Primer Nombre: </b></label>
            <input type="text" class="form-control" name="nomb1_usua" autocomplete="off" id="nomb1_usua" placeholder="Carlos" maxlength="20" onkeyup="this.value = this.value.toUpperCase();" required>
          </div>
          <div class="col form-group">
            <label class="form-label" for="nomb2_usua"><b>Segundo Nombre: </b></label>
            <input type="text" class="form-control" name="nomb2_usua" autocomplete="off" id="nomb2_usua" placeholder="Agustin" maxlength="20" onkeyup="this.value = this.value.toUpperCase();">
          </div>
        </div>
        <div class="form-row">
          <div class="col form-group">
            <label class="form-label" for="apel1_usua"><b>Primer Apellido: </b></label>
            <input type="text" class="form-control" name="apel1_usua" autocomplete="off" id="apel1_usua" placeholder="Guanipa" maxlength="20" onkeyup="this.value = this.value.toUpperCase();" required>
          </div>
          <div class="col form-group">
            <label class="form-label" for="apel2_usua"><b>Segundo Apellido: </b></label>
            <input type="text" class="form-control" name="apel2_usua" autocomplete="off" id="apel2_usua" placeholder="Alvarez" maxlength="20" onkeyup="this.value = this.value.toUpperCase();">
          </div>
        </div>
        <div class="form-row">
          <div class="col form-group">
            <label class="form-label" for="gener_usua"><b>Genero: </b></label>
            <select class="form-control" id="gener_usua" name="gener_usua">
              <option disabled selected value>Seleccionar una Opción...</option>
              <option value="MASCULINO">MASCULINO</option>
              <option value="FEMENINO">FEMENINO</option>
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="col form-group">
            <label class="form-label" for="telef_usua"><b>Telefono: </b></label>
            <input type="text" class="form-control telef-mask" name="telef_usua" autocomplete="off" id="telef_usua" placeholder="(0000) 000 0000" maxlength="15">
          </div>
        </div>
        <div class="form-row">
          <div class="col form-group">
            <label class="form-label" for="email_usua"><b>E-Mail: </b></label>
            <input type="email" class="form-control" name="email_usua" autocomplete="off" id="email_usua" placeholder="correo@mail.com" onkeyup="this.value = this.value.toUpperCase();">
          </div>
        </div>
        <div class="form-row">
          <div class="col form-group">
            <label class="form-label" for="image_usua"><b>Imagen de Perfil: </b></label>
            <input type="file" class="filestyle" id="image_usua" name="image_usua" alt="Imagen de Perfil" data-btnClass="btn-primary" accept="image/*">
          </div>
        </div>
        <div class="form-row">
          <div class="col form-group">
            <label class="form-label" for="ident_tipo"><b>Tipo de Usuario: </b></label>
            <select class="form-control" name="ident_tipo" id="ident_tipo">
              <option disabled selected value>Seleccionar una Opción...</option>
                <?php
                  while($row = mysqli_fetch_array($result)) {
                    echo '<option value='.$row['ident_tipo'].'>'.$row['nombr_tipo'].'</option>';
                  }
                ?> 
            </select>
          </div>
        </div>  
        <div class="form-row">
          <div class="col form-group">
            <label class="form-label" for="usuar_usua"><b>Usuario: </b></label>
            <input type="text" class="form-control" name="usuar_usua" autocomplete="off" id="usuar_usua" placeholder="miusuario" maxlength="20" onkeyup="this.value = this.value.toUpperCase();">
          </div>
        </div>
        <div class="form-row">
          <div class="col form-group">
            <label class="form-label" for="contr_usua"><b>Contraseña: </b></label>
            <input type="password" class="form-control" name="contr_usua" autocomplete="off" id="contr_usua" placeholder="********" maxlength="20">
          </div>
          <div class="col form-group">
            <label class="form-label" for="confirm_password"><b>Confirmar Contraseña: </b></label>
            <input type="password" class="form-control" name="confirm_password" autocomplete="off" id="confirm_password" placeholder="********" maxlength="20">
          </div>
        </div>  
        </div>
        <div class="modal-footer">
          <input type="button" class="btn btn-light" data-dismiss="modal" value="Cancelar">
          <input type="submit" class="btn btn-primary" value="Registrar">
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Look Admin -->

<div id="lookAdminModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <form name="look_admin" id="look_admin" class="justify-content-center" align="center">
        <div class="modal-header">            
          <h4 class="modal-title">Ver Usuario</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label"><b>Primer Nombre: </b></label>
              <input type="text" name="look_nomb1_usua" id="look_nomb1_usua" class="form-control" disabled>
              <input type="hidden" name="look_id" id="look_id">
            </div>
            <div class="col form-group">
              <label class="form-label"><b>Segundo Nombre: </b></label>
              <input type="text" name="look_nomb2_usua" id="look_nomb2_usua" class="form-control" disabled>
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label"><b>Primer Apellido: </b></label>
              <input type="text" name="look_apel1_usua" id="look_apel1_usua" class="form-control" disabled>
            </div>
            <div class="col form-group">
              <label class="form-label"><b>Segundo Apellido: </b></label>
              <input type="text" name="look_apel2_usua" id="look_apel2_usua" class="form-control" disabled>
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label"><b>Usuario: </b></label>
              <input type="text" name="look_usuar_usua" id="look_usuar_usua" class="form-control" disabled>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <input type="button" class="btn btn-light float-left" data-dismiss="modal" value="Cancelar">
          <input type="button" class="btn btn-primary float-right" data-dismiss="modal" value="OK">
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Edit Admin -->

<div id="editAdminModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <form name="edit_admin" id="edit_admin" class="justify-content-center" align="center">
        <div class="modal-header">            
          <h4 class="modal-title">Editar Usuario</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label"><b>Primer Nombre: </b></label>
              <input type="text" name="edit_nomb1_usua"  id="edit_nomb1_usua" class="form-control" maxlength="20" onkeyup="this.value = this.value.toUpperCase();">
              <input type="hidden" name="edit_id" id="edit_id">
            </div>
            <div class="col form-group">
              <label class="form-label"><b>Segundo Nombre: </b></label>
              <input type="text" name="edit_nomb2_usua"  id="edit_nomb2_usua" class="form-control" maxlength="20" onkeyup="this.value = this.value.toUpperCase();">
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label"><b>Primer Apellido</b></label>
              <input type="text" name="edit_apel1_usua"  id="edit_apel1_usua" class="form-control" maxlength="20" onkeyup="this.value = this.value.toUpperCase();">
            </div>
            <div class="col form-group">
              <label class="form-label"><b>Segundo Apellido</b></label>
              <input type="text" name="edit_apel2_usua"  id="edit_apel2_usua" class="form-control" maxlength="20" onkeyup="this.value = this.value.toUpperCase();">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <input type="button" class="btn btn-light" data-dismiss="modal" value="Cancelar">
          <input type="submit" class="btn btn-primary" value="Actualizar">
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Delete Admin -->

<div id="deleteAdminModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <form name="delete_admin" id="delete_admin">
        <div class="modal-header">            
          <h4 class="modal-title">Desactivar Usuario</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">          
          <p>¿Seguro que quieres desactivar este registro?</p>
          <p class="text-danger"><small>Se desactivará el Usuario.</small></p>
          <input type="hidden" name="delete_id" id="delete_id">
        </div>
        <div class="modal-footer">
          <input type="button" class="btn btn-light" data-dismiss="modal" value="Cancelar">
          <input type="submit" class="btn btn-danger" value="Desactivar">
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Restaurar Admin -->

<div id="restaurarAdminModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <form name="restaurar_admin" id="restaurar_admin">
        <div class="modal-header">            
          <h4 class="modal-title">Restaurar Usuario</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">          
          <p>¿Seguro que quieres restaurar este registro?</p>
          <p class="text-success"><small>Se restaurará el Usuario.</small></p>
          <input type="hidden" name="restaurar_id" id="restaurar_id">
        </div>
        <div class="modal-footer">
          <input type="button" class="btn btn-light" data-dismiss="modal" value="Cancelar">
          <input type="submit" class="btn btn-success" value="Restaurar">
        </div>
      </form>
    </div>
  </div>
</div>