<?php
  session_start();

  if (!isset($_SESSION['loggedInAdmin'])) {
    header('Location: admin_inicio.php');
    exit();
  }
?>

<?php require_once('admin_header.php'); ?>

<!-- Contenido -->

<div class="container-fluid">
	<div class="card-deck">
		<div class="card text-center">
	  <div class="card-header">
	    <b>Configuración</b>
	  </div>
	  <div class="card-body">
	    <h5 class="card-title">Administrador</h5>
	  </div>
	</div>
	</div>
</div>

<?php require_once('admin_footer.php');  ?>

