<?php
  session_start();

  if (!isset($_SESSION['loggedInCliente'])) {
    header('Location: usuario_inicio.php');
    exit();
  }
?>

<?php require_once('usuario_header.php'); ?>

<head>
	<title>Envío | SIGMAEMCA Online Store</title>
</head>

<body>
	<div class="jumbotron text-center" style="background-color: #FBFCFF;">
    <div class="container">
      <h1>Envío</h1>
      <hr class="my-4">
      <div class="row">
        <div class="col-sm-12 form-group">
          <div class="card">
            <div class="card-header">
              <b>Seleccionar Dirección de Envío</b>
            </div>
            <div class="card-body">
              
            </div>
            <div class="card-footer">
              <a href="usuario_checkout.php" class="btn btn-success"><i class="fa fa-arrow-circle-right"></i> Siguiente</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

<?php require_once('usuario_footer.php');  ?>

