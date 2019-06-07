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
            <h5 class="card-title">Órdenes</h5>
            <p class="card-text">Mira Tus Órdenes, Pagos y Facturas, Revisa los Status</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary stretched-link">Ver Órdenes</a>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <img src="../imagen/shipments1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Envíos</h5>
            <p class="card-text">Mira el Status de Tus Envíos, Obten tú Número de Tracking</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary stretched-link">Ver Envíos</a>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <img src="../imagen/addresses1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Direcciones</h5>
            <p class="card-text">Todas tus Direcciones de Envíos,Agrega, Edita y Elimina</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary stretched-link">Ver Direcciones</a>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <img src="../imagen/configuration1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Configuración</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary stretched-link">Ver Configuración</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

<?php require_once('usuario_footer.php');  ?>


