<?php
	
	require_once ("../paginas/conexion_bd.php"); //Contiene Funcion que Conecta a la Base de Datos

	// escaping, additionally removing everything that could be (html/javascript-) code

	$ident_prod = mysqli_real_escape_string($con,(strip_tags($_POST["ident_prod"],ENT_QUOTES)));
	$ident_cate = mysqli_real_escape_string($con,(strip_tags($_POST["ident_cate"],ENT_QUOTES)));
	$nombr_prod = mysqli_real_escape_string($con,(strip_tags($_POST["nombr_prod"],ENT_QUOTES)));
	$desco_prod = mysqli_real_escape_string($con,(strip_tags($_POST["desco_prod"],ENT_QUOTES)));
	$desla_prod = mysqli_real_escape_string($con,(strip_tags($_POST["desla_prod"],ENT_QUOTES)));
	$preci_prod = mysqli_real_escape_string($con,(strip_tags($_POST["preci_prod"],ENT_QUOTES)));
	$pesoo_prod = mysqli_real_escape_string($con,(strip_tags($_POST["pesoo_prod"],ENT_QUOTES)));
	$taman_prod = mysqli_real_escape_string($con,(strip_tags($_POST["taman_prod"],ENT_QUOTES)));
	$stock_prod = mysqli_real_escape_string($con,(strip_tags($_POST["stock_prod"],ENT_QUOTES)));
	$estad_prod = mysqli_real_escape_string($con,(strip_tags($_POST["estad_prod"],ENT_QUOTES)));
	$imag1_prod = $_FILES['imag1_prod']['name'];
	$ruta1 = $_FILES['imag1_prod']['tmp_name'];
	$destino1 = "../imagen/productos/".$imag1_prod;
	copy($ruta1,$destino1);
	$imag2_prod = $_FILES['imag2_prod']['name'];
	$ruta2 = $_FILES['imag2_prod']['tmp_name'];
	$destino2 = "../imagen/productos/".$imag2_prod;
	copy($ruta2,$destino2);
	$imag3_prod = $_FILES['imag3_prod']['name'];
	$ruta3 = $_FILES['imag3_prod']['tmp_name'];
	$destino3 = "../imagen/productos/".$imag3_prod;
	copy($ruta3,$destino3);

	$statu_prod = 1;

	// Registrar en la Base de Datos
	$sql = "INSERT INTO tabma_prod(ident_prod, ident_cate, nombr_prod, desco_prod, desla_prod, preci_prod, pesoo_prod, taman_prod, stock_prod, estad_prod, imag1_prod, imag2_prod, imag3_prod,statu_prod) VALUES ('$ident_prod',(SELECT ident_cate FROM tabma_cate WHERE ident_cate = '$ident_cate'),'$nombr_prod','$desco_prod','$desla_prod','$preci_prod','$pesoo_prod','$taman_prod','$stock_prod','$estad_prod','$destino1','$destino2','$destino3','$statu_prod') ";

    $query = mysqli_query($con,$sql);

    // Si ha sido Agregado Exitosamentee
    if ($query) {
        $messages[] = "El producto ha sido registrado con éxito.";
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
						ini_set('display_errors', 1); ini_set('html_errors', 0);ini_set('log_errors',-1); error_reporting(E_ALL);
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