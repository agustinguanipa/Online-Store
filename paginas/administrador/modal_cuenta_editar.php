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
<!--- jQuery --->
<script src="../../libs/jquery/jquery-3.4.1.min.js" type="text/javascript"></script>
<!--- jQuery Mask Plugin --->
<script type="text/javascript" src="../../libs/jQuery-Mask-Plugin/dist/jquery.mask.js"></script>
<!--- jQuery Validation --->
<script type="text/javascript" src="../../libs/jquery-validation-1.19.0/lib/jquery-1.11.1.js"></script>
<script type="text/javascript" src="../../libs/jquery-validation-1.19.0/dist/jquery.validate.js"></script>
<!--- JS --->
<script src="../../js/validacion.js" type="text/javascript"></script>

<?php
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

<!-- Modal Edit Usuario -->

<div class="modal fade" id="edit_<?php echo $ident_usua; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="edit" class="justify-content-center" align="center" method="post" action="editar_usuario.php?id=<?php echo $ident_usua; ?>">
        <div class="modal-header">
          <h4 class="modal-title">Editar Usuario</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>     
          </button>
        </div>
        <div class="modal-body">
            <div class="form-row">
              <div class="col form-group">
                <input type="hidden" name="ident_usua" id="ident_usua">
                <label class="form-label"><b>Primer Nombre: </b></label>
                <input type="text" name="nomb1_usua"  id="nomb1_usua" class="form-control" value="<?php echo $nomb1_usua; ?>" maxlength="20" onkeyup="this.value = this.value.toUpperCase();">
              </div>
              <div class="col form-group">
                <label class="form-label"><b>Segundo Nombre: </b></label>
                <input type="text" name="nomb2_usua"  id="nomb2_usua" class="form-control" value="<?php echo $nomb2_usua; ?>" maxlength="20" onkeyup="this.value = this.value.toUpperCase();">
              </div>
            </div>
            <div class="form-row">
              <div class="col form-group">
                <label class="form-label"><b>Primer Apellido</b></label>
                <input type="text" name="apel1_usua"  id="apel1_usua" class="form-control" value="<?php echo $apel1_usua; ?>" maxlength="20" onkeyup="this.value = this.value.toUpperCase();">
              </div>
              <div class="col form-group">
                <label class="form-label"><b>Segundo Apellido</b></label>
                <input type="text" name="apel2_usua"  id="apel2_usua" class="form-control" value="<?php echo $apel2_usua; ?>" maxlength="20" onkeyup="this.value = this.value.toUpperCase();">
              </div>
            </div>
            <div class="form-row">
              <div class="col form-group">
                <label class="form-label" for="gener_usua"><b>Genero: </b></label>
                <select class="form-control notItemOne" id="gener_usua" name="gener_usua">
                  <option value="<?php echo $gener_usua; ?>"><?php echo $gener_usua; ?></option>
                  <option value="MASCULINO">MASCULINO</option>
                  <option value="FEMENINO">FEMENINO</option>
                </select>
              </div>
            </div>
            <div class="form-row">
              <div class="col form-group">
                <label class="form-label" for="telef_usua"><b>Telefono: </b></label>
                <input type="text" class="form-control telef-mask" name="telef_usua" autocomplete="off" id="telef_usua" placeholder="(0000) 000 0000" maxlength="15" value="<?php echo $telef_usua; ?>">
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

<script type="text/javascript">
  $( "#edit" ).validate( {

    rules: {
      nomb1_usua: {
        required: true,
        lettersonly: true,
        minlength: 2
      },
      nomb2_usua: {
        lettersonly: true,
        minlength: 2
      },
      apel1_usua: {
        required: true,
        lettersonly: true,
        minlength: 2
      },
      apel2_usua: {
        lettersonly: true,
        minlength: 2
      },
      telef_usua: {
        required: true,
        number: false,
        minlength: 15
      }
    },

    messages: {
      nomb1_usua: {
        required: "Ingrese su Primer Nombre",
        lettersonly: "Tu Nombre solo debe contener letras sin espacios",
        minlength: "Tu Nombre debe contener al menos 2 caracteres"
      },
      nomb2_usua: {
        lettersonly: "Tu Nombre solo debe contener letras sin espacios",
        minlength: "Tu Nombre debe contener al menos 2 caracteres"
      },
      apel1_usua: {
        required: "Ingrese su Primer Apellido",
        lettersonly: "Tu Apellido solo debe contener letras sin espacios",
        minlength: "Tu Apellido debe contener al menos 2 caracteres"
      },
      apel2_usua: {
        lettersonly: "Tu Apellido solo debe contener letras sin espacio",
        minlength: "Tu Apellido debe contener al menos 2 caracteres"
      },
      telef_usua: {
        required: "Ingrese un Número de Teléfono Valido",
        number: "Ingrese un Número de Teléfono Valido",
        minlength: "Ingrese un Número de Teléfono Valido"
      }
    },

    errorElement: "em",
    errorPlacement: function ( error, element ) {
      // Add the `invalid-feedback` class to the error element
      error.addClass( "invalid-feedback" );

      if ( element.prop( "type" ) === "checkbox" ) {
        error.insertAfter( element.next( "label" ) );
      } else {
        error.insertAfter( element );
      }
    },
    highlight: function ( element, errorClass, validClass ) {
      $( element ).addClass( "is-invalid" ).removeClass( "is-valid" );
    },
    unhighlight: function (element, errorClass, validClass) {
      $( element ).addClass( "is-valid" ).removeClass( "is-invalid" );
    }
});
</script>
