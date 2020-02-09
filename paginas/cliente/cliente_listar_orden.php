<?php
  session_start();

  if (!isset($_SESSION['loggedInUsuario']) || $_SESSION['ident_tipo'] != 4) {
    header('Location: ../usuario/usuario_inicio.php');
    exit();
  }
?>

<?php require_once('../includes/principal_header.php'); ?>

<head>
	<title>Órdenes | SIGMAEMCA Online Store</title>
</head>

<body>
  <section class="section-pagetop bg" style="padding: 30px;">
    <div class="container" align="center">
      <div class="row">
        <div class="col-sm-4">
        </div>
        <div class="col-sm-4">
          <h2 class="" style="color: #000000;"><b>Mi Cuenta / Órdenes</b></h2>
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
          <main class="col-md-9">
            <div class="container">
                <div class="table-wrapper">
                  <div class="table-title">
                      <div class="row">
                        <div class="col-sm-12" align="left">
                          <h2><b>Órdenes</b></h2>
                        </div>
                      </div>
                  </div>
                  <div class='col-sm-4 float-right'>
                    <div id="custom-search-input">
                      <div class="input-group col-md-12">
                          <input type="text" class="form-control" placeholder="Buscar"  id="q" onkeyup="load(1);" />
                          <span class="input-group-btn">
                            <button class="btn btn-primary" type="button" onclick="load(1);">
                              <span class="fa fa-search"></span>
                            </button>
                          </span>
                      </div>
                    </div>
                  </div>
                  <div class='clearfix'></div>
                  <hr>  
                  <div class="table-responsive">
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          <th class='text-center'>ID</th>
                          <th class='text-center'>Fecha</th>
                          <th class='text-center'>Monto</th>
                          <th class='text-center'>Status</th>
                        </tr>
                      </thead>
                    </table>
                  </div>
                </div>
              </div>
          </main>
        </div>
      </div> 
    </section>
</body>

<?php require_once('../includes/usuario_footer.php');  ?>

