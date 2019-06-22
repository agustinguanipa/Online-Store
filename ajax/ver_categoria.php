<?php
	if (empty($_POST['look_id'])){
		$errors[] = "ID está vacío.";
	} elseif (!empty($_POST['look_id'])){

	require_once ("../paginas/conexion_bd.php");//Contiene Funcion que Conecta a la Base de Datos

	// escaping, additionally removing everything that could be (html/javascript-) code
  $nombr_cate = mysqli_real_escape_string($con,(strip_tags($_POST["look_nombr_cate"],ENT_QUOTES)));
	$ident_cate=intval($_POST['look_id']);

	// Ver en la Base de Datos
    $sql = "SELECT FROM tabma_cate SET nombr_cate='".$nombr_cate."', WHERE ident_cate='".$ident_cate."' ";
    $query = mysqli_query($con,$sql);
    // Si ha sido Actualizado Exitosamente
    if ($query) {
        $messages[] = "La categoría ha sido actualizada con éxito.";
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