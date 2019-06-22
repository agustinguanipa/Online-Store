<?php
	if (empty($_POST['edit_id'])){
		$errors[] = "ID está vacío.";
	} elseif (!empty($_POST['edit_id'])){

	require_once ("../paginas/conexion_bd.php");//Contiene Funcion que Conecta a la Base de Datos

	// escaping, additionally removing everything that could be (html/javascript-) code
  $nomb1_admi = mysqli_real_escape_string($con,(strip_tags($_POST["edit_nomb1_admi"],ENT_QUOTES)));
  $nomb2_admi = mysqli_real_escape_string($con,(strip_tags($_POST["edit_nomb2_admi"],ENT_QUOTES)));
  $apel1_admi = mysqli_real_escape_string($con,(strip_tags($_POST["edit_apel1_admi"],ENT_QUOTES)));
  $apel2_admi = mysqli_real_escape_string($con,(strip_tags($_POST["edit_apel2_admi"],ENT_QUOTES)));
	$ident_admi=intval($_POST['edit_id']);

	// Actualizar en la Base de Datos
    $sql = "UPDATE tabma_admi SET nomb1_admi='".$nomb1_admi."', nomb2_admi='".$nomb2_admi."', apel1_admi='".$apel1_admi."', apel2_admi='".$apel2_admi."' WHERE ident_admi='".$ident_admi."' ";
    $query = mysqli_query($con,$sql);
    // Si ha sido Actualizado Exitosamente
    if ($query) {
        $messages[] = "El Administrador ha sido actualizado con éxito.";
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
		<script type="text/javascript">
			$(".alert").delay(2000).slideUp(200, function() {
      $(this).alert('close');
    });
		</script>
		<?php
	}
?>			