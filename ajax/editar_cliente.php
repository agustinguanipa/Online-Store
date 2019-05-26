<?php
	if (empty($_POST['edit_id'])){
		$errors[] = "ID está vacío.";
	} elseif (!empty($_POST['edit_id'])){

	require_once ("../paginas/conexion_bd.php");//Contiene Funcion que Conecta a la Base de Datos

	// escaping, additionally removing everything that could be (html/javascript-) code
  $nomb1_clie = mysqli_real_escape_string($con,(strip_tags($_POST["edit_nomb1_clie"],ENT_QUOTES)));
  $nomb2_clie = mysqli_real_escape_string($con,(strip_tags($_POST["edit_nomb2_clie"],ENT_QUOTES)));
  $apel1_clie = mysqli_real_escape_string($con,(strip_tags($_POST["edit_apel1_clie"],ENT_QUOTES)));
  $apel2_clie = mysqli_real_escape_string($con,(strip_tags($_POST["edit_apel2_clie"],ENT_QUOTES)));
  $gener_clie = mysqli_real_escape_string($con,(strip_tags($_POST["edit_gener_clie"],ENT_QUOTES)));
  $telef_clie = mysqli_real_escape_string($con,(strip_tags($_POST["edit_telef_clie"],ENT_QUOTES)));
  $email_clie = mysqli_real_escape_string($con,(strip_tags($_POST["edit_email_clie"],ENT_QUOTES)));
  $usuar_clie = mysqli_real_escape_string($con,(strip_tags($_POST["edit_usuar_clie"],ENT_QUOTES)));
	$ident_clie=intval($_POST['edit_id']);

	// Actualizar en la Base de Datos
    $sql = "UPDATE tabla_clie SET nomb1_clie='".$nomb1_clie."', nomb2_clie='".$nomb2_clie."', apel1_clie='".$apel1_clie."', apel2_clie='".$apel2_clie."', gener_clie='".$gener_clie."', telef_clie='".$telef_clie."', email_clie='".$email_clie."', usuar_clie='".$usuar_clie."' WHERE ident_clie='".$ident_clie."' ";
    $query = mysqli_query($con,$sql);
    // Si ha sido Actualizado Exitosamente
    if ($query) {
        $messages[] = "El cliente ha sido actualizado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la actualización falló. Por favor, regrese y vuelva a intentarlo.";
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