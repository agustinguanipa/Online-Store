<?php
	if (empty($_POST['delete_id'])){
		$errors[] = "ID Vacio.";
	} elseif (!empty($_POST['delete_id'])){

	require_once ("../paginas/conexion_bd.php");//Contiene Funcion que Conecta a la Base de Datos
	// escaping, additionally removing everything that could be (html/javascript-) code
  $id_categoria=intval($_POST['delete_id']);
	
	// Borrado Logico de la Base de Datos FROM
    $sql = "UPDATE tabma_cate SET statu_cate = 0 WHERE ident_cate='$id_categoria'";
    $query = mysqli_query($con,$sql);
    // Si el Borrado ha sido Exitoso
    if ($query) {
        $messages[] = "La categoria ha sido desactivada con éxito.";
    } else {
        $errors[] = "Lo sentimos, la desactivación falló. Por favor, regrese y vuelva a intentarlo.";
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