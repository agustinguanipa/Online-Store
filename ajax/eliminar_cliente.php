<?php
	if (empty($_POST['delete_id'])){
		$errors[] = "ID Vacio.";
	} elseif (!empty($_POST['delete_id'])){

	require_once ("../paginas/conexion_bd.php");//Contiene Funcion que Conecta a la Base de Datos
	// escaping, additionally removing everything that could be (html/javascript-) code
  $id_cliente=intval($_POST['delete_id']);
	
	// Borrado Logico de la Base de Datos FROM
    $sql = "UPDATE tabla_clie SET statu_clie = 0 WHERE ident_clie='$id_cliente'";
    $query = mysqli_query($con,$sql);
    // Si el Borrado ha sido Exitoso
    if ($query) {
        $messages[] = "El cliente ha sido eliminado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la eliminación falló. Por favor, regrese y vuelva a intentarlo.";
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