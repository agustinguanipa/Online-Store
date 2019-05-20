<?php require_once('admin_header.php'); ?>

<head>
  <title>Panel de Administrador| SIGMAEMCA Online Store</title>
</head>

<!-- Sidebar-->
<div class="row" id="body-row">
  <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
      <!-- Sidebar Smaller Devices -->
      <ul class="list-group">
        <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed justify-content-center">
            <small>Menu Principal</small>
        </li>
        <!-- Menu -->
        <a href="admin_panel.php" data-toggle="collapse" aria-expanded="false" class="bg-light text-dark list-group-item list-group-item-action flex-column align-items-start">
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
        <a href="#submenu2" data-toggle="collapse" aria-expanded="false" class="bg-light text-dark list-group-item list-group-item-action flex-column align-items-start">
          <div class="d-flex w-100 justify-content-start align-items-center">
            <span class="fa fa-boxes fa-fw mr-3"></span>
            <span class="menu-collapsed">Productos</span>
          </div>
        </a>    
        <a href="#" class="bg-light text-dark list-group-item list-group-item-action">
          <div class="d-flex w-100 justify-content-start align-items-center">
            <span class="fa fa-users fa-fw mr-3"></span>
            <span class="menu-collapsed">Clientes</span>    
          </div>
        </a>
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
      <h1 class="titulo">Bienvenido al Panel de Administración</h1>
  </div>
    
</div>
</body>

<?php require_once('admin_footer.php');  ?>

