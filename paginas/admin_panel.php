<?php require_once('admin_header.php'); ?>

<head>
  <title>Panel de Administrador| SIGMAEMCA Online Store</title>
</head>

<script>
  // Hide submenus
$('#body-row .collapse').collapse('hide'); 

// Collapse/Expand icon
$('#collapse-icon').addClass('fa-angle-double-left'); 

// Collapse click
$('[data-toggle=sidebar-colapse]').click(function() {
    SidebarCollapse();
});

function SidebarCollapse () {
    $('.menu-collapsed').toggleClass('d-none');
    $('.sidebar-submenu').toggleClass('d-none');
    $('.submenu-icon').toggleClass('d-none');
    $('#sidebar-container').toggleClass('sidebar-expanded sidebar-collapsed');
    
    // Treating d-flex/d-none on separators with title
    var SeparatorTitle = $('.sidebar-separator-title');
    if ( SeparatorTitle.hasClass('d-flex') ) {
        SeparatorTitle.removeClass('d-flex');
    } else {
        SeparatorTitle.addClass('d-flex');
    }
    
    // Collapse/Expand icon
    $('#collapse-icon').toggleClass('fa-angle-double-left fa-angle-double-right');
}
</script>

<!-- Bootstrap row -->
<div class="row" id="body-row">
    <!-- Sidebar -->
    <div id="sidebar-container" class="sidebar-expanded d-none d-md-block"><!-- d-* hiddens the Sidebar in smaller devices. Its itens can be kept on the Navbar 'Menu' -->
        <!-- Bootstrap List Group -->
        <ul class="list-group">
            <!-- Separator with title -->
            <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed justify-content-center">
                <small>Menu Principal</small>
            </li>
            <!-- /END Separator -->
            <!-- Menu with submenu -->
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
            <!-- Submenu content -->
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
        </ul><!-- List Group END-->
    </div><!-- sidebar-container END -->

    <!-- MAIN -->
    <div class="col">
        <h1 class="titulo">Bienvenido al Panel de Administración</h1>
    </div><!-- Main Col END -->
    
</div><!-- body-row END -->
</body>

<?php require_once('admin_footer.php');  ?>

