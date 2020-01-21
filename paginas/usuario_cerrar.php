<?php
	session_start();
	unset($_SESSION["loggedInUsuario"]);
	// Redirect to the login page:
	header('Location: ../index.php');
?>