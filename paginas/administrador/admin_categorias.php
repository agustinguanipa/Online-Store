<?php require_once('../includes/admin_header.php'); ?>

<!-- Contenido -->

<div class="container-fluid">
	<div class="table-wrapper">
	    <div class="table-title">
	        <div class="row">
            <div class="col-sm-6">
							<h2>Administrar <b>Categorías</b></h2>
						</div>
						<div class="col-sm-6">
							<a href="admin_categorias.php" class="btn btn-light text-dark"><i class="fa fa-boxes"></i> Categorias Activas</a>
							<a href="admin_categorias_inactivas.php" class="btn btn-light text-dark"><i class="fa fa-trash"></i> Categorias Inactivas</a>
						</div>
	        </div>
	    </div>
	    <div class="row">
	    	<div class="col-sm-8">
					<a href="#addCategoriaModal" class="btn btn-success float-left" data-toggle="modal"><i class="fa fa-plus"></i> Registrar Categoría</a>
				</div>
	    	<div class="col-sm-4">
					<div id="custom-search-input">
			      <div class="input-group">
			          <input type="text" class="form-control" placeholder="Buscar"  id="q" onkeyup="load(1);" />
			          <span class="input-group-btn">
		              <button class="btn btn-primary" type="button" onclick="load(1);">
		                <span class="fa fa-search"></span>
		              </button>
			          </span>
			      </div>
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
<!-- Modal HTML -->
<?php include("modal_categoria.php");?>
<script src="../../js/script_categoria.js"></script>
</body>
  
<?php require_once('../includes/admin_footer.php');  ?>
                               		                            