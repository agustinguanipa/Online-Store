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
$ident_prov = $_REQUEST['ident_prov'];

include_once '../../paginas/conexion_bd.php';

$query_user = mysqli_query($con,"SELECT * FROM tabma_prov WHERE ident_prov = $ident_prov");
    
$result_user = mysqli_num_rows($query_user);

$data_user = mysqli_fetch_array($query_user);

	$ident_prov = $data_user['ident_prov'];
	$nombr_prov = $data_user['nombr_prov'];
  $telef_prov = $data_user['telef_prov'];
  $email_prov = $data_user['email_prov'];
  $direc_prov = $data_user['direc_prov'];
?>

<!-- Modal Look Proveedor -->

<div class="modal fade" id="lookProveedorModal" aria-labelledby="lookProveedorModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="lookProveedorModal">Ver Proveedor</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" align="center">
        <div class="form-row">
          <div class="col form-group">
            <label class="form-label" for="ident_prov">Identificación: </label>
            <label><?php echo $ident_prov; ?></label>
          </div>
        </div>
        <div class="form-row">
          <div class="col form-group">
            <label class="form-label">Nombre: </label>
            <label><?php echo $nombr_prov; ?></label>
          </div>
        </div>
        <div class="form-row">
          <div class="col form-group">
            <label class="form-label">Teléfono: </label>
            <label><?php echo $telef_prov; ?></label>
          </div>
        </div>
        <div class="form-row">
          <div class="col form-group">
            <label class="form-label">E-Mail: </label>
            <label><?php echo $email_prov; ?></label>
          </div>
        </div>
        <div class="form-row">
          <div class="col form-group">
            <label class="form-label">Dirección: </label>
            <label><?php echo $direc_prov; ?></label>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-primary" data-dismiss="modal" value="OK">
    </div>
    </div>
  </div>
</div>
