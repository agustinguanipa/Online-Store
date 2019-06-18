<?php
	session_start();
	unset($_SESSION["loggedInAdmin"]);
	// Redirect to the login page:
	header('Location: admin_inicio.php');
?>