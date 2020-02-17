<?php require_once('../includes/admin_header.php'); 

$ident_usua = $_SESSION['ident_usua'];

include_once '../../paginas/conexion_bd.php';

$query_user = mysqli_query($con,"SELECT * FROM tabma_usua r RIGHT JOIN tabma_tipo t ON r.ident_tipo = t.ident_tipo WHERE ident_usua = $ident_usua");
    
$result_user = mysqli_num_rows($query_user);

$data_user = mysqli_fetch_array($query_user);

	$ident_usua = $data_user['ident_usua'];
	$ident_tipo = $data_user['ident_tipo'];
	$nombr_tipo = $data_user['nombr_tipo'];
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

<!-- Contenido -->

<div class="container-fluid">
	<div class="table-wrapper">
	    <div class="table-title">
	        <div class="row">
            <div class="col-sm-6">
							<h2>Mi <b>Cuenta</b></h2>
						</div>
						<div class="col-sm-6">
							
						</div>
	        </div>
	    </div>
	    <?php 
				session_start();
				if(isset($_SESSION['message'])){
					?>
					<div class="alert alert-success text-center" style="margin-top:20px;">
						<?php echo $_SESSION['message']; ?>
					</div>
					<?php

					unset($_SESSION['message']);
				}else if(isset($_SESSION['error'])){
					?>
					<div class="alert alert-danger text-center" style="margin-top:20px;">
						<?php echo $_SESSION['error']; ?>
					</div>
					<?php

					unset($_SESSION['error']);
				}
			?>
	    <div class="card-deck">
				<div class="card text-center">
				  <div class="card-header">
				    <b>Configuración</b>
				  </div>
				 <div class="card-body justify-content-center">
			    <h5>Información Personal</h5>
					  <hr class="my-4">
					  <div class="form-row justify-content-center">
							<img class="img-md rounded-circle" src="<?php echo $data_user['image_usua']; ?>" alt="Imagen Perfil">
					  </div>
					  <div class="form-row">
					    <div class="col form-group">
					      <label class="form-label" for="nombr_usua">Nombre: </label><br>
					      <label><?php echo $data_user['nomb1_usua']; ?> <?php echo $data_user['nomb2_usua']; ?></label>
					    </div>
					    <div class="col form-group">
					      <label class="form-label" for="apeli_usua">Apellido: </label><br>
					      <label><?php echo $data_user['apel1_usua']; ?> <?php echo $data_user['apel2_usua']; ?></label>
					    </div>
					  </div>
					  <div class="form-row">
					  	<div class="col form-group">
					      <label class="form-label" for="gener_usua">Género: </label><br>
					      <label><?php echo $data_user['gener_usua']; ?></label>
					    </div>
					    <div class="col form-group">
					      <label class="form-label" for="telef_usua">Teléfono: </label><br>
					      <label><?php echo $data_user['telef_usua']; ?></label>
					    </div>
					    <div class="col form-group">
					      <label class="form-label" for="email_usua">E-Mail: </label><br>
					      <label><?php echo $data_user['email_usua']; ?></label>
					    </div>
					  </div>
				  <h5>Datos Usuario</h5>
				  <hr class="my-4">
				  	<div class="form-row">
					    <div class="col form-group">
					      <label class="form-label" for="usuar_usua">Usuario: </label>
					      <label><?php echo $data_user['usuar_usua']; ?></label>
					    </div>
					  </div>
					  <div class="form-row">
					    <div class="col form-group">
					      <label class="form-label" for="ident_tipo"><b>Tipo de Usuario: </b></label>
					      <label><?php echo $data_user['nombr_tipo']; ?></label>
					    </div>
				  	</div>
					</div>
					<div class="card-footer">
						<a href="#edit_<?php echo $ident_usua; ?>" class="btn btn-block btn-success" data-toggle="modal"><i class="fa fa-edit" data-toggle="tooltip" title="Editar"></i> Editar Datos</a>
						 <?php include('modal_cuenta_editar.php'); ?>
          </div>
			  </div>

				<div class="card text-center">
					<div class="card-header">
				    <b>Cambiar Contraseña</b>
				  </div>
				  <div class="card-body justify-content-center">
				    <div class="form-group text-center">
				      <div class="justify-content-center mx-3 my-1">
				        <form role="form" name="frmChangePass" id="frmChangePass" action="../../ajax/administrador/actualizar_contrasena.php?id=<?php echo $ident_usua; ?>" class="justify-content-center" align="center" method="post">
				          <div class="form-row">
				            <div class="col form-group">
				              <label class="form-label" for="txtPassUser">Contraseña Actual: </label>
				              <input class="form-control" type="password" name="txtPassUser" id="txtPassUser" placeholder="*********" required>
				            </div>
				          </div>
				          <div class="form-row">
				            <div class="col form-group">
				              <label class="form-label" for="txtNewPassUser">Nueva Contraseña: </label>
				              <input class="form-control" type="password" name="txtNewPassUser" id="txtNewPassUser" placeholder="*********" required>
				            </div>
				          </div>
				          <div class="form-row">
				            <div class="col form-group">
				              <label class="form-label" for="txtPassConfirm">Confirmar Contraseña: </label>
				              <input class="form-control" type="password" name="txtPassConfirm" id="txtPassConfirm" placeholder="*********" required>
				            </div>
				          </div>
				          <div class="form-row">
				            <div class="col form-group">
				              <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-key"></i> Cambiar Contraseña</button>
				              <button type="reset" class="btn btn-light btn-block"><i class="fa fa-undo"></i> Limpiar</button>
				            </div>
				          </div>
				        </form>
				      </div> 
				    </div>
			  	</div>
				</div>
			</div>
	</div>
</div>

<?php require_once('../includes/admin_footer.php');  ?>

<script type="text/javascript">
	window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 4000);
</script>

<script type="text/javascript">
	$( document ).ready( function () {
  $( "#frmChangePass" ).validate( {
    rules: {
    	txtPassUser: {
    		required: true,
    		minlength: 4
    	},
      txtNewPassUser: {
        required: true,
        minlength: 4
      },
      txtPassConfirm: {
        required: true,
        minlength: 4,
        equalTo: "#txtNewPassUser"
      }, 
    },

    messages: {
    	txtPassUser: {
    		required: "Ingrese su Contraseña Actual",
        minlength: "Tu Contraseña debe contener al menos 5 caracteres"
    	},
      txtNewPassUser: {
        required: "Ingrese una Contraseña Nueva",
        minlength: "Tu Contraseña debe contener al menos 5 caracteres"
      },
      txtPassConfirm: {
        required: "Ingrese una Contraseña",
        minlength: "Tu Contraseña debe contener al menos 5 caracteres",
        equalTo: "Ingrese la Misma Contraseña"
      },
      
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
  } );

} );

	jQuery.validator.addMethod("lettersonly", function(value, element) {
  return this.optional(element) || /^[A-Z^\s]+$/i.test(value);
}, "Letters only please"); 

</script>


