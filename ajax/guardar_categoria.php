<?php
	
	require_once ("../paginas/conexion_bd.php"); //Contiene Funcion que Conecta a la Base de Datos

	// escaping, additionally removing everything that could be (html/javascript-) code
  $nombr_cate = mysqli_real_escape_string($con,(strip_tags($_POST["nombr_cate"],ENT_QUOTES)));
	$statu_cate = 1;

	// Registrar en la Base de Datos
    $sql = "INSERT INTO tabma_cate(nombr_cate, statu_cate) VALUES ('$nombr_cate','$statu_cate')";
    
    $query = mysqli_query($con,$sql);
    // Si ha sido Agregado Exitosamentee
    if ($query) {
        $messages[] = "La categoría ha sido registrada con éxito.";
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