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
  
<div id="addAdminModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form name="add_admin" id="add_admin" class="justify-content-center" align="center">
				<div class="modal-header">						
					<h4 class="modal-title">Registrar Administrador</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-row">
          <div class="col form-group">
            <label class="form-label" for="nomb1_admi">Primer Nombre: </label>
            <input type="text" class="form-control" name="nomb1_admi" autocomplete="off" id="nomb1_admi" placeholder="Carlos" maxlength="20" onkeyup="this.value = this.value.toUpperCase();" required>
          </div>
          <div class="col form-group">
            <label class="form-label" for="nomb2_admi">Segundo Nombre: </label>
            <input type="text" class="form-control" name="nomb2_admi" autocomplete="off" id="nomb2_admi" placeholder="Agustin" maxlength="20" onkeyup="this.value = this.value.toUpperCase();" required>
          </div>
        </div>
        <div class="form-row">
          <div class="col form-group">
            <label class="form-label" for="apel1_admi">Primer Apellido: </label>
            <input type="text" class="form-control" name="apel1_admi" autocomplete="off" id="apel1_admi" placeholder="Guanipa" maxlength="20" onkeyup="this.value = this.value.toUpperCase();" required>
          </div>
          <div class="col form-group">
            <label class="form-label" for="apel2_admi">Segundo Apellido: </label>
            <input type="text" class="form-control" name="apel2_admi" autocomplete="off" id="apel2_admi" placeholder="Alvarez" maxlength="20" onkeyup="this.value = this.value.toUpperCase();">
          </div>
        </div>
        <div class="form-row">
          <div class="col form-group">
            <label class="form-label" for="usuar_admi">Usuario: </label>
            <input type="text" class="form-control" name="usuar_admi" autocomplete="off" id="usuar_admi" placeholder="miusuario" maxlength="20" onkeyup="this.value = this.value.toUpperCase();">
          </div>
        </div>
        <div class="form-row">
          <div class="col form-group">
            <label class="form-label" for="contr_admi">Contraseña: </label>
            <input type="password" class="form-control" name="contr_admi" autocomplete="off" id="contr_admi" placeholder="********" maxlength="20">
          </div>
          <div class="col form-group">
            <label class="form-label" for="confirm_password">Confirmar Contraseña: </label>
            <input type="password" class="form-control" name="confirm_password" autocomplete="off" id="confirm_password" placeholder="********" maxlength="20">
          </div>
        </div>	
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-light" data-dismiss="modal" value="Cancelar">
					<input type="submit" class="btn btn-primary" name="add" value="Registrar">
				</div>
			</form>
		</div>
	</div>
</div>