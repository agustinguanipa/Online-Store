<?php
	if (empty($_POST['edit_id'])){
		$errors[] = "ID está vacío.";
	} elseif (!empty($_POST['edit_id'])){

	require_once ("../../paginas/conexion_bd.php");

  $nombr_prov = mysqli_real_escape_string($con,(strip_tags($_POST["edit_nombr_prov"],ENT_QUOTES)));
  $telef_prov = mysqli_real_escape_string($con,(strip_tags($_POST["edit_telef_prov"],ENT_QUOTES)));
  $email_prov = mysqli_real_escape_string($con,(strip_tags($_POST["edit_email_prov"],ENT_QUOTES)));
  $direc_prov = mysqli_real_escape_string($con,(strip_tags($_POST["edit_direc_prov"],ENT_QUOTES)));
	$ident_prov = intval($_POST['edit_id']);

    $sql = "UPDATE tabma_prov SET nombr_prov='".$nombr_prov."', telef_prov='".$telef_prov."', email_prov='".$email_prov."', direc_prov='".$direc_prov."' WHERE ident_prov='".$ident_prov."' ";
    $query = mysqli_query($con,$sql);
    
    if ($query) {
        $messages[] = "El Proveedor ha sido actualizado con éxito.";
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