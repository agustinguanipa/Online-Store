<?php
  session_start();

  if (isset($_SESSION['loggedInCliente'])) {
    header('Location: ../index.php');
    exit();
  }
?>

<?php require_once('logreg_header.php'); ?>

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
        <form role="form" id="usuario_registro" class="justify-content-center" align="center" action="guardar_cliente.php" method="post">
          <h3>Registrarse</h3>
          <hr class="my-4">
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="nomb1_clie">Primer Nombre: </label>
              <input type="text" class="form-control" name="nomb1_clie" autocomplete="off" id="nomb1_clie" placeholder="Carlos" maxlength="20" onkeyup="this.value = this.value.toUpperCase();">
            </div>
            <div class="col form-group">
              <label class="form-label" for="nomb2_clie">Segundo Nombre: </label>
              <input type="text" class="form-control" name="nomb2_clie" autocomplete="off" id="nomb2_clie" placeholder="Agustin" maxlength="20" onkeyup="this.value = this.value.toUpperCase();">
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="apel1_clie">Primer Apellido</label>
              <input type="text" class="form-control" name="apel1_clie" autocomplete="off" id="apel1_clie" placeholder="Guanipa" maxlength="20" onkeyup="this.value = this.value.toUpperCase();">
            </div>
            <div class="col form-group">
              <label class="form-label" for="apel2_clie">Segundo Apellido</label>
              <input type="text" class="form-control" name="apel2_clie" autocomplete="off" id="apel2_clie" placeholder="Alvarez" maxlength="20" onkeyup="this.value = this.value.toUpperCase();">
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="gener_clie">Genero: </label>
              <select class="form-control" id="gener_clie" name="gener_clie">
                <option value="MASCULINO">MASCULINO</option>
                <option value="FEMENINO">FEMENINO</option>
              </select>
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="telef_clie">Telefono: </label>
              <input type="text" class="form-control telef-mask" name="telef_clie" autocomplete="off" id="telef_clie" placeholder="(0000) 000 0000" maxlength="15">
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="email_clie">E-Mail: </label>
              <input type="email" class="form-control" name="email_clie" autocomplete="off" id="email_clie" placeholder="correo@mail.com" maxlength="100" onkeyup="this.value = this.value.toUpperCase();">
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="usuar_clie">Usuario: </label>
              <input type="text" class="form-control" name="usuar_clie" autocomplete="off" id="usuar_clie" placeholder="miusuario" maxlength="20" onkeyup="this.value = this.value.toUpperCase();">
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="contr_clie">Contraseña: </label>
              <input type="password" class="form-control" name="contr_clie" autocomplete="off" id="contr_clie" placeholder="********" maxlength="20">
            </div>
            <div class="col form-group">
              <label class="form-label" for="confirm_password">Confirmar Contraseña: </label>
              <input type="password" class="form-control" name="confirm_password" autocomplete="off" id="confirm_password" placeholder="********" maxlength="20">
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <button type="submit" class="btn btn-primary btn-block" name="add"><i class="fa fa-user"></i> Registrarse</button>
              <button type="reset" class="btn btn-secondary btn-block" data-dismiss="modal"><i class="fa fa-undo"></i> Limpiar</button>
            </div>
          </div>
          <p class="text-center">Tienes una Cuenta? <a href="usuario_inicio.php">Iniciar Sesión</a> </p>
        </form>
      </div> 
    </div>
  </div>
</body>

<?php require_once('logreg_footer.php'); ?>


