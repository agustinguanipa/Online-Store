<?php
  session_start();

  if (!isset($_SESSION['loggedin'])) {
    header('Location: usuario_inicio.php');
    exit();
  }
?>

<?php require_once('usuario_header.php'); ?>

<head>
	<title>Envíos | SIGMAEMCA Online Store</title>
</head>

<body>
	<div class="jumbotron text-center" style="background-color: #FBFCFF;">
    <div class="container">
      <h1>Listado de Envío</h1>
      <hr class="my-4">
        <div class="table-wrapper">
          <div class="table-title">
              <div class="row">
                <div class="col-sm-12" align="left">
                  <h2><b>Envíos</b></h2>
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
          <div class="table-responsive">
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th class='text-center'>ID</th>
                  <th class='text-center'>Orden</th>
                  <th class='text-center'>Dirección</th>
                  <th class='text-center'>Fecha</th>
                  <th class='text-center'>Tracking</th>
                  <th class='text-center'>Status</th>
                </tr>
              </thead>
            </table>
          </div>
        </div>
      </div>
  </div>
</body>

<?php require_once('usuario_footer.php');  ?>

