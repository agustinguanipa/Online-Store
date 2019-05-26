<?php
	if (empty($_POST['nomb1_clie'])){
		$errors[] = "Ingresa el nombre del producto.";
	} elseif (!empty($_POST['nomb1_clie'])){
	require_once ("../paginas/conexion_bd.php");//Contiene funcion que conecta a la base de datos
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
	
	// REGISTER data into database
    $sql = "INSERT INTO tabla_clie(nomb1_clie, nomb2_clie, apel1_clie, apel2_clie, gener_clie, telef_clie, email_clie, usuar_clie, contr_clie) VALUES ('$nomb1_clie','$nomb2_clie','$apel1_clie','$apel2_clie','$gener_clie','$telef_clie','$email_clie','$usuar_clie','$contr_clie'";
    
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "El producto ha sido guardado con éxito.";
    } else {
        $errors[] = "Lo sentimos, el registro falló. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
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