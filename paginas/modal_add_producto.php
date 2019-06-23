<!--- CSS --->
<link rel="stylesheet" type="text/css" href="../css/estilos.css">
<link rel="stylesheet" type="text/css" href="../css/estilos_admin.css">
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

<?php
  $sql = "SELECT * FROM tabma_cate";
  $result = mysqli_query($con, $sql);
?>
  
<div id="addProductoModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form name="add_producto" id="add_producto" class="justify-content-center" align="center" action="">
				<div class="modal-header">						
					<h4 class="modal-title">Registrar Producto</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="ident_prod"><b>Código: </b></label>
              <input type="text" class="form-control" name="ident_prod" autocomplete="off" id="ident_prod" placeholder="" maxlength="20" onkeyup="this.value = this.value.toUpperCase();" required>
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="ident_cate"><b>Categoria: </b></label>
              <select class="form-control" name="ident_cate" id="ident_cate">
                <option value = "">Seleccione...</option>
                  <?php
                    while($row = mysqli_fetch_array($result)) {
                      echo '<option value='.$row['ident_cate'].'>'.$row['nombr_cate'].'</option>';
                    }
                  ?> 
              </select>
            </div>
          </div>					
					<div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="nombr_prod"><b>Nombre: </b></label>
              <input type="text" class="form-control" name="nombr_prod" autocomplete="off" id="nombr_prod" placeholder="" maxlength="20" onkeyup="this.value = this.value.toUpperCase();" required>
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="desco_prod"><b>Descripcion Corta: </b></label>
              <textarea class="form-control" name="desco_prod" autocomplete="off" id="desco_prod" placeholder="" maxlength="200" required></textarea>
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="desla_prod"><b>Descripcion Larga: </b></label>
              <textarea class="form-control" name="desla_prod" autocomplete="off" id="desla_prod" placeholder="" maxlength="400" required></textarea>
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="preci_prod"><b>Precio: </b></label>
              <input type="text" class="form-control preci-mask" name="preci_prod" autocomplete="off" id="preci_prod" placeholder="" maxlength="10" required>
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="pesoo_prod"><b>Peso: </b></label>
              <input type="text" class="form-control pesoo-mask" name="pesoo_prod" autocomplete="off" id="pesoo_prod" placeholder="" maxlength="10" required>
            </div>
            <div class="col form-group">
              <label class="form-label" for="taman_prod"><b>Tamaño: </b></label>
              <input type="text" class="form-control taman-mask" name="taman_prod" autocomplete="off" id="taman_prod" placeholder="" maxlength="10" required>
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="stock_prod"><b>Stock: </b></label>
              <input type="text" class="form-control" name="stock_prod" autocomplete="off" id="stock_prod" placeholder="" maxlength="10" required>
            </div>
            <div class="col form-group">
              <label class="form-label" for="estad_prod"><b>Estado: </b></label>
              <select class="form-control" id="estad_prod" name="estad_prod">
                <option value="NUEVO">NUEVO</option>
                <option value="USADO">USADO</option>
              </select>
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="imag1_prod"><b>Imagen 1: </b></label>
              <input type="file" class="filestyle" id="imag1_prod" name="" alt="Imagen del Producto 1" data-btnClass="btn-primary">
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="imag2_prod"><b>Imagen 2: </b></label>
              <input type="file" class="filestyle" id="imag2_prod" name="" alt="Imagen del Producto 2" data-btnClass="btn-primary">
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="imag3_prod"><b>Imagen 3: </b></label>
              <input type="file" class="filestyle" id="imag3_prod" name="" alt="Imagen del Producto 3" data-btnClass="btn-primary">
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