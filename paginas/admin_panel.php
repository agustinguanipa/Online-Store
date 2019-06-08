<?php require_once('admin_header.php'); ?>

<!-- Contenido -->

<div class="container">
	<div class="card-deck">
		<div class="card text-center">
	  <div class="card-header">
	    <b>Bienvenido al Panel de Administración</b>
	  </div>
	  <div class="card-body">
	    <h5 class="card-title">Administrador</h5>
	    <a href="../index.php" class="btn btn-primary">Ir a la Web</a>
	  </div>
	</div>
	</div>
</div>
</br>
<div class="container">
	<div class="card-deck">
	  <div class="card">
	    <img class="card-img-top" src="../imagen/adminpanel1.jpg" alt="Admin Panel Ventas">
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
	    <img class="card-img-top" src="../imagen/adminpanel2.jpg" alt="Admin Panel Productos">
	    <div class="card-body">
	      <h5 class="card-title text-center"><b>Productos</b></h5>
	      <p class="card-text text-center">Administrar Categorías y Productos.</p>
	    </div>
	    <div class="card-footer" align="center">
	    	<a href="admin_categorias.php" class="btn btn-sm btn-primary">Ir a Categorías</a>
      	<a href="admin_productos.php" class="btn btn-sm btn-primary">Ir a Productos</a>
    	</div>
	  </div>
	  <div class="card">
	    <img class="card-img-top" src="../imagen/adminpanel3.jpg" alt="Admin Panel Clientes">
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

<?php require_once('admin_footer.php');  ?>

