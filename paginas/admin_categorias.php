<?php require_once('admin_header.php'); ?>

<!-- Contenido -->

<div class="container-fluid">
	<div class="table-wrapper">
	    <div class="table-title">
	        <div class="row">
            <div class="col-sm-6">
							<h2>Administrar <b>Categorías</b></h2>
						</div>
						<div class="col-sm-6">
						</div>
	        </div>
	    </div>
	    <div class="row">
	    	<div class="col-sm-8">
					<a href="#addClienteModal" class="btn btn-success float-left" data-toggle="modal"><i class="fa fa-plus"></i> Registrar Categoría</a>
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
	</div>
</div>
</body>
  
<?php require_once('admin_footer.php');  ?>
                               		                            