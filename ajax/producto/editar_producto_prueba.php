<?php
session_start();

include_once '../../paginas/conexion_bd.php';

	$ident_producto = $_GET["ident_prod"];
  $nombr_prod = mysqli_real_escape_string($con,(strip_tags($_POST["nombr_prod"],ENT_QUOTES)));
  

     $sql = "UPDATE tabma_prod SET nombr_prod='$nombr_prod' WHERE ident_prod='$ident_producto'";
 

    $query = mysqli_query($con,$sql);

    $_SESSION['message'] = '<b>¡Bien Hecho!</b> El Usuario ha sido Actualizado con Éxito';
  
	
    header('location: ../../paginas/administrador/admin_productos.php');
?>