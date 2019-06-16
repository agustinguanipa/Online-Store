<?php
	
	require_once ("../paginas/conexion_bd.php");//Contiene Funcion que Conecta a la Base de Datos

	// escaping, additionally removing everything that could be (html/javascript-) code
  $nomb1_admi = mysqli_real_escape_string($con,(strip_tags($_POST["nomb1_admi"],ENT_QUOTES)));
  $nomb2_admi = mysqli_real_escape_string($con,(strip_tags($_POST["nomb2_admi"],ENT_QUOTES)));
  $apel1_admi = mysqli_real_escape_string($con,(strip_tags($_POST["apel1_admi"],ENT_QUOTES)));
  $apel2_admi = mysqli_real_escape_string($con,(strip_tags($_POST["apel2_admi"],ENT_QUOTES)));
  $usuar_admi = mysqli_real_escape_string($con,(strip_tags($_POST["usuar_admi"],ENT_QUOTES)));
  $contr_admi = mysqli_real_escape_string($con,(strip_tags($_POST["contr_admi"],ENT_QUOTES)));
	$statu_admi = 1;

	// Registrar en la Base de Datos
    $sql = "INSERT INTO tabma_admi(nomb1_admi, nomb2_admi, apel1_admi, apel2_admi, usuar_admi, contr_admi, statu_admi) VALUES ('$nomb1_admi','$nomb2_admi','$apel1_admi','$apel2_admi','$usuar_admi','$contr_admi','$statu_admi')";
    
    $query = mysqli_query($con,$sql);
    // Si ha sido Agregado Exitosamentee
    if ($query) {
        $messages[] = "El administrador ha sido registrado con éxito.";
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