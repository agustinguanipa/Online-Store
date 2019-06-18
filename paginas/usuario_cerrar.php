<?php
	session_start();
	unset($_SESSION["loggedInCliente"]);
	// Redirect to the login page:
	header('Location: ../index.php');
?>