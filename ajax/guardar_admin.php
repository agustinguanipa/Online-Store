<?php
	
	require_once ("../paginas/conexion_bd.php");//Contiene Funcion que Conecta a la Base de Datos

	// escaping, additionally removing everything that could be (html/javascript-) code
  $nomb1_usua = mysqli_real_escape_string($con,(strip_tags($_POST["nomb1_usua"],ENT_QUOTES)));
  $nomb2_usua = mysqli_real_escape_string($con,(strip_tags($_POST["nomb2_usua"],ENT_QUOTES)));
  $apel1_usua = mysqli_real_escape_string($con,(strip_tags($_POST["apel1_usua"],ENT_QUOTES)));
  $apel2_usua = mysqli_real_escape_string($con,(strip_tags($_POST["apel2_usua"],ENT_QUOTES)));
  $gener_usua = mysqli_real_escape_string($con,(strip_tags($_POST["gener_usua"],ENT_QUOTES)));
  $telef_usua = mysqli_real_escape_string($con,(strip_tags($_POST["telef_usua"],ENT_QUOTES)));
  $email_usua = mysqli_real_escape_string($con,(strip_tags($_POST["email_usua"],ENT_QUOTES)));
  $usuar_usua = mysqli_real_escape_string($con,(strip_tags($_POST["usuar_usua"],ENT_QUOTES)));
  $contr_usua = md5(mysqli_real_escape_string($con,(strip_tags($_POST["contr_usua"],ENT_QUOTES))));
	$statu_usua = 1;
	$ident_tipo = mysqli_real_escape_string($con,(strip_tags($_POST["ident_tipo"],ENT_QUOTES)));

	// Registrar en la Base de Datos
    $sql = "INSERT INTO tabma_usua(nomb1_usua, nomb2_usua, apel1_usua, apel2_usua, gener_usua, telef_usua, email_usua, usuar_usua, contr_usua, statu_usua, ident_tipo) VALUES ('$nomb1_usua','$nomb2_usua','$apel1_usua','$apel2_usua','$gener_usua','$telef_usua','$email_usua','$usuar_usua','$contr_usua','$statu_usua','$ident_tipo')";
    
    $query = mysqli_query($con,$sql);
    // Si ha sido Agregado Exitosamentee
    if ($query) {
        $messages[] = "El Usuario ha sido registrado con éxito.";
    } else {
        $errors[] = "Lo sentimos, el registro falló. Por favor, regrese y vuelva a intentarlo.";
    }
		
	
if (isset($errors)){		
	?>
	<div class="alert alert-danger" role="alert">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Error!</strong> 
			<?php
				foreach ($errors as $error) {
						echo $error;
					}
				?>
	</div>
	<?php
	}
	if (isset($messages)){
		?>
		<div class="alert alert-success" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<strong>¡Bien hecho!</strong>
				<?php
					foreach ($messages as $message) {
							echo $message;
						}
					?>
		</div>
		<script type="text/javascript">
			$(".alert").delay(2000).slideUp(200, function() {
      $(this).alert('close');
    });
		</script>
		<?php
	}
?>			