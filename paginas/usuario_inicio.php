<?php
  session_start();
  if (isset($_SESSION['loggedInUsuario'])) {
    header('Location: ../index.php');
    exit();
  }
?>

<?php require_once('includes/logreg_header.php'); ?>

<head>
  <title>Iniciar Sesión | SIGMAEMCA Online Store</title>
</head>

<body>

<!-- Header --->

<header class="section-header">
  <section class="header-main">
    <div class="container" align="center">
      <div class="row align-items-center">
        <div class="col-sm-12">
          <div class="brand-wrap">
            <a href="../index.php" style="color: #000000; text-decoration: none;">
              <img class="logo" src="../imagen/logo-sigmaemca.png">
              <h2 class="logo-text">SIGMAEMCA Online Store</h2>
            </a>
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
        <form role="form" id="usuario_inicio" class=" justify-content-center" align="center" action="usuario_autenticacion.php" method="post">
          <h3>Iniciar Sesión</h3>
          <hr class="my-4">
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="usuar_usua">Usuario: </label>
              <input type="text" class="form-control" name="usuar_usua" autocomplete="off" id="usuar_usua" placeholder="miusuario" maxlength="20" onkeyup="this.value = this.value.toUpperCase();">
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="contr_usua">Contraseña: </label>
              <input type="password" class="form-control" name="contr_usua" autocomplete="off" id="contr_usua" placeholder="********" maxlength="20">
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-user"></i> Iniciar Sesión</button>
              <button type="reset" class="btn btn-secondary btn-block"><i class="fa fa-undo"></i> Limpiar</button>
            </div>
          </div>
          <p class="text-center">No Tienes una Cuenta? <a href="usuario_registro.php">Registrarse</a> </p>
        </form>
      </div> 
    </div>
  </div>
</body>

<?php require_once('includes/logreg_footer.php'); ?>
