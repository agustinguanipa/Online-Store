<!--- CSS --->
<link rel="stylesheet" type="text/css" href="../../css/estilos.css">
<link rel="stylesheet" type="text/css" href="../../css/estilos_admin.css">
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
    $sql = "SELECT * FROM tabma_cate";
    $result = mysqli_query($con, $sql);
?>

<!-- Modal Add Proveedor -->
  
<div id="addProveedorModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form name="add_proveedor" id="add_proveedor" class="justify-content-center" align="center" action="" enctype="multipart/form-data" method="POST">
				<div class="modal-header">						
					<h4 class="modal-title">Registrar Proveedor</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="nombr_prov"><b>Nombre: </b></label>
              <input type="text" class="form-control" name="nombr_prov" autocomplete="off" id="nombr_prov" maxlength="45" onkeyup="this.value = this.value.toUpperCase();" required>
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="telef_prov"><b>Telefono: </b></label>
              <input type="text" class="form-control telef-mask" name="telef_prov" autocomplete="off" id="telef_prov" placeholder="(0000) 000 0000" maxlength="15">
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="email_prov"><b>E-Mail: </b></label>
              <input type="email" class="form-control" name="email_prov" autocomplete="off" id="email_prov" placeholder="correo@mail.com" onkeyup="this.value = this.value.toUpperCase();">
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="direc_prov"><b>Dirección: </b></label>
              <textarea type="text" class="form-control" name="direc_prov" autocomplete="off" id="direc_prov" placeholder="" maxlength="100" onkeyup="this.value = this.value.toUpperCase();"></textarea>
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

<!-- Modal Edit Proveedor-->

<div id="editProveedorModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <form name="edit_proveedor" id="edit_proveedor" class="justify-content-center" align="center" enctype="multipart/form-data" method="POST">
        <div class="modal-header">            
          <h4 class="modal-title">Editar Proveedor</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="edit_nombr_prov"><b>Nombre: </b></label>
              <input type="text" class="form-control" name="edit_nombr_prov" autocomplete="off" id="edit_nombr_prov" maxlength="45" onkeyup="this.value = this.value.toUpperCase();" required>
              <input type="hidden" name="edit_id" id="edit_id">
            </div>
          </div>
           <div class="form-row">
              <div class="col form-group">
                <label class="form-label" for="edit_telef_prov"><b>Telefono: </b></label>
                <input type="text" class="form-control telef-mask" name="edit_telef_prov" autocomplete="off" id="edit_telef_prov" placeholder="(0000) 000 0000" maxlength="15">
              </div>
            </div>
            <div class="form-row">
              <div class="col form-group">
                <label class="form-label" for="edit_email_prov"><b>E-Mail: </b></label>
                <input type="email" class="form-control" name="edit_email_prov" autocomplete="off" id="edit_email_prov" placeholder="correo@mail.com" onkeyup="this.value = this.value.toUpperCase();">
              </div>
            </div>
            <div class="form-row">
              <div class="col form-group">
                <label class="form-label" for="edit_direc_prov"><b>Dirección: </b></label>
                <textarea type="text" class="form-control" name="edit_direc_prov" autocomplete="off" id="edit_direc_prov" placeholder="" maxlength="100" onkeyup="this.value = this.value.toUpperCase();"></textarea>
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

<!-- Modal Look Proveedor-->

<div id="lookProveedorModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <form name="look_proveedor" id="look_proveedor" class="justify-content-center" align="center">
        <div class="modal-header">            
          <h4 class="modal-title">Ver Proveedor</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="look_nombr_prov"><b>Nombre: </b></label>
              <input type="text" class="form-control" name="look_nombr_prov" id="look_nombr_prov" disabled>
              <input type="hidden" name="look_id" id="look_id">
            </div>
          </div>
          <div class="form-row">
              <div class="col form-group">
                <label class="form-label" for="look_telef_prov"><b>Telefono: </b></label>
                <input type="text" class="form-control" name="look_telef_prov" id="look_telef_prov" disabled>
              </div>
            </div>
            <div class="form-row">
              <div class="col form-group">
                <label class="form-label" for="look_email_prov"><b>E-Mail: </b></label>
                <input type="email" class="form-control" name="look_email_prov" id="look_email_prov" disabled>
              </div>
            </div>
            <div class="form-row">
              <div class="col form-group">
                <label class="form-label" for="look_direc_prov"><b>Dirección: </b></label>
                <textarea type="text" class="form-control" name="look_direc_prov" id="look_direc_prov" disabled></textarea>
              </div>
            </div>
          </div>
        <div class="modal-footer">
          <input type="button" class="btn btn-primary float-right" data-dismiss="modal" value="OK">
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Delete Proveedor-->

<div id="deleteProveedorModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <form name="delete_proveedor" id="delete_proveedor">
        <div class="modal-header">            
          <h4 class="modal-title">Desactivar Proveedor</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">          
          <p>¿Seguro que quieres desactivar este registro?</p>
          <p class="text-danger"><small>Se desactivará el proveedor.</small></p>
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

<!-- Modal Restaurar Proveedor-->

<div id="restaurarProveedorModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <form name="restaurar_proveedor" id="restaurar_proveedor">
        <div class="modal-header">            
          <h4 class="modal-title">Restaurar Proveedor</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">          
          <p>¿Seguro que quieres restaurar este registro?</p>
          <p class="text-success"><small>Se restaurará el proveedor.</small></p>
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

