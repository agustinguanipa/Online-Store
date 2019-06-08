<?php
  session_start();

  if (!isset($_SESSION['loggedin'])) {
    header('Location: usuario_inicio.php');
    exit();
  }
?>

<?php require_once('usuario_header.php'); ?>

<head>
	<title>Carrito de Compras | SIGMAEMCA Online Store</title>
</head>

<body>
	<div class="jumbotron text-center" style="background-color: #FBFCFF;">
    <div class="container">
      <h1>Carrito de Compras</h1>
      <hr class="my-4">
      <div class="row">
        <div class="col-sm-8 form-group">
          <div class="card">
            <div class="card-header">
              <b>Productos</b>
            </div>
            <div class="card-body">
              <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th class='text-center'>Producto</th>
                    <th class='text-center'>Descripción</th>
                    <th class='text-center'>Precio</th>
                    <th class='text-center'>Cantidad</th>
                    <th class='text-center'>Remover</th>
                  </tr>
                </thead>
              </table>
            </div>
          </div>
        </div>
        <div class="col-sm-4 form-group">
        	<div class="card">
            <div class="card-header">
              <b>Cart</b>
            </div>
            <div class="card-body">
              <h5 class="card-title">Total:</h5>
              <h4>Bs. </h4>
            </div>
            <div class="card-footer">
              <a href="usuario_pago.php" class="btn btn-success"><i class="fa fa-arrow-circle-right"></i> Proceder al Checkout</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

<?php require_once('usuario_footer.php');  ?>

