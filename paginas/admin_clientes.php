<?php require_once('admin_header.php'); ?>

<!-- Contenido -->

<div class="container">
	<div class="table-wrapper">
	    <div class="table-title">
	        <div class="row">
            <div class="col-sm-6">
							<h2>Administrar <b>Clientes</b></h2>
						</div>
						<div class="col-sm-6">
							<a href="#addClienteModal" class="btn btn-success" data-toggle="modal"><i class="fa fa-plus"></i><span>Registrar Cliente</span></a>
						</div>
	        </div>
	    </div>
		<div class='col-sm-4 float-right'>
			<div id="custom-search-input">
	      <div class="input-group col-md-12">
	          <input type="text" class="form-control" placeholder="Buscar"  id="q" onkeyup="load(1);" />
	          <span class="input-group-btn">
              <button class="btn btn-info" type="button" onclick="load(1);">
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
<!-- Add Modal HTML -->
<?php include("modal_add_cliente.php");?>
<!-- Edit Modal HTML -->
<?php include("modal_edit_cliente.php");?>
<!-- Delete Modal HTML -->
<?php include("modal_delete_cliente.php");?>
<script src="../js/script_cliente.js"></script>
</body>
  
<?php require_once('admin_footer.php');  ?>
                               		                            