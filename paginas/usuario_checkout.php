<?php
  session_start();

  if (!isset($_SESSION['loggedin'])) {
    header('Location: usuario_inicio.php');
    exit();
  }
?>

<?php require_once('usuario_header.php'); ?>

<head>
	<title>Checkout | SIGMAEMCA Online Store</title>
</head>

<body>
	<div class="jumbotron text-center" style="background-color: #FBFCFF;">
    <div class="container">
      <h1>Checkout</h1>
      <hr class="my-4">
      <div class="row">
        <div class="col-sm-6 form-group">
          <div class="card">
            <div class="card-header">
              <b>Orden</b>
            </div>
            <div class="card-body">
              <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th class='text-center'>Producto</th>
                    <th class='text-center'>Descripción</th>
                    <th class='text-center'>Precio</th>
                    <th class='text-center'>Cantidad</th>
                  </tr>
                </thead>
              </table>
            </div>
          </div>
        </div>
        <div class="col-sm-3 form-group">
          <div class="card">
            <div class="card-header">
              <b>Envío</b>
            </div>
            <div class="card-body">
              <h5 class="card-title">Dirección: </h5>
              <h4></h4>
            </div>
          </div>
        </div>
        <div class="col-sm-3 form-group">
          <div class="card">
            <div class="card-header">
              <b>Checkout</b>
            </div>
            <div class="card-body">
              <h5 class="card-title">Total:</h5>
              <h4>Bs. </h4>
            </div>
            <div class="card-footer">
              <a href="usuario_listar_orden.php" class="btn btn-success"><i class="fa fa-check"></i> Realizar Orden</a>
              <a href="usuario_direccion.php" class="btn btn-primary float-left"><i class="fa fa-arrow-circle-left"></i> Volver</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

<?php require_once('usuario_footer.php');  ?>

