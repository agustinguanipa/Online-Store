<?php
	
	require_once ("../paginas/conexion_bd.php"); //Contiene Funcion que Conecta a la Base de Datos

	// escaping, additionally removing everything that could be (html/javascript-) code
  $nombr_prod = mysqli_real_escape_string($con,(strip_tags($_POST["nombr_prod"],ENT_QUOTES)));
  $desco_prod = mysqli_real_escape_string($con,(strip_tags($_POST["desco_prod"],ENT_QUOTES)));
  $desla_prod = mysqli_real_escape_string($con,(strip_tags($_POST["desla_prod"],ENT_QUOTES)));
  $preci_prod = mysqli_real_escape_string($con,(strip_tags($_POST["preci_prod"],ENT_QUOTES)));
  $pesoo_prod = mysqli_real_escape_string($con,(strip_tags($_POST["pesoo_prod"],ENT_QUOTES)));
  $taman_prod = mysqli_real_escape_string($con,(strip_tags($_POST["taman_prod"],ENT_QUOTES)));
  $stock_prod = mysqli_real_escape_string($con,(strip_tags($_POST["stock_prod"],ENT_QUOTES)));
  $estad_prod = mysqli_real_escape_string($con,(strip_tags($_POST["estad_prod"],ENT_QUOTES)));
  $imag1_prod = mysqli_real_escape_string($con,(strip_tags($_POST["imag1_prod"],ENT_QUOTES)));
  $imag2_prod = mysqli_real_escape_string($con,(strip_tags($_POST["imag2_prod"],ENT_QUOTES)));
  $imag3_prod = mysqli_real_escape_string($con,(strip_tags($_POST["imag3_prod"],ENT_QUOTES)));
	$statu_prod = 1;

	// Registrar en la Base de Datos
    $sql = "INSERT INTO tabma_prod(nombr_prod, desco_prod, desla_prod, preci_prod, pesoo_prod, taman_prod, stock_prod, estad_prod, imag1_prod, imag2_prod, imag3_prod, statu_prod) VALUES ('$nombr_prod','$desco_prod','$desla_prod','$preci_prod','$pesoo_prod','$taman_prod','$stock_prod','$estad_prod','$imag1_prod','$imag2_prod','$imag3_prod','$statu_prod')";
    
    $query = mysqli_query($con,$sql);
    // Si ha sido Agregado Exitosamentee
    if ($query) {
        $messages[] = "El prodnte ha sido registrado con éxito.";
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
		<?php
	}
?>			