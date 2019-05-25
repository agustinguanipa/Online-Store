<?php require_once('header_logreg.php'); ?>

<head>
  <title>Registrarse | SIGMAEMCA Online Store</title>
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
              <h2 class="logo-text">SIGMAEMCA Online Store</h2>
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
        <form role="form" id="usuario_inicio" class=" justify-content-center" align="center" action="" method="post">
          <h3>Iniciar Sesión</h3>
          <hr class="my-4">
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="usuar_clie">Usuario: </label>
              <input type="text" class="form-control" name="usuar_clie" autocomplete="off" id="usuar_clie" placeholder="miusuario" maxlength="20">
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="contr_clie">Contraseña: </label>
              <input type="password" class="form-control" name="contr_clie" autocomplete="off" id="contr_clie" placeholder="********" maxlength="20">
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <button type="submit" class="btn btn-primary btn-block">Iniciar Sesión</button>
              <button type="reset" class="btn btn-secondary btn-block">Limpiar</button>
            </div>
          </div>
          <p class="text-center">No Tienes una Cuenta? <a href="usuario_registro.php">Registrarse</a> </p>
        </form>
      </div> 
    </div>
  </div>
</body>

<?php require_once('footer_logreg.php'); ?>


