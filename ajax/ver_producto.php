<?php
	if (empty($_POST['look_id'])){
		$errors[] = "ID está vacío.";
	} elseif (!empty($_POST['look_id'])){

	require_once ("../paginas/conexion_bd.php");//Contiene Funcion que Conecta a la Base de Datos

	// escaping, additionally removing everything that could be (html/javascript-) code
  $ident_cate = mysqli_real_escape_string($con,(strip_tags($_POST["look_ident_cate"],ENT_QUOTES)));
  $nombr_prod = mysqli_real_escape_string($con,(strip_tags($_POST["look_nombr_prod"],ENT_QUOTES)));
  $desco_prod = mysqli_real_escape_string($con,(strip_tags($_POST["look_desco_prod"],ENT_QUOTES)));
  $desla_prod = mysqli_real_escape_string($con,(strip_tags($_POST["look_desla_prod"],ENT_QUOTES)));
  $preci_prod = mysqli_real_escape_string($con,(strip_tags($_POST["look_preci_prod"],ENT_QUOTES)));
  $pesoo_prod = mysqli_real_escape_string($con,(strip_tags($_POST["look_pesoo_prod"],ENT_QUOTES)));
  $taman_prod = mysqli_real_escape_string($con,(strip_tags($_POST["look_taman_prod"],ENT_QUOTES)));
  $stock_prod = mysqli_real_escape_string($con,(strip_tags($_POST["look_stock_prod"],ENT_QUOTES)));
  $estad_prod = mysqli_real_escape_string($con,(strip_tags($_POST["look_estad_prod"],ENT_QUOTES)));
	$ident_prod=intval($_POST['look_id']);

	// Ver en la Base de Datos
    $sql = "SELECT FROM tabma_prod SET ident_cate='".$ident_cate."', nombr_prod='".$nombr_prod."', desco_prod='".$desco_prod."', desla_prod='".$desla_prod."', preci_prod='".$preci_prod."', pesoo_prod='".$pesoo_prod."', taman_prod='".$taman_prod."', stock='".$stock."', estad_prod='".$estad_prod."' WHERE ident_prod='".$ident_prod."' ";
    $query = mysqli_query($con,$sql);
    // Si ha sido Actualizado Exitosamente
    if ($query) {
        $messages[] = "El producto ha sido actualizado con éxito.";
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