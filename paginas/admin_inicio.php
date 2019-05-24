<?php require_once('header_logreg.php'); ?>

<head>
  <title>Iniciar Sesión | Panel de Administración SIGMAEMCA Online Store</title>
</head>

<body>

<!-- Header --->

<header class="section-header">
  <section class="header-main">
    <div class="container" align="center">
      <div class="row align-items-center">
        <div class="col-sm-12">
          <div class="brand-wrap">
            <a href="../index.php">
              <img class="logo" src="../imagen/logo-sigmaemca.png">
            </a>
              <h2 class="logo-text">Panel de Administración</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
</header>

<body>
  <div class="container">
    <div class="form-group text-center">
      <div class="formulario-registro-inicio">
        <form role="form" id="admin_inicio" class=" justify-content-center" align="center" action="" method="post">
          <h3>Iniciar Sesión</h3>
          <hr class="my-4">
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="usuar_admi">Usuario: </label>
              <input type="text" class="form-control" name="usuar_admi" autocomplete="off" id="usuar_admi" placeholder="miusuario" maxlength="20">
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="contr_admi">Contraseña: </label>
              <input type="text" class="form-control" name="contr_admi" autocomplete="off" id="contr_admi" placeholder="********" maxlength="20">
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <button type="submit" class="btn btn-primary btn-block">Iniciar Sesión</button>
              <button type="reset" class="btn btn-secondary btn-block">Limpiar</button>
            </div>
          </div>
        </form>
      </div> 
    </div>
  </div>
</body>

<?php require_once('footer_logreg.php'); ?>


