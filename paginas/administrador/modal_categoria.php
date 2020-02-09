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
 
<!-- Modal Add Categoria -->

<div id="addCategoriaModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form name="add_categoria" id="add_categoria" class="justify-content-center" align="center" action="">
				<div class="modal-header">						
					<h4 class="modal-title">Registrar Categoria</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="nombr_cate"><b>Nombre: </b></label>
              <input type="text" class="form-control" name="nombr_cate" autocomplete="off" id="nombr_cate" placeholder="Equipos Medicos" maxlength="20" onkeyup="this.value = this.value.toUpperCase();" required>
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

<!-- Modal Edit Categoria -->

<div id="editCategoriaModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form name="edit_categoria" id="edit_categoria" class="justify-content-center" align="center">
				<div class="modal-header">						
					<h4 class="modal-title">Editar Categoria</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<div class="form-row">
						<div class="col form-group">
              <label class="form-label"><b>Nombre: </b></label>
              <input type="text" name="edit_nombr_cate"  id="edit_nombr_cate" class="form-control" maxlength="20" onkeyup="this.value = this.value.toUpperCase();">
							<input type="hidden" name="edit_id" id="edit_id">
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

<!-- Modal Delete Categoria -->

<div id="deleteCategoriaModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form name="delete_categoria" id="delete_categoria">
				<div class="modal-header">						
					<h4 class="modal-title">Desactivar Categoria</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<p>¿Seguro que quieres desactivar este registro?</p>
					<p class="text-danger"><small>Se desactivará la Categoria.</small></p>
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

<!-- Modal Restaurar Categoria -->

<div id="restaurarCategoriaModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form name="restaurar_categoria" id="restaurar_categoria">
				<div class="modal-header">						
					<h4 class="modal-title">Restaurar Categoria</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<p>¿Seguro que quieres restaurar este registro?</p>
					<p class="text-success"><small>Se restaurará la Categoria.</small></p>
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