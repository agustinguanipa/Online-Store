<?php
	session_start();
	include_once('conexion_bd.php');

	if(isset($_POST['edit'])){
		$database = new Connection();
		$db = $database->open();
		try{
			$ident_clie = $_GET['ident_clie'];
			$nomb1_clie = $_POST['nomb1_clie'];
			$nomb2_clie = $_POST['nomb2_clie'];
			$apel1_clie = $_POST['apel1_clie'];
			$apel2_clie = $_POST['apel2_clie'];
			$gener_clie = $_POST['gener_clie'];
			$telef_clie = $_POST['telef_clie'];
			$usuar_clie = $_POST['usuar_clie'];

			$sql = "UPDATE tabla_clie SET 
			nomb1_clie = '$nomb1_clie',
			nomb2_clie = '$nomb2_clie',
			apel1_clie = '$apel1_clie',
			apel2_clie = '$apel2_clie',
			gener_clie = '$gener_clie',
			telef_clie = '$telef_clie',
			usuar_clie = '$usuar_clie'
			WHERE ident_clie = '$ident_clie'";
			//if-else statement in executing our query
			$_SESSION['message'] = ( $db->exec($sql) ) ? 'Member updated successfully' : 'Something went wrong. Cannot update member';

		}
		catch(PDOException $e){
			$_SESSION['message'] = $e->getMessage();
		}

		//close connection
		$database->close();
	}
	else{
		$_SESSION['message'] = 'Fill up edit form first';
	}

	header('location: admin_clientes.php');

?>