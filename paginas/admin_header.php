<!DOCTYPE html>
<html lang="es">
<head>
  <title>Panel de Administración | SIGMAEMCA Online Store</title>
  <meta name="description" content="SIGMAEMCA Online Store | Servicio Integral General y Mantenimiento de Equipos Médicos Compañía Anónima">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--- Favicon --->
  <link rel="shortcut icon" href="../imagen/favicon.ico" type="image/x-icon">
  <link rel="icon" href="../imagen/favicon.ico" type="image/x-icon">
  <!--- CSS --->
  <link rel="stylesheet" type="text/css" href="../css/estilos.css">
  <link rel="stylesheet" type="text/css" href="../css/estilos_admin.css">
  <link rel="stylesheet" type="text/css" href="../css/estilos_crud.css">
  <!--- jQuery --->
  <script src="../libs/jquery/jquery-3.4.1.min.js" type="text/javascript"></script>
  <!--- jQuery Validation --->
  <script type="text/javascript" src="../libs/jquery-validation-1.19.0/lib/jquery-1.11.1.js"></script>
  <script type="text/javascript" src="../libs/jquery-validation-1.19.0/dist/jquery.validate.js"></script>
  <!--- jQuery Mask Plugin --->
  <script type="text/javascript" src="../libs/jQuery-Mask-Plugin/dist/jquery.mask.js"></script>
  <!--- JS --->
  <script src="../js/validacion.js" type="text/javascript"></script>
  <script src="../js/admin_sidebar.js" type="text/javascript"></script>
  <!--- Bootstrap 4 --->
  <link rel="stylesheet" href="../libs/bootstrap-4.1.3-dist/css/bootstrap.min.css"/>
  <script src="../libs/bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
  <!--- Bootstrap 4 UI E-Commerce --->
  <script src="../libs/bootstrap-ecommerce-uikit/ui-ecommerce/js/bootstrap.bundle.min.js" type="text/javascript"></script>
  
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
  <nav class="navbar navbar-top navbar-expand-lg navbar-dark bg-primary">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="../index.php" style="padding-left: 15px;">
      <img src="../imagen/logo-SIGMAEMCA.png" width="25" height="25" class="d-inline-block align-top" alt="">
      <span class="menu-collapsed">Panel de Administración</span>
    </a>
    <div class="collapse navbar-collapse" id="navbarNavDropdown" style="padding-right: 15px;">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="admin_panel.php"><i class="fa fa-home"></i> Bienvenido </a>
        </li>
        
        <!-- This menu is hidden in bigger devices with d-sm-none. 
             The sidebar isn't proper for smaller screens imo, so this dropdown menu can keep all the useful sidebar itens exclusively for smaller screens  -->

        <li class="nav-item dropdown d-sm-block d-md-none">
          <a class="nav-link dropdown-toggle" href="admin_panel.php" id="smallerscreenmenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Menu Principal
          </a>

          <div class="dropdown-menu" aria-labelledby="smallerscreenmenu">
            <a class="dropdown-item" href="#">Ventas</a>
            <a class="dropdown-item" href="#">Productos</a>
            <a class="dropdown-item" href="admin_clientes.php">Clientes</a>
            <a class="dropdown-item" href="#">Administración</a>
          </div>
        </li><!-- Smaller devices menu END -->
      </ul>
    </div>
</nav><!-- NavBar END -->

</header>

<!-- Sidebar-->

<div class="row" id="body-row">
  <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
    <!-- Sidebar Smaller Devices -->
    <ul class="list-group">
      <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed justify-content-center">
          <small>Menu Principal</small>
      </li>
      <!-- Menu -->
      <a href="admin_panel.php" aria-expanded="false" class="bg-light text-dark list-group-item list-group-item-action flex-column align-items-start">
        <div class="d-flex w-100 justify-content-start align-items-center">
            <span class="fa fa-home fa-fw mr-3"></span> 
            <span class="menu-collapsed">Inicio</span>
        </div>
      </a>
      <a href="#submenu1" data-toggle="collapse" aria-expanded="false" class="bg-light text-dark list-group-item list-group-item-action flex-column align-items-start">
          <div class="d-flex w-100 justify-content-start align-items-center">
            <span class="fa fa-money-bill-alt fa-fw mr-3"></span> 
            <span class="menu-collapsed">Ventas</span>
            <span class="fa fa-caret-down ml-auto"></span>
          </div>
      </a>
        <!-- Submenu -->
        <div id='submenu1' class="collapse sidebar-submenu">
          <a href="#" class="list-group-item list-group-item-action bg-light text-dark">
            <span class="menu-collapsed">Ordenes</span>
          </a>
          <a href="#" class="list-group-item list-group-item-action bg-light text-dark">
            <span class="menu-collapsed">Envios</span>
          </a>
          <a href="#" class="list-group-item list-group-item-action bg-light text-dark">
            <span class="menu-collapsed">Facturas</span>
          </a>
        </div>
      <a href="#" aria-expanded="false" class="bg-light text-dark list-group-item list-group-item-action flex-column align-items-start">
        <div class="d-flex w-100 justify-content-start align-items-center">
          <span class="fa fa-boxes fa-fw mr-3"></span>
          <span class="menu-collapsed">Productos</span>
        </div>
      </a>    
      <a href="#submenu2" data-toggle="collapse" aria-expanded="false" class="bg-light text-dark list-group-item list-group-item-action flex-column align-items-start">
          <div class="d-flex w-100 justify-content-start align-items-center">
            <span class="fa fa-users fa-fw mr-3"></span> 
            <span class="menu-collapsed">Clientes</span>
            <span class="fa fa-caret-down ml-auto"></span>
          </div>
      </a>
        <!-- Submenu -->
        <div id='submenu2' class="collapse sidebar-submenu">
          <a href="admin_clientes.php" class="list-group-item list-group-item-action bg-light text-dark">
            <span class="menu-collapsed">Clientes Activos</span>
          </a>
          <a href="admin_clientes_inactivos.php" class="list-group-item list-group-item-action bg-light text-dark">
            <span class="menu-collapsed">Clientes Inactivos</span>
          </a>
        </div>
      <a href="#" class="bg-light text-dark list-group-item list-group-item-action">
        <div class="d-flex w-100 justify-content-start align-items-center">
          <span class="fa fa-lock fa-fw mr-3"></span>
          <span class="menu-collapsed">Administración</span>    
        </div>
      </a>
    </ul>
  </div>

  <!-- Main -->
  <div class="col">