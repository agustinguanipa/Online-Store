<?php
	if (empty($_POST['edit_id'])){
		$errors[] = "ID está vacío.";
	} elseif (!empty($_POST['edit_id'])){

	require_once ("../../paginas/conexion_bd.php");

	$ident_cate = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ident_cate"],ENT_QUOTES)));
	$ident_prov = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ident_prov"],ENT_QUOTES)));
  $nombr_prod = mysqli_real_escape_string($con,(strip_tags($_POST["edit_nombr_prod"],ENT_QUOTES)));
  $desco_prod = mysqli_real_escape_string($con,(strip_tags($_POST["edit_desco_prod"],ENT_QUOTES)));
  $desla_prod = mysqli_real_escape_string($con,(strip_tags($_POST["edit_desla_prod"],ENT_QUOTES)));
  $preci_prod = mysqli_real_escape_string($con,(strip_tags($_POST["edit_preci_prod"],ENT_QUOTES)));
  $pesoo_prod = mysqli_real_escape_string($con,(strip_tags($_POST["edit_pesoo_prod"],ENT_QUOTES)));
  $taman_prod = mysqli_real_escape_string($con,(strip_tags($_POST["edit_taman_prod"],ENT_QUOTES)));
  $stock_prod = mysqli_real_escape_string($con,(strip_tags($_POST["edit_stock_prod"],ENT_QUOTES)));
  $estad_prod = mysqli_real_escape_string($con,(strip_tags($_POST["edit_estad_prod"],ENT_QUOTES)));
	$ident_prod=$_POST['edit_id'];

    $sql = "UPDATE tabma_prod SET ident_cate='".$ident_cate."', ident_prov='".$ident_prov."', nombr_prod='".$nombr_prod."', desco_prod='".$desco_prod."', desla_prod='".$desla_prod."', preci_prod='".$preci_prod."', pesoo_prod='".$pesoo_prod."', taman_prod='".$taman_prod."', stock_prod='".$stock_prod."', estad_prod='".$estad_prod."' WHERE ident_prod='".$ident_prod."' ";
    $query = mysqli_query($con,$sql);
    
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
		<script type="text/javascript">
			$(".alert").delay(2000).slideUp(200, function() {
      $(this).alert('close');
    });
		</script>
		<?php
	}
?>			