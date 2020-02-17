<?php 
session_start();

include_once '../../paginas/conexion_bd.php';

$ident_usua = $_SESSION['ident_usua'];
$ident_tipo = $_SESSION["ident_tipo"];
$actual = md5($_POST['txtPassUser']);
$nueva = md5($_POST['txtNewPassUser']);
$confirmacion = $_POST['txtPassConfirm'];
 
	$query_user = mysqli_query($con,"SELECT * FROM tabma_usua WHERE contr_usua = '$actual' AND ident_usua = '$ident_usua'");
	$result_user = mysqli_num_rows($query_user);

	if ($result_user > 0)
	{
		$query_update = mysqli_query($con,"UPDATE tabma_usua SET contr_usua = '$nueva' WHERE ident_usua = '$ident_usua'");

		if ($query_update) 
		{
			$_SESSION['message'] = '<b>¡Bien Hecho!</b> La Contraseña ha sido Actualizada con Éxito';
		}

		}else{
			$_SESSION['error'] = '<b>¡Ocurrió un Error!</b> La Contraseña no Coincide con la Actual';
		}
		
		if ($ident_tipo == 4) {
	    header('location: ../../paginas/cliente/cliente_configuracion.php');
	  }else
	    header('location: ../../paginas/administrador/admin_cuenta.php');
 ?>

