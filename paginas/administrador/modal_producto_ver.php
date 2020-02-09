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
$ident_prod = $_REQUEST['ident_prod'];

include_once '../../paginas/conexion_bd.php';

$query_user = mysqli_query($con,"SELECT * FROM tabma_prod p RIGHT JOIN tabma_cate r ON p.ident_cate = r.ident_cate RIGHT JOIN tabma_prov s ON p.ident_prov = s.ident_prov WHERE ident_prod = $ident_prod");
    
$result_user = mysqli_num_rows($query_user);

$data_user = mysqli_fetch_array($query_user);

	$ident_prod = $data_user['ident_prod'];
  $ident_cate = $data_user['ident_cate'];
  $nombr_cate = $data_user['nombr_cate'];
  $ident_prov = $data_user['ident_prov'];
  $nombr_prov = $data_user['nombr_prov'];
	$nombr_prod = $data_user['nombr_prod'];
  $desco_prod = $data_user['desco_prod'];
  $desla_prod = $data_user['desla_prod'];
  $preci_prod = $data_user['preci_prod'];
  $pesoo_prod = $data_user['pesoo_prod'];
  $taman_prod = $data_user['taman_prod'];
  $stock_prod = $data_user['stock_prod'];
  $estad_prod = $data_user['estad_prod'];
  
  $imag1_prod = $data_user['imag1_prod'];
  $imag2_prod = $data_user['imag2_prod'];
  $imag3_prod = $data_user['imag3_prod'];


?>

<!-- Modal Look Proveedor -->

<div class="modal fade" id="lookProductoModal" aria-labelledby="lookProductoModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="lookProductoModal">Ver Producto</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" align="center">
        <div class="form-row" align="center">
          <div class="col form-group">
            <label class="form-label" for="ident_prod">Imagen 1: </label><br>
            <img class="img-md" align="center" src="<?php echo $imag1_prod; ?>" alt="Imagen Producto">
          </div>
          <div class="col form-group">
            <label class="form-label" for="ident_prod">Imagen 2: </label><br>
            <img class="img-md" align="center" src="<?php echo $imag2_prod; ?>" alt="Imagen Producto">
          </div>
          <div class="col form-group">
            <label class="form-label" for="ident_prod">Imagen 3: </label><br>
            <img class="img-md" align="center" src="<?php echo $imag3_prod; ?>" alt="Imagen Producto">
          </div>
        </div>
        <hr>
        <div class="form-row">
          <div class="col form-group">
            <label class="form-label" for="ident_prod">Código: </label><br>
            <label><?php echo $ident_prod; ?></label>
          </div>
          <div class="col form-group">
            <label class="form-label" for="ident_cate">Categoría: </label><br>
            <label><?php echo $nombr_cate; ?></label>
          </div>
          <div class="col form-group">
            <label class="form-label" for="ident_prov">Proveedor: </label><br>
            <label><?php echo $nombr_prov; ?></label>
          </div>
        </div>
        <hr>
        <div class="form-row">
          <div class="col form-group">
            <label class="form-label">Nombre: </label><br>
            <label><?php echo $nombr_prod; ?></label>
          </div>
        </div>
        <div class="form-row">
          <div class="col form-group" for="desco_prod">
            <label class="form-label">Descripción Corta: </label><br>
            <label><?php echo $desco_prod; ?></label>
          </div>
        </div>
        <div class="form-row">
          <div class="col form-group" for="desla_prod">
            <label class="form-label">Descripción Larga: </label><br>
            <label><?php echo $desla_prod; ?></label>
          </div>
        </div>
        <hr>
        <div class="form-row">
          <div class="col form-group">
            <label class="form-label" for="preci_prod">Precio: </label><br>
            <label><?php echo $preci_prod; ?></label>
          </div>
          <div class="col form-group">
            <label class="form-label" for="pesoo_prod">Peso: </label><br>
            <label><?php echo $pesoo_prod; ?></label>
          </div>
          <div class="col form-group">
            <label class="form-label" for="taman_prod">Tamaño: </label><br>
            <label><?php echo $taman_prod; ?></label>
          </div>
          <div class="col form-group">
            <label class="form-label" for="taman_prod">Stock: </label><br>
            <label><?php echo $stock_prod; ?></label>
          </div>
          <div class="col form-group">
            <label class="form-label" for="taman_prod">Estado: </label><br>
            <label><?php echo $estad_prod; ?></label>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-primary" data-dismiss="modal" value="OK">
    </div>
    </div>
  </div>
</div>
