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
  $sql1 = "SELECT * FROM tabma_cate WHERE statu_cate = 1";
  $result1 = mysqli_query($con, $sql1);

  $sql2 = "SELECT * FROM tabma_prov WHERE statu_prov = 1";
  $result2 = mysqli_query($con, $sql2);
?>

<!-- Modal Add Producto -->

<div id="addProductoModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form name="add_producto" id="add_producto" class="justify-content-center" align="center" enctype="multipart/form-data" action="" method="POST">
				<div class="modal-header">						
					<h4 class="modal-title">Registrar Producto</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="ident_prod"><b>Código: </b></label>
              <input type="text" class="form-control" name="ident_prod" autocomplete="off" id="ident_prod" placeholder="" maxlength="10" onkeyup="this.value = this.value.toUpperCase();" required>
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="ident_cate"><b>Categoria: </b></label>
              <select class="form-control" name="ident_cate" id="ident_cate">
                <option disabled selected value>Seleccionar una Opción...</option>
                  <?php
                    while($row1 = mysqli_fetch_array($result1)) {
                      echo '<option value='.$row1['ident_cate'].'>'.$row1['nombr_cate'].'</option>';
                    }
                  ?> 
              </select>
            </div>
          </div>
           					
					<div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="nombr_prod"><b>Nombre: </b></label>
              <input type="text" class="form-control" name="nombr_prod" autocomplete="off" id="nombr_prod" placeholder="" maxlength="50" onkeyup="this.value = this.value.toUpperCase();" required>
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
                <option disabled selected value>Seleccionar una Opción...</option>
                <option value="NUEVO">NUEVO</option>
                <option value="USADO">USADO</option>
                <option value="REFACCIONADO">REFACCIONADO</option>
              </select>
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="imag1_prod"><b>Imagen 1: </b></label>
              <input type="file" class="filestyle" id="imag1_prod" name="imag1_prod" alt="Imagen del Producto 1" data-btnClass="btn-primary" accept="image/*">
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="imag2_prod"><b>Imagen 2: </b></label>
              <input type="file" class="filestyle" id="imag2_prod" name="imag2_prod" alt="Imagen del Producto 2" data-btnClass="btn-primary" accept="image/*">
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="imag3_prod"><b>Imagen 3: </b></label>
              <input type="file" class="filestyle" id="imag3_prod" name="imag3_prod" alt="Imagen del Producto 3" data-btnClass="btn-primary" accept="image/*">
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

<!-- Modal Look Producto -->

<?php
    $sql = "SELECT * FROM tabma_cate";
    $result = mysqli_query($con, $sql);
?>
  
<div id="lookProductoModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <form name="look_producto" id="look_producto" class="justify-content-center" align="center" action="">
        <div class="modal-header">            
          <h4 class="modal-title">Ver Producto</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body"> 
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="look_ident_cate"><b>Categoria: </b></label>
              <select class="form-control" name="look_ident_cate" id="look_ident_cate" disabled>
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
              <label class="form-label" for="look_nombr_prod"><b>Nombre: </b></label>
              <input type="text" class="form-control" name="look_nombr_prod" id="look_nombr_prod" disabled>
              <input type="hidden" name="look_id" id="look_id">
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="look_desco_prod"><b>Descripcion Corta: </b></label>
              <textarea class="form-control" name="look_desco_prod" id="look_desco_prod" disabled></textarea>
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="look_desla_prod"><b>Descripcion Larga: </b></label>
              <textarea class="form-control" name="look_desla_prod" id="look_desla_prod" disabled></textarea>
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="look_preci_prod"><b>Precio: </b></label>
              <input type="text" class="form-control preci-mask" name="look_preci_prod" id="look_preci_prod" disabled>
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="look_pesoo_prod"><b>Peso: </b></label>
              <input type="text" class="form-control pesoo-mask" name="look_pesoo_prod" id="look_pesoo_prod" disabled>
            </div>
            <div class="col form-group">
              <label class="form-label" for="look_taman_prod"><b>Tamaño: </b></label>
              <input type="text" class="form-control taman-mask" name="look_taman_prod" id="look_taman_prod"disabled>
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="look_stock_prod"><b>Stock: </b></label>
              <input type="text" class="form-control" name="look_stock_prod" id="look_stock_prod" disabled>
            </div>
            <div class="col form-group">
              <label class="form-label" for="look_estad_prod"><b>Estado: </b></label>
              <input type="text" class="form-control" name="look_estad_prod" id="look_estad_prod" disabled>
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

<!-- Modal Edit Producto -->

<?php
    $sql = "SELECT * FROM tabma_cate";
    $result = mysqli_query($con, $sql);
?>
  
<div id="editProductoModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <form name="edit_producto" id="edit_producto" class="justify-content-center" align="center" action="">
        <div class="modal-header">            
          <h4 class="modal-title">Editar Producto</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body"> 
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="edit_ident_cate"><b>Categoria: </b></label>
              <select class="form-control" name="edit_ident_cate" id="edit_ident_cate">
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
              <label class="form-label" for="edit_nombr_prod"><b>Nombre: </b></label>
              <input type="text" class="form-control" name="edit_nombr_prod" autocomplete="off" id="edit_nombr_prod" placeholder="" maxlength="20" onkeyup="this.value = this.value.toUpperCase();" required>
              <input type="hidden" name="edit_id" id="edit_id">
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="edit_desco_prod"><b>Descripcion Corta: </b></label>
              <textarea class="form-control" name="edit_desco_prod" autocomplete="off" id="edit_desco_prod" placeholder="" maxlength="200" required></textarea>
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="edit_desla_prod"><b>Descripcion Larga: </b></label>
              <textarea class="form-control" name="edit_desla_prod" autocomplete="off" id="edit_desla_prod" placeholder="" maxlength="400" required></textarea>
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="edit_preci_prod"><b>Precio: </b></label>
              <input type="text" class="form-control preci-mask" name="edit_preci_prod" autocomplete="off" id="edit_preci_prod" placeholder="" maxlength="10" required>
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="edit_pesoo_prod"><b>Peso: </b></label>
              <input type="text" class="form-control pesoo-mask" name="edit_pesoo_prod" autocomplete="off" id="edit_pesoo_prod" placeholder="" maxlength="10" required>
            </div>
            <div class="col form-group">
              <label class="form-label" for="edit_taman_prod"><b>Tamaño: </b></label>
              <input type="text" class="form-control taman-mask" name="edit_taman_prod" autocomplete="off" id="edit_taman_prod" placeholder="" maxlength="10" required>
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="edit_stock_prod"><b>Stock: </b></label>
              <input type="text" class="form-control" name="edit_stock_prod" autocomplete="off" id="edit_stock_prod" placeholder="" maxlength="10" required>
            </div>
            <div class="col form-group">
              <label class="form-label" for="edit_estad_prod"><b>Estado: </b></label>
              <select class="form-control" id="edit_estad_prod" name="edit_estad_prod">
                <option value="NUEVO">NUEVO</option>
                <option value="USADO">USADO</option>
              </select>
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

<!-- Modal Delete Producto -->

<div id="deleteProductoModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <form name="delete_producto" id="delete_producto">
        <div class="modal-header">            
          <h4 class="modal-title">Desactivar Producto</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">          
          <p>¿Seguro que quieres desactivar este registro?</p>
          <p class="text-danger"><small>Se desactivará el producto.</small></p>
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

<!-- Modal Restaurar Producto -->

<div id="restaurarProductoModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <form name="restaurar_producto" id="restaurar_producto">
        <div class="modal-header">            
          <h4 class="modal-title">Restaurar Producto</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">          
          <p>¿Seguro que quieres restaurar este registro?</p>
          <p class="text-success"><small>Se restaurará el Producto.</small></p>
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