<?php
	
		
	require_once ("../paginas/conexion_bd.php");//Contiene Funcion que Conecta a la Base de Datos

	// escaping, additionally removing everything that could be (html/javascript-) code
  $nomb1_clie = mysqli_real_escape_string($con,(strip_tags($_POST["nomb1_clie"],ENT_QUOTES)));
  $nomb2_clie = mysqli_real_escape_string($con,(strip_tags($_POST["nomb2_clie"],ENT_QUOTES)));
  $apel1_clie = mysqli_real_escape_string($con,(strip_tags($_POST["apel1_clie"],ENT_QUOTES)));
  $apel2_clie = mysqli_real_escape_string($con,(strip_tags($_POST["apel2_clie"],ENT_QUOTES)));
  $gener_clie = mysqli_real_escape_string($con,(strip_tags($_POST["gener_clie"],ENT_QUOTES)));
  $telef_clie = mysqli_real_escape_string($con,(strip_tags($_POST["telef_clie"],ENT_QUOTES)));
  $email_clie = mysqli_real_escape_string($con,(strip_tags($_POST["email_clie"],ENT_QUOTES)));
  $usuar_clie = mysqli_real_escape_string($con,(strip_tags($_POST["usuar_clie"],ENT_QUOTES)));
  $contr_clie = mysqli_real_escape_string($con,(strip_tags($_POST["contr_clie"],ENT_QUOTES)));
  $fecre_clie = date('Y-m-d', $timestamp = time());
	$statu_clie = 1;

	// Registrar en la Base de Datos
    $sql = "INSERT INTO tabma_clie(nomb1_clie, nomb2_clie, apel1_clie, apel2_clie, gener_clie, telef_clie, email_clie, usuar_clie, contr_clie, fecre_clie, statu_clie) VALUES ('$nomb1_clie','$nomb2_clie','$apel1_clie','$apel2_clie','$gener_clie','$telef_clie','$email_clie','$usuar_clie','$contr_clie','$fecre_clie','$statu_clie')";
    
    $query = mysqli_query($con,$sql);
    // Si ha sido Agregado Exitosamentee
    if ($query) {
        $messages[] = "El cliente ha sido registrado con éxito.";
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
		<?php
	}
?>			