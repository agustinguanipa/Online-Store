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
  
<div id="addClienteModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form name="add_cliente" id="add_cliente" class="justify-content-center" align="center" action="">
				<div class="modal-header">						
					<h4 class="modal-title">Registrar Cliente</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-row">
          <div class="col form-group">
            <label class="form-label" for="nomb1_clie">Primer Nombre: </label>
            <input type="text" class="form-control" name="nomb1_clie" autocomplete="off" id="nomb1_clie" placeholder="Carlos" maxlength="20" onkeyup="this.value = this.value.toUpperCase();" required>
          </div>
          <div class="col form-group">
            <label class="form-label" for="nomb2_clie">Segundo Nombre: </label>
            <input type="text" class="form-control" name="nomb2_clie" autocomplete="off" id="nomb2_clie" placeholder="Agustin" maxlength="20" onkeyup="this.value = this.value.toUpperCase();">
          </div>
        </div>
        <div class="form-row">
          <div class="col form-group">
            <label class="form-label" for="apel1_clie">Primer Apellido: </label>
            <input type="text" class="form-control" name="apel1_clie" autocomplete="off" id="apel1_clie" placeholder="Guanipa" maxlength="20" onkeyup="this.value = this.value.toUpperCase();" required>
          </div>
          <div class="col form-group">
            <label class="form-label" for="apel2_clie">Segundo Apellido: </label>
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
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-light" data-dismiss="modal" value="Cancelar">
					<input type="submit" class="btn btn-primary" value="Registrar">
				</div>
			</form>
		</div>
	</div>
</div>