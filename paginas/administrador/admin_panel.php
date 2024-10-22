<?php require_once('../includes/admin_header.php'); ?>

<!-- Contenido -->

<div class="container-fluid">
	<div class="card-deck">
		<div class="card" align="center">
    <div class="card-body index-background">
      <h2 class="card-title text-white"><b>SIGMAEMCA Online Store</b></h2>
      <p class="card-text text-white"><b>Bienvenido al Panel de Administración <br><?php echo $data_user['nomb1_usua'];?> <?php echo $data_user['nomb2_usua'];?> <?php echo $data_user['apel1_usua'];?> <?php echo $data_user['apel2_usua'];?></b></p>
      <a href="../../index.php" class="btn btn-light btn-lg"> <b>Ir al Inicio</b><i class="fa fa-home ml-2"></i></a>
    </div>
  </div>
	</div>
</div>
</br>
<div class="container-fluid">
	<div class="card-deck">
	  <div class="card">
	    <img class="card-img-top" src="../../imagen/adminpanel1.jpg" alt="Admin Panel Ventas">
	    <div class="card-body">
	      <h5 class="card-title text-center"><b>Ventas</b></h5>
	      <p class="card-text text-center">Administrar Órdenes, Envíos, Facturas.</p>
	    </div>
	    <div class="card-footer" align="center">
      	<a href="admin_ordenes.php" class="btn btn-sm btn-primary">Ir a Órdenes</a>
      	<a href="admin_envios.php" class="btn btn-sm btn-primary">Ir a Envíos</a>
      	<a href="admin_facturas.php" class="btn btn-sm btn-primary">Ir a Facturas</a>
    	</div>
	  </div>
	  <div class="card">
	    <img class="card-img-top" src="../../imagen/adminpanel2.jpg" alt="Admin Panel Productos">
	    <div class="card-body">
	      <h5 class="card-title text-center"><b>Productos</b></h5>
	      <p class="card-text text-center">Administrar Proveedores, Categorías y Productos.</p>
	    </div>
	    <div class="card-footer" align="center">
	    	<a href="admin_proveedores.php" class="btn btn-sm btn-primary">Ir a Proveedores</a>
	    	<a href="admin_categorias.php" class="btn btn-sm btn-primary">Ir a Categorías</a>
      	<a href="admin_productos.php" class="btn btn-sm btn-primary">Ir a Productos</a>
    	</div>
	  </div>
	  <div class="card">
	    <img class="card-img-top" src="../../imagen/adminpanel3.jpg" alt="Admin Panel Clientes">
	    <div class="card-body">
	      <h5 class="card-title text-center"><b>Clientes</b></h5>
	      <p class="card-text text-center">Administrar Clientes.</p>
	    </div>
	    <div class="card-footer" align="center">
      	<a href="admin_clientes.php" class="btn btn-primary btn-sm">Ir a Clientes</a>
    	</div>
	  </div>
	</div>
</div>

<?php require_once('../includes/admin_footer.php');  ?>

