<?php
  session_start();

  if (!isset($_SESSION['loggedin'])) {
    header('Location: usuario_inicio.php');
    exit();
  }
?>

<?php require_once('usuario_header.php'); ?>

<head>
	<title>Mi Cuenta | SIGMAEMCA Online Store</title>
</head>

<body>
  <div class="jumbotron text-center" style="background-color: #FBFCFF;">
    <div class="container">
      <h1>Mi Cuenta</h1>
      <hr class="my-4">
      <div class="card-deck justify-content-center" align="center">
        <div class="card" style="width: 18rem;">
          <img src="../imagen/orders1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><b>Órdenes</b></h5>
            <p class="card-text">Mira Tus Órdenes, Envíos y Facturas, Revisa los Status</p>
          </div>
          <div class="card-footer">
            <a href="usuario_listar_orden.php" class="btn btn-primary stretched-link">Ver Órdenes</a>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <img src="../imagen/addresses1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><b>Direcciones</b></h5>
            <p class="card-text">Todas tus Direcciones de Envíos. Agrega, Edita y Elimina</p>
          </div>
          <div class="card-footer">
            <a href="usuario_direccion.php" class="btn btn-primary stretched-link">Ver Direcciones</a>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <img src="../imagen/configuration1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><b>Configuración</b></h5>
            <p class="card-text">Edita tus Datos Personales</p>
          </div>
          <div class="card-footer">
            <a href="usuario_configuracion.php" class="btn btn-primary stretched-link">Ver Configuración</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

<?php require_once('usuario_footer.php');  ?>


