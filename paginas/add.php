<?php
	session_start();
	include_once('conexion_bd.php');

	if(isset($_POST['add'])){
		$database = new Connection();
		$db = $database->open();
		try{
			//make use of prepared statement to prevent sql injection
			$stmt = $db->prepare("INSERT INTO tabla_clie (nomb1_clie, apel1_clie, usuar_clie) VALUES (:nomb1_clie, :apel1_clie, :usuar_clie)");
			//if-else statement in executing our prepared statement
			$_SESSION['message'] = ( $stmt->execute(array(':nomb1_clie' => $_POST['nomb1_clie'] , ':apel1_clie' => $_POST['apel1_clie'] , ':usuar_clie' => $_POST['usuar_clie'])) ) ? 'Member added successfully' : 'Something went wrong. Cannot add member';	
	    
		}
		catch(PDOException $e){
			$_SESSION['message'] = $e->getMessage();
		}

		//close connection
		$database->close();
	}

	else{
		$_SESSION['message'] = 'Fill up add form first';
	}

	header('location: admin_clientes.php');
	
?>