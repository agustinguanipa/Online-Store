<?php
session_start();

include_once '../../paginas/conexion_bd.php';

	$ident_usua = $_SESSION["ident_usua"];
  $ident_tipo = $_SESSION["ident_tipo"];
  $nomb1_usua = mysqli_real_escape_string($con,(strip_tags($_POST["nomb1_usua"],ENT_QUOTES)));
  $nomb2_usua = mysqli_real_escape_string($con,(strip_tags($_POST["nomb2_usua"],ENT_QUOTES)));
  $apel1_usua = mysqli_real_escape_string($con,(strip_tags($_POST["apel1_usua"],ENT_QUOTES)));
  $apel2_usua = mysqli_real_escape_string($con,(strip_tags($_POST["apel2_usua"],ENT_QUOTES)));
  $gener_usua = mysqli_real_escape_string($con,(strip_tags($_POST["gener_usua"],ENT_QUOTES)));
  $telef_usua = mysqli_real_escape_string($con,(strip_tags($_POST["telef_usua"],ENT_QUOTES)));
  $image_usua = $_FILES['image_usua']['name'];
  $ruta1 = $_FILES['image_usua']['tmp_name'];
  $destino1 = "../../imagen/perfil/".$image_usua;
  move_uploaded_file($ruta1,$destino1);

  if ($image_usua == '') {
     $sql = "UPDATE tabma_usua SET nomb1_usua='$nomb1_usua', nomb2_usua='$nomb2_usua', apel1_usua='$apel1_usua', apel2_usua='$apel2_usua', gener_usua='$gener_usua', telef_usua='$telef_usua' WHERE ident_usua='$ident_usua'";
  }else
    $sql = "UPDATE tabma_usua SET nomb1_usua='$nomb1_usua', nomb2_usua='$nomb2_usua', apel1_usua='$apel1_usua', apel2_usua='$apel2_usua', gener_usua='$gener_usua', telef_usua='$telef_usua', image_usua='$destino1' WHERE ident_usua='$ident_usua'";

    $query = mysqli_query($con,$sql);

    $_SESSION['message'] = '<b>¡Bien Hecho!</b> El Usuario ha sido Actualizado con Éxito';
  
	if ($ident_tipo == 4) {
    header('location: ../../paginas/cliente/cliente_configuracion.php');
  }else
    header('location: ../../paginas/administrador/admin_cuenta.php');
?>