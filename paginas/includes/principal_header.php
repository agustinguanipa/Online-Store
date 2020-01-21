<?php
  session_start();

  require_once ("../js/funciones.php");
  require_once ("conexion_bd.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta name="description" content="SIGMAEMCA Online Store | Servicio Integral General y Mantenimiento de Equipos Médicos Compañía Anónima">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--- Favicon --->
  <link rel="shortcut icon" href="../imagen/favicon.ico" type="image/x-icon">
  <link rel="icon" href="../imagen/favicon.ico" type="image/x-icon">
  <!--- CSS --->
  <link rel="stylesheet" type="text/css" href="../css/estilos.css">
  <link rel="stylesheet" type="text/css" href="../css/estilos_admin.css">
  <!--- jQuery --->
  <script src="../libs/jquery/jquery-3.4.1.min.js" type="text/javascript"></script>
  <!--- jQuery Validation --->
  <script type="text/javascript" src="../libs/jquery-validation-1.19.0/lib/jquery-1.11.1.js"></script>
  <script type="text/javascript" src="../libs/jquery-validation-1.19.0/dist/jquery.validate.js"></script>
  <!--- JS --->
  <script src="../js/validacion.js" type="text/javascript"></script>
  <!--- Bootstrap 4 --->
  <link rel="stylesheet" href="../libs/bootstrap-4.1.3-dist/css/bootstrap.min.css"/>
  <script src="../libs/bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
  <!--- Bootstrap 4 UI E-Commerce --->
  <script src="../libs/bootstrap-ecommerce-uikit/ui-ecommerce/js/bootstrap.bundle.min.js" type="text/javascript"></script>
  <script src="../libs/bootstrap-ecommerce-uikit/ui-ecommerce/js/jquery-2.0.0.min.js" type="text/javascript"></script>
  <link href="../libs/bootstrap-ecommerce-uikit/ui-ecommerce/css/bootstrap.css" rel="stylesheet" type="text/css"/>
  <link href="../libs/bootstrap-ecommerce-uikit/ui-ecommerce/fonts/fontawesome/css/fontawesome-all.min.css" type="text/css" rel="stylesheet">
  <link href="../libs/bootstrap-ecommerce-uikit/ui-ecommerce/plugins/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../libs/bootstrap-ecommerce-uikit/ui-ecommerce/plugins/owlcarousel/assets/owl.theme.default.css" rel="stylesheet">
  <script src="../libs/bootstrap-ecommerce-uikit/ui-ecommerce/plugins/owlcarousel/owl.carousel.min.js"></script>
  <link href="../libs/bootstrap-ecommerce-uikit/ui-ecommerce/css/ui.css" rel="stylesheet" type="text/css"/>
  <link href="../libs/bootstrap-ecommerce-uikit/ui-ecommerce/css/responsive.css" rel="stylesheet" media="only screen and (max-width: 1200px)"/>
  <script src="../libs/bootstrap-ecommerce-uikit/ui-ecommerce/js/script.js" type="text/javascript"></script>
</head>

<body>

<!-- Header --->

<header class="section-header">
  <!-- Barra 1 --->
  <nav class="navbar navbar-top navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTop" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTop">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="../index.php"><i class="fa fa-phone"></i> Llámanos: +58 0276 3532978 </a>
          </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="../index.php"><i class="fa fa-home"></i> Inicio </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="../paginas/principal_nosotros.php"><i class="fa fa-info"></i> Nosotros </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../paginas/principal_contacto.php"><i class="fa fa-phone"></i> Contacto </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Barra 2 --->
  <section class="header-main">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-5-24 col-sm-5 col-4">
          <div class="brand-wrap">
            <a href="../index.php" style="color: #000000; text-decoration: none;">
              <img class="logo" src="../imagen/logo-sigmaemca.png">
              <h2 class="logo-text">SIGMAEMCA</h2>
            </a>
          </div>
        </div>
        <div class="col-lg-13-24 col-sm-12 order-3 order-lg-2">
          <form action="#">
            <div class="input-group w-100">
              <select class="custom-select"  name="category_name">
                  <option value="">Todo</option>
                  <option value="codex">Ofertas</option>
                  <option value="comments">Equipos Médicos</option>
                  <option value="content">Consumibles Médicos</option>
                  <option value="content">Material Quirurgico</option>
              </select>
              <input type="text" class="form-control" style="width:60%;" placeholder="Buscar Productos">
              <div class="input-group-append">
                  <button class="btn btn-primary" type="submit">
                    <i class="fa fa-search"></i>
                  </button>
              </div>
              </div>
          </form>
        </div>
        <div class="col-lg-6-24 col-sm-7 col-8  order-2  order-lg-3">
          <div class="d-flex justify-content-end">
            <?php  if (isset($_SESSION['loggedInUsuario'])) : ?>
              <div class="widget-header">
                <small class="title text-muted">Bienvenido <?=$_SESSION['nombre']?> <?=$_SESSION['apellido']?></small>
                <div>
                  <?php
                    // Session is Set  
                      if ($_SESSION['ident_tipu'] == 4) 
                    {
                      echo "<a href='cliente_cuenta.php'>Mi Cuenta</a> <span class='dark-transp'>   | </span>";
                    }else{
                      echo "<a href='admin_panel.php'>Ir al Panel</a> <span class='dark-transp'>   | </span>";
                      }
                    
                    echo "<a href='usuario_cerrar.php'>Cerrar Sesión</a>";
                  ?>
                </div>
              </div>
            <?php endif ?>
            <?php  if (!isset($_SESSION['loggedInUsuario'])) : ?>
              <div class="widget-header">
                <small class="title text-muted">Bienvenido Visitante</small>
                <div>
                  <?php
                    // Session is Not Set
                    echo "<a href='usuario_inicio.php'>Iniciar Sesión</a> <span class='dark-transp'> | </span>";
                    echo "<a href='cliente_registro.php'>Registrarse</a>"; 
                  ?>
                </div>
              </div>
            <?php endif ?>
            <a href="cliente_cart.php" class="widget-header border-left pl-3 ml-3">
              <div class="icontext">
                <div class="icon-wrap icon-sm round border"><i class="fa fa-shopping-cart"></i></div>
              </div>
              <span class="badge badge-pill badge-danger notify">0</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
</header>