<?php
	session_start();
	unset($_SESSION["loggedInUsuario"]);
	header('Location: ../../index.php');
?>