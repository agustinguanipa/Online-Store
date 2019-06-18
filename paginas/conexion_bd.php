<?php
  // Base de Datos
	define('DB_HOST','localhost');
	define('DB_USER','root');
	define('DB_PASS','root');
	define('DB_NAME','sigmaos_bd');
	// Conexion
    $con=@mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if(!$con){
        die("Imposible Conectarse: ".mysqli_error($con));
    }
    if (@mysqli_connect_errno()) {
        die("La Conexión Falló: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }
?>
