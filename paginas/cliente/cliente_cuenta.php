<?php
  session_start();

  if (!isset($_SESSION['loggedInUsuario']) || $_SESSION['ident_tipo'] != 4) {
    header('Location: ../usuario/usuario_inicio.php');
    exit();
  }
?>

<?php require_once('../includes/principal_header.php'); ?>

<head>
	<title>Mi Cuenta | SIGMAEMCA Online Store</title>
</head>

<body>

  <section class="section-pagetop bg" style="padding: 30px;">
      <div class="container" align="center">
        <div class="row">
          <div class="col-sm-4">
          </div>
          <div class="col-sm-4">
            <h2 class="" style="color: #000000;"><b>Mi Cuenta</b></h2>
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
            <article class="card mb-3">
              <div class="card-body">
                <figure class="icontext">
                    <div class="icon" style="padding-right: 20px; ">
                      <img class="rounded-circle img-sm border" src="<?php echo $data_user['image_usua']; ?>">
                    </div>
                    <div class="text">
                      <strong> Bienvenido! <?php echo $data_user['nomb1_usua'];?> <?php echo $data_user['nomb2_usua'];?> <?php echo $data_user['apel1_usua'];?> <?php echo $data_user['apel2_usua'];?></strong> <br> 
                      <?php echo $data_user['email_usua'];?> <br> 
                    </div>
                </figure>
                <hr>
                <article class="card-group">
                  <div class="card-deck justify-content-center" align="center">
                    <div class="card card-lg">
                      <img src="../../imagen/orders1.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title"><b>Órdenes</b></h5>
                        <p class="card-text">Mira Tus Órdenes, Envíos y Facturas, Revisa los Status</p>
                      </div>
                      <div class="card-footer">
                        <a href="cliente_listar_orden.php" class="btn btn-primary stretched-link">Ver Órdenes</a>
                      </div>
                    </div>
                    <div class="card card-lg">
                      <img src="../../imagen/addresses1.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title"><b>Direcciones</b></h5>
                        <p class="card-text">Todas tus Direcciones de Envíos. Agrega, Edita y Elimina</p>
                      </div>
                      <div class="card-footer">
                        <a href="cliente_listar_direccion.php" class="btn btn-primary stretched-link">Ver Direcciones</a>
                      </div>
                    </div>
                    <div class="card card-lg">
                      <img src="../../imagen/configuration1.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title"><b>Configuración</b></h5>
                        <p class="card-text">Edita tus Datos Personales</p>
                      </div>
                      <div class="card-footer">
                        <a href="cliente_configuracion.php" class="btn btn-primary stretched-link">Ver Configuración</a>
                      </div>
                    </div>
                  </div>
                </article>
              </div> 
            </article>
          </main>
        </div>
      </div> 
    </section>
</body>

<?php require_once('../includes/principal_footer.php');  ?>


