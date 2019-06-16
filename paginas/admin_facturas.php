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
							<h2>Administrar <b>Facturas</b></h2>
						</div>
	        </div>
	    </div>
	    <div class="row">
	    	<div class="col-sm-8">
					
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
                               		                            