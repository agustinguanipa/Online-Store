<?php
  session_start();

  if ($_SESSION['ident_tipo'] != 4) {
    header('Location: usuario_inicio.php');
    exit();
  }
?>

<?php require_once('includes/principal_header.php'); ?>

<head>
  <title>Direcciones | SIGMAEMCA Online Store</title>
</head>

<body>
  <div class="jumbotron text-center" style="background-color: #FBFCFF;">
    <div class="container">
      <h1>Listado de Direcciones</h1>
      <hr class="my-4">
        <div class="table-wrapper">
          <div class="table-title">
              <div class="row">
                <div class="col-sm-6" align="left">
                  <h2><b>Direcciones</b></h2>
                </div>
              </div>
          </div>
          <div class="row">
            <div class="col-sm-8">
              <a href="#addClienteModal" class="btn btn-success float-left" data-toggle="modal"><i class="fa fa-plus"></i> Registrar Dirección</a>
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
          <div class="table-responsive">
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th class='text-center'>ID</th>
                  <th class='text-center'>Calle</th>
                  <th class='text-center'>Avenida</th>
                  <th class='text-center'>Sector</th>
                  <th class='text-center'>Codigo Postal</th>
                  <th class='text-center'>Municipio</th>
                  <th class='text-center'>Estado</th>
                  <th class='text-center'>País</th>
                </tr>
              </thead>
            </table>
          </div>
        </div>
      </div>
  </div>
</body>

<?php require_once('includes/usuario_footer.php');  ?>

