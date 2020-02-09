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
$ident_usua = $_REQUEST['ident_usua'];

include_once '../../paginas/conexion_bd.php';

$query_user = mysqli_query($con,"SELECT * FROM tabma_usua WHERE ident_usua = $ident_usua");
    
$result_user = mysqli_num_rows($query_user);

$data_user = mysqli_fetch_array($query_user);

	$ident_usua = $data_user['ident_usua'];
	$nomb1_usua = $data_user['nomb1_usua'];
  $nomb2_usua = $data_user['nomb2_usua'];
  $apel1_usua = $data_user['apel1_usua'];
  $apel2_usua = $data_user['apel2_usua'];
  $gener_usua = $data_user['gener_usua'];
  $telef_usua = $data_user['telef_usua'];
  $email_usua = $data_user['email_usua'];
  $image_usua = $data_user['image_usua'];
  $fecre_usua = $data_user['fecre_usua'];
?>

<!-- Modal Look Administrador -->

<div class="modal fade" id="lookClienteModal" aria-labelledby="lookClienteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="lookClienteModal">Ver Cliente</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" align="center">
        <div class="form-row" align="center">
          <div class="col form-group">
            <img class="img-md rounded-circle" align="center" src="<?php echo $image_usua; ?>" alt="Imagen Perfil">
          </div>
        </div>
        <div class="form-row">
          <div class="col form-group">
            <label class="form-label" for="ident_usua">Identificación: </label>
            <label><?php echo $ident_usua; ?></label>
          </div>
        </div>
        <div class="form-row">
          <div class="col form-group">
            <label class="form-label">Nombre: </label>
            <label><?php echo $nomb1_usua; ?> <?php echo $nomb2_usua; ?></label>
          </div>
          <div class="col form-group">
            <label class="form-label">Apellido: </label>
            <label><?php echo $apel1_usua; ?> <?php echo $apel2_usua; ?></label>
          </div>
        </div>
        <div class="form-row">
          <div class="col form-group">
            <label class="form-label">Genero: </label>
            <label><?php echo $gener_usua; ?></label>
          </div>
          <div class="col form-group">
            <label class="form-label">Teléfono: </label>
            <label><?php echo $telef_usua; ?></label>
          </div>
        </div>
        <div class="form-row">
          <div class="col form-group">
            <label class="form-label">E-Mail: </label>
            <label><?php echo $email_usua; ?></label>
          </div>
        </div>
        <div class="form-row">
          <div class="col form-group">
            <label class="form-label">Fecha de Registro: </label>
            <label><?php echo $fecre_usua; ?></label>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-primary" data-dismiss="modal" value="OK">
    </div>
    </div>
  </div>
</div>
