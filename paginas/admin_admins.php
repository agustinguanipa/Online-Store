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
							<h2>Administrar <b>Administradores</b></h2>
						</div>
						<div class="col-sm-6">
							<a href="admin_admins.php" class="btn btn-light text-dark"><i class="fa fa-users"></i> Administradores Activos</a>
							<a href="admin_admins_inactivos.php" class="btn btn-light text-dark"><i class="fa fa-trash"></i> Administradores Inactivos</a>
						</div>
	        </div>
	    </div>
	    <div class="row">
	    	<div class="col-sm-8">
					<a href="#addAdminModal" class="btn btn-success float-left" data-toggle="modal"><i class="fa fa-plus"></i> Registrar Administrador</a>
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
<!-- Add Modal HTML -->
<?php include("modal_add_admin.php");?>
<!-- Edit Modal HTML -->
<?php include("modal_edit_admin.php");?>
<!-- Delete Modal HTML -->
<?php include("modal_delete_admin.php");?>
<script src="../js/script_admin.js"></script>
</body>
  
<?php require_once('admin_footer.php');  ?>
                               		                            