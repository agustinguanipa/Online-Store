<?php
  session_start();

  if (!isset($_SESSION['loggedInAdmin'])) {
    header('Location: admin_inicio.php');
    exit();
  }
?>

<?php require_once('admin_header.php'); ?>

<!-- Contenido -->

<div class="container-fluid">
	<div class="table-wrapper">
	    <div class="table-title">
	        <div class="row">
            <div class="col-sm-6">
							<h2>Administrar <b>Clientes Inactivos</b></h2>
						</div>
						<div class="col-sm-6">
							<a href="admin_clientes.php" class="btn btn-light text-dark"><i class="fa fa-users"></i> Clientes Activos</a>
							<a href="admin_clientes_inactivos.php" class="btn btn-light text-dark"><i class="fa fa-trash"></i> Clientes Inactivos</a>
						</div>
	        </div>
	    </div>
		<div class='col-sm-4 float-right'>
			<div id="custom-search-input">
	      <div class="input-group col-md-12">
	          <input type="text" class="form-control" placeholder="Buscar"  id="q" onkeyup="load(1);" />
	          <span class="input-group-btn">
              <button class="btn btn-primary" type="button" onclick="load(1);">
                <span class="fa fa-search"></span>
              </button>
	          </span>
	      </div>
	    </div>
		</div>
		<div class='clearfix'></div>
		<hr>
		<div id="loader"></div><!-- Carga de datos ajax aqui -->
		<div id="resultados"></div><!-- Carga de datos ajax aqui -->
		<div class='outer_div'></div><!-- Carga de datos ajax aqui -->    
	</div>
</div>
<!-- Restaurar Modal HTML -->
<?php include("modal_restaurar_cliente.php");?>
<script src="../js/script_cliente_inactivo.js"></script>
</body>
  
<?php require_once('admin_footer.php');  ?>
                               		                            