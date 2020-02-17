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
<!--- Bootstrap 4 File Style 2 --->
<script type="text/javascript" src="../../libs/bootstrap-filestyle-2.1.0/src/bootstrap-filestyle.min.js"> </script>

<?php
include_once '../../paginas/conexion_bd.php';

$query_user = mysqli_query($con,"SELECT * FROM tabma_prod WHERE ident_prod = $ident_producto");
    
$result_user = mysqli_num_rows($query_user);

$data_user = mysqli_fetch_array($query_user);

  $ident_producto = $data_user['ident_prod'];
  $nombr_prod = $data_user['nombr_prod'];
  
?>

<!-- Modal Edit Producto -->

<div class="modal fade" id="edit_<?php echo $ident_producto; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form id="edit" class="justify-content-center" align="center" method="post" action="../../ajax/producto/editar_producto_prueba.php?id=<?php echo $ident_producto; ?>" enctype="multipart/form-data">
        <div class="modal-header">            
          <h4 class="modal-title">Editar Producto</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
               
          <div class="form-row">
            <div class="col form-group">
              <input type="hidden" name="edit_id" id="edit_id">
              <label class="form-label" for="nombr_prod"><b>Nombre: </b></label>
              <input type="text" class="form-control" name="nombr_prod" autocomplete="off" id="nombr_prod" placeholder="" maxlength="50" onkeyup="this.value = this.value.toUpperCase();" value="<?php echo $nombr_prod; ?>" required>
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
      nombr_prod: {
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
      nombr_prod: {
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

// Imagen de Perfil

function triggerClick(e) {
  document.querySelector('#image_usua').click();
}
function displayImage(e) {
  if (e.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e){
      document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
    }
    reader.readAsDataURL(e.files[0]);
  }
}
</script>


