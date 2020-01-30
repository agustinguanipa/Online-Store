<?php
	
	require_once ("../../paginas/conexion_bd.php");

  $nombr_prov = mysqli_real_escape_string($con,(strip_tags($_POST["nombr_prov"],ENT_QUOTES)));
  $telef_prov = mysqli_real_escape_string($con,(strip_tags($_POST["telef_prov"],ENT_QUOTES)));
  $email_prov = mysqli_real_escape_string($con,(strip_tags($_POST["email_prov"],ENT_QUOTES)));
  $direc_prov = mysqli_real_escape_string($con,(strip_tags($_POST["direc_prov"],ENT_QUOTES)));
	$statu_prov = 1;

    $sql = "INSERT INTO tabma_prov(nombr_prov, telef_prov, email_prov, direc_prov, statu_prov) VALUES ('$nombr_prov','$telef_prov','$email_prov','$direc_prov','$statu_prov')";
    
    $query = mysqli_query($con,$sql);
    if ($query) {
        $messages[] = "El Proveedor ha sido registrado con éxito.";
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