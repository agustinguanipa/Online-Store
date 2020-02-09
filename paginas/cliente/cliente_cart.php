<?php
  session_start();

  if (!isset($_SESSION['loggedInUsuario']) || $_SESSION['ident_tipo'] != 4) {
    header('Location: ../usuario/usuario_inicio.php');
    exit();
  }
?>

<?php require_once('../includes/principal_header.php'); ?>

<head>
	<title>Carrito de Compras | SIGMAEMCA Online Store</title>
</head>

<body>
  <section class="section-pagetop bg" style="padding: 30px;">
    <div class="container" align="center">
      <div class="row">
        <div class="col-sm-4">
        </div>
        <div class="col-sm-4">
          <h3 class="" style="color: #000000;"><b>Mi Cuenta / Carrito de Compras</b></h3>
        </div>
        <div class="col-sm-4">
        </div>
      </div>
    </div>
  </section>
  <section class="section-content padding-y">
      <div class="container">
        <div class="row">
          <aside class="col-md-3">
            <ul class="list-group">
              <a class="list-group-item active" href="cliente_cuenta.php"><i class="fa fa-user-circle"></i> Mi Cuenta</a>
              <a class="list-group-item" href="cliente_cart.php"><i class="fa fa-shopping-cart"></i> Carrito</a>
              <a class="list-group-item" href="cliente_listar_orden.php"><i class="fa fa-boxes"></i> Ordenes</a>
              <a class="list-group-item" href="cliente_listar_direccion.php"><i class="fa fa-map-marker-alt"></i> Direcciones</a>
              <a class="list-group-item" href="cliente_configuracion.php"><i class="fa fa-cogs"></i> Configuración</a>
            </ul>
          </aside>
          <main class="col-md-9" align="center">
            <div class="container justify-content-center">
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
                      <h5 class="card-title"><b>Total:</b></h5>
                      <h4>Bs. </h4>
                    </div>
                    <div class="card-footer">
                      <a href="cliente_pago.php" class="btn btn-block btn-success"><i class="fa fa-arrow-circle-right"></i> Ir al Checkout</a>
                      <a href="../../index.php" class="btn btn-block btn-primary"><i class="fa fa-arrow-circle-left"></i> Seguir Comprando</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </main>
        </div>
      </div> 
    </section>
	
</body>

<?php require_once('../includes/principal_footer.php');  ?>

