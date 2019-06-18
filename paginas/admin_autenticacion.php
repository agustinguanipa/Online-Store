<?php

	echo " <script src='../libs/bootbox/bootbox.min.js'></script>
    <script src='../libs/bootbox/bootbox.locales.min.js'></script>";
	
	session_start();

	require_once ("conexion_bd.php");

	// Try and connect using the info above.

	if ( mysqli_connect_errno() ) {
		// If there is an error with the connection, stop the script and display the error.
		die ('Failed to connect to MySQL: ' . mysqli_connect_error());
	}

	// Now we check if the data from the login form was submitted, isset() will check if the data exists.
	if ( !isset($_POST['usuar_admi'], $_POST['contr_admi']) ) {
		// Could not get the data that should have been sent.
		die ('Please fill both the username and password field!');
	}

	// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
	if ($stmt = $con->prepare('SELECT ident_admi, contr_admi, nomb1_admi, apel1_admi FROM tabma_admi WHERE usuar_admi = ?')) {
		// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
		$stmt->bind_param('s', $_POST['usuar_admi']);
		$stmt->execute();
		// Store the result so we can check if the account exists in the database.
		$stmt->store_result();
	}

	if ($stmt->num_rows > 0) {
		$stmt->bind_result($ident_admi, $contr_admi, $nomb1_admi, $apel1_admi);
		$stmt->fetch();
		// Account exists, now we verify the password.
		// Note: remember to use password_hash in your registration file to store the hashed passwords.
		if ($_POST['contr_admi'] === $contr_admi) {
			// Verification success! User has loggedin!
			// Create sessions so we know the user is logged in, they basically act like cookies but remember the data on the server.
			session_regenerate_id();
			$_SESSION['loggedInAdmin'] = TRUE;
			$_SESSION['session_type'] = 2;
			$_SESSION['name'] = $_POST['usuar_admi'];
			$_SESSION['ident_admi'] = $ident_admi;
			header('Location: admin_panel.php');
		} else {
			echo '<script type="text/javascript">alert("Contraseña Incorrecta");</script>';
			echo '<script type="text/javascript">window.location = "admin_inicio.php";</script>';
		}
	} else {
		echo '<script type="text/javascript">alert("Usuario Incorrecto");</script>';
		echo '<script type="text/javascript">window.location = "admin_inicio.php";</script>';
	}
	$stmt->close();

?>