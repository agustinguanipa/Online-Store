<?php
	session_start();
	include_once('conexion_bd.php');

	if(isset($_GET['ident_clie'])){
		$database = new Connection();
		$db = $database->open();
		try{
			$sql = "DELETE FROM tabla_clie WHERE ident_clie = '".$_GET['ident_clie']."'";
			//if-else statement in executing our query
			$_SESSION['message'] = ( $db->exec($sql) ) ? 'Member deleted successfully' : 'Something went wrong. Cannot delete member';
		}
		catch(PDOException $e){
			$_SESSION['message'] = $e->getMessage();
		}

		//close connection
		$database->close();

	}
	else{
		$_SESSION['message'] = 'Select member to delete first';
	}

	header('location: admin_clientes.php');

?>