<?php
	if (empty($_POST['restaurar_id'])){
		$errors[] = "ID Vacio.";
	} elseif (!empty($_POST['restaurar_id'])){

	require_once ("../paginas/conexion_bd.php");//Contiene Funcion que Conecta a la Base de Datos
	// escaping, additionally removing everything that could be (html/javascript-) code
  $id_proveedor=intval($_POST['restaurar_id']);
	
	// Borrado Logico de la Base de Datos FROM
    $sql = "UPDATE tabma_prov SET statu_prov = 1 WHERE ident_prov='$id_proveedor'";
    $query = mysqli_query($con,$sql);
    // Si el Borrado ha sido Exitoso
    if ($query) {
        $messages[] = "El Proveedor ha sido restaurado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la restauración falló. Por favor, regrese y vuelva a intentarlo.";
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