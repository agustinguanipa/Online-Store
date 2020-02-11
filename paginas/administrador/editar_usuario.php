<?php
session_start();

include_once '../../paginas/conexion_bd.php';

	$ident_usua = $_SESSION["ident_usua"];
  $nomb1_usua = mysqli_real_escape_string($con,(strip_tags($_POST["nomb1_usua"],ENT_QUOTES)));
  $nomb2_usua = mysqli_real_escape_string($con,(strip_tags($_POST["nomb2_usua"],ENT_QUOTES)));
  $apel1_usua = mysqli_real_escape_string($con,(strip_tags($_POST["apel1_usua"],ENT_QUOTES)));
  $apel2_usua = mysqli_real_escape_string($con,(strip_tags($_POST["apel2_usua"],ENT_QUOTES)));
  $gener_usua = mysqli_real_escape_string($con,(strip_tags($_POST["gener_usua"],ENT_QUOTES)));
  $telef_usua = mysqli_real_escape_string($con,(strip_tags($_POST["telef_usua"],ENT_QUOTES)));

    $sql = "UPDATE tabma_usua SET nomb1_usua='$nomb1_usua', nomb2_usua='$nomb2_usua', apel1_usua='$apel1_usua', apel2_usua='$apel2_usua', gener_usua='$gener_usua', telef_usua='$telef_usua' WHERE ident_usua='$ident_usua'";
    $query = mysqli_query($con,$sql);

    $_SESSION['message'] = '<b>¡Bien Hecho!</b> El Usuario ha sido Actualizado con Éxito';
  
	header('location: admin_cuenta.php');
?>