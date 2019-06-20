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
  
<div id="lookProductoModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <form name="look_producto" id="look_producto" class="justify-content-center" align="center" action="">
        <div class="modal-header">            
          <h4 class="modal-title">Registrar Producto</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">          
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
              <input type="textarea" class="form-control" name="look_desco_prod" id="look_desco_prod" maxlength="200" disabled>
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="look_desla_prod"><b>Descripcion Larga: </b></label>
              <input type="textarea" class="form-control" name="look_desla_prod" id="look_desla_prod" maxlength="400" disabled>
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="look_preci_prod"><b>Precio: </b></label>
              <input type="textarea" class="form-control" name="look_preci_prod" id="look_preci_prod" disabled>
            </div>
            <div class="col form-group">
              <label class="form-label" for="look_pesoo_prod"><b>Tamaño: </b></label>
              <input type="textarea" class="form-control" name="look_pesoo_prod" id="look_pesoo_prod" disabled>
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="look_stock_prod"><b>Stock: </b></label>
              <input type="textarea" class="form-control" name="look_stock_prod" id="look_stock_prod" disabled>
            </div>
            <div class="col form-group">
              <label class="form-label" for="look_estad_prod"><b>Estado: </b></label>
              <input type="textarea" class="form-control" name="look_estad_prod" id="look_estad_prod" disabled>
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="look_imag1_prod">Imagen 1: </label>
              <div class="form-group">
                <div class="custom-file">
                  <input type="file" name="files[]" multiple class="custom-file-input" id="customFile">
                  <label class="custom-file-label" for="customFile">Seleccionar Archivo...</label>
                </div>
              </div>
              <div class="form-group">
                <button type="submit" name="upload" value="upload" id="upload" class="btn btn-block btn-primary"><i class="fa fa-fw fa-upload"></i> Subir</button>
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="look_imag2_prod">Imagen 2: </label>
              <div class="form-group">
                <div class="custom-file">
                  <input type="file" name="files[]" multiple class="custom-file-input" id="customFile">
                  <label class="custom-file-label" for="customFile">Seleccionar Archivo...</label>
                </div>
              </div>
              <div class="form-group">
                <button type="submit" name="upload" value="upload" id="upload" class="btn btn-block btn-primary"><i class="fa fa-fw fa-upload"></i> Subir</button>
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="look_imag3_prod">Imagen 3: </label>
              <div class="form-group">
                <div class="custom-file">
                  <input type="file" name="files[]" multiple class="custom-file-input" id="customFile">
                  <label class="custom-file-label" for="customFile">Seleccionar Archivo...</label>
                </div>
              </div>
              <div class="form-group">
                <button type="submit" name="upload" value="upload" id="upload" class="btn btn-block btn-primary"><i class="fa fa-fw fa-upload"></i> Subir</button>
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="look_nombr_cate"><b>Categoria: </b></label>
              <select class="form-control" id="nombr_cate" name="nombr_cate">
                <option value=""></option>
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