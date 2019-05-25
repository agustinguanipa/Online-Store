<?php
	session_start();
	include_once('conexion_bd.php');

	if(isset($_POST['add'])){
		$database = new Connection();
		$db = $database->open();
		try{
			//make use of prepared statement to prevent sql injection
			$stmt = $db->prepare("INSERT INTO tabla_clie (nomb1_clie, nomb2_clie, apel1_clie, apel2_clie, gener_clie, telef_clie, email_clie, usuar_clie, contr_clie, fecre_clie, statu_clie) VALUES (:nomb1_clie, :nomb2_clie, :apel1_clie, :apel2_clie, :gener_clie, :telef_clie, :email_clie, :usuar_clie, :contr_clie, :fecre_clie, :statu_clie)");
			//if-else statement in executing our prepared statement
			$fecre_clie = date('Y-m-d', $timestamp);
			$_SESSION['message'] = ( $stmt->execute(array(
				':nomb1_clie' => $_POST['nomb1_clie'], 
				':nomb2_clie' => $_POST['nomb2_clie'], 
				':apel1_clie' => $_POST['apel1_clie'], 
				':apel2_clie' => $_POST['apel2_clie'], 
				':gener_clie' => $_POST['gener_clie'], 
				':telef_clie' => $_POST['telef_clie'], 
				':email_clie' => $_POST['email_clie'], 
				':usuar_clie' => $_POST['usuar_clie'], 
				':contr_clie' => $_POST['contr_clie'],
				':fecre_clie' => date('Y-m-d', $timestamp = time()),
				':statu_clie' => 1
			)) ) ? 'Member added successfully' : 'Something went wrong. Cannot add member';	
	    
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