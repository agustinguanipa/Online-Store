<!--- CSS --->
<link rel="stylesheet" type="text/css" href="../css/estilos.css">
<link rel="stylesheet" type="text/css" href="../css/estilos_admin.css">
<link rel="stylesheet" href="../css/custom.css">
<!--- Bootstrap 4 --->
<link rel="stylesheet" href="../libs/bootstrap-4.1.3-dist/css/bootstrap.min.css"/>
<script src="../libs/bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
<!--- Bootstrap 4 UI E-Commerce --->
<script src="../libs/bootstrap-ecommerce-uikit/ui-ecommerce/js/bootstrap.bundle.min.js" type="text/javascript"></script>

<link href="../libs/bootstrap-ecommerce-uikit/ui-ecommerce/css/bootstrap.css" rel="stylesheet" type="text/css"/>
<link href="../libs/bootstrap-ecommerce-uikit/ui-ecommerce/fonts/fontawesome/css/fontawesome-all.min.css" type="text/css" rel="stylesheet">
<link href="../libs/bootstrap-ecommerce-uikit/ui-ecommerce/plugins/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="../libs/bootstrap-ecommerce-uikit/ui-ecommerce/plugins/owlcarousel/assets/owl.theme.default.css" rel="stylesheet">
<script src="../libs/bootstrap-ecommerce-uikit/ui-ecommerce/plugins/owlcarousel/owl.carousel.min.js"></script>
<link href="../libs/bootstrap-ecommerce-uikit/ui-ecommerce/css/ui.css" rel="stylesheet" type="text/css"/>
<link href="../libs/bootstrap-ecommerce-uikit/ui-ecommerce/css/responsive.css" rel="stylesheet" media="only screen and (max-width: 1200px)"/>
<script src="../libs/bootstrap-ecommerce-uikit/ui-ecommerce/js/script.js" type="text/javascript"></script>
<script type="text/javascript" src="../libs/jquery-validation-1.19.0/dist/jquery.validate.js"></script>
<!--- jQuery Mask Plugin --->
<script type="text/javascript" src="../libs/jQuery-Mask-Plugin/dist/jquery.mask.js"></script>
<!--- JS --->
<script src="../js/validacion.js" type="text/javascript"></script>
<script src="../js/admin_sidebar.js" type="text/javascript"></script>

<div id="editClienteModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form name="edit_cliente" id="edit_cliente" class="justify-content-center" align="center">
				<div class="modal-header">						
					<h4 class="modal-title">Editar Cliente</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<div class="form-row">
						<div class="col form-group">
              <label class="form-label">Primer Nombre: </label>
              <input type="text" name="edit_nomb1_clie"  id="edit_nomb1_clie" class="form-control" maxlength="20" onkeyup="this.value = this.value.toUpperCase();">
							<input type="hidden" name="edit_id" id="edit_id">
            </div>
            <div class="col form-group">
              <label class="form-label">Segundo Nombre: </label>
              <input type="text" name="edit_nomb2_clie"  id="edit_nomb2_clie" class="form-control" maxlength="20" onkeyup="this.value = this.value.toUpperCase();">
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label">Primer Apellido</label>
              <input type="text" name="edit_apel1_clie"  id="edit_apel1_clie" class="form-control" maxlength="20" onkeyup="this.value = this.value.toUpperCase();">
            </div>
            <div class="col form-group">
              <label class="form-label">Segundo Apellido</label>
              <input type="text" name="edit_apel2_clie"  id="edit_apel2_clie" class="form-control" maxlength="20" onkeyup="this.value = this.value.toUpperCase();">
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label">Genero: </label>
              <select class="form-control" id="edit_gener_clie" name="edit_gener_clie">
                <option value="MASCULINO">MASCULINO</option>
                <option value="FEMENINO">FEMENINO</option>
              </select>
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label">Telefono: </label>
              <input type="text" name="edit_telef_clie"  id="edit_telef_clie" class="form-control telef-mask" maxlength="15">
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label">E-Mail: </label>
              <input type="text" name="edit_email_clie"  id="edit_email_clie" class="form-control" maxlength="100" onkeyup="this.value = this.value.toUpperCase();">
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label">Usuario: </label>
              <input type="text" name="edit_usuar_clie"  id="edit_usuar_clie" class="form-control" maxlength="20" onkeyup="this.value = this.value.toUpperCase();">
            </div>
          </div>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
					<input type="submit" class="btn btn-primary" value="Actualizar">
				</div>
			</form>
		</div>
	</div>
</div>