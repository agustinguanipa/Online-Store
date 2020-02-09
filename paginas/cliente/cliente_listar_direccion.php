<?php
  session_start();

  if (!isset($_SESSION['loggedInUsuario']) || $_SESSION['ident_tipo'] != 4) {
    header('Location: ../usuario/usuario_inicio.php');
    exit();
  }
?>

<?php require_once('../includes/principal_header.php'); ?>

<head>
  <title>Direcciones | SIGMAEMCA Online Store</title>
</head>

<body>
  <section class="section-pagetop bg" style="padding: 30px;">
    <div class="container" align="center">
      <div class="row">
        <div class="col-sm-4">
        </div>
        <div class="col-sm-4">
          <h2 class="" style="color: #000000;"><b>Mi Cuenta / Direcciones</b></h2>
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
                      <div class="col-sm-6" align="left">
                        <h2><b>Direcciones</b></h2>
                      </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-sm-8">
                    <a href="#addClienteModal" class="btn btn-success float-left" data-toggle="modal"><i class="fa fa-plus"></i> Registrar Dirección</a>
                  </div>
                  <div class="col-sm-4">
                    <div id="custom-search-input">
                      <div class="input-group">
                          <input type="text" class="form-control" placeholder="Buscar"  id="q" onkeyup="load(1);" />
                          <span class="input-group-btn">
                            <button class="btn btn-primary" type="button" onclick="load(1);">
                              <span class="fa fa-search"></span>
                            </button>
                          </span>
                      </div>
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
                        <th class='text-center'>Calle</th>
                        <th class='text-center'>Avenida</th>
                        <th class='text-center'>Sector</th>
                        <th class='text-center'>Codigo Postal</th>
                        <th class='text-center'>Municipio</th>
                        <th class='text-center'>Estado</th>
                        <th class='text-center'>País</th>
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
  <div class="jumbotron text-center" style="background-color: #FBFCFF;">
    
  </div>
</body>

<?php require_once('../includes/usuario_footer.php');  ?>

