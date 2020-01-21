<?php
	if (empty($_POST['look_id'])){
		$errors[] = "ID está vacío.";
	} elseif (!empty($_POST['look_id'])){

	require_once ("../paginas/conexion_bd.php");//Contiene Funcion que Conecta a la Base de Datos

	// escaping, additionally removing everything that could be (html/javascript-) code
  $nomb1_usua = mysqli_real_escape_string($con,(strip_tags($_POST["look_nomb1_usua"],ENT_QUOTES)));
  $nomb2_usua = mysqli_real_escape_string($con,(strip_tags($_POST["look_nomb2_usua"],ENT_QUOTES)));
  $apel1_usua = mysqli_real_escape_string($con,(strip_tags($_POST["look_apel1_usua"],ENT_QUOTES)));
  $apel2_usua = mysqli_real_escape_string($con,(strip_tags($_POST["look_apel2_usua"],ENT_QUOTES)));
  $gener_usua = mysqli_real_escape_string($con,(strip_tags($_POST["look_gener_usua"],ENT_QUOTES)));
  $telef_usua = mysqli_real_escape_string($con,(strip_tags($_POST["look_telef_usua"],ENT_QUOTES)));
  $email_usua = mysqli_real_escape_string($con,(strip_tags($_POST["look_email_usua"],ENT_QUOTES)));
  $usuar_usua = mysqli_real_escape_string($con,(strip_tags($_POST["look_usuar_usua"],ENT_QUOTES)));
  $fecre_usua = date("Y-m-d");
	$ident_usua=intval($_POST['look_id']);

	// Ver en la Base de Datos
    $sql = "SELECT FROM tabma_usua SET nomb1_usua='".$nomb1_usua."', nomb2_usua='".$nomb2_usua."', apel1_usua='".$apel1_usua."', apel2_usua='".$apel2_usua."', gener_usua='".$gener_usua."', telef_usua='".$telef_usua."', email_usua='".$email_usua."', usuar_usua='".$usuar_usua."', fecre_usua='".$fecre_usua."' WHERE ident_usua='".$ident_usua."' ";
    $query = mysqli_query($con,$sql);
    // Si ha sido Actualizado Exitosamente
    if ($query) {
        $messages[] = "El Cliente ha sido actualizado con éxito.";
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