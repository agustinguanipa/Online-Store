<?php require_once('includes/logreg_header.php'); ?>

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
              <h2 class="logo-text"><b>SIGMAEMCA Online Store</b></h2>
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
        <form role="form" id="usuario_registro" class="justify-content-center" align="center" action="cliente_registro_guardar.php" enctype="multipart/form-data" method="post">
          <h3>Registrarse</h3>
          <hr class="my-4">
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="nomb1_usua">Primer Nombre: </label>
              <input type="text" class="form-control" name="nomb1_usua" autocomplete="off" id="nomb1_usua" placeholder="Carlos" maxlength="20" onkeyup="this.value = this.value.toUpperCase();">
            </div>
            <div class="col form-group">
              <label class="form-label" for="nomb2_usua">Segundo Nombre: </label>
              <input type="text" class="form-control" name="nomb2_usua" autocomplete="off" id="nomb2_usua" placeholder="Agustin" maxlength="20" onkeyup="this.value = this.value.toUpperCase();">
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="apel1_usua">Primer Apellido</label>
              <input type="text" class="form-control" name="apel1_usua" autocomplete="off" id="apel1_usua" placeholder="Guanipa" maxlength="20" onkeyup="this.value = this.value.toUpperCase();">
            </div>
            <div class="col form-group">
              <label class="form-label" for="apel2_usua">Segundo Apellido</label>
              <input type="text" class="form-control" name="apel2_usua" autocomplete="off" id="apel2_usua" placeholder="Alvarez" maxlength="20" onkeyup="this.value = this.value.toUpperCase();">
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="gener_usua">Genero: </label>
              <select class="form-control" id="gener_usua" name="gener_usua">
                <option disabled selected value>Seleccionar una Opción...</option>
                <option value="MASCULINO">MASCULINO</option>
                <option value="FEMENINO">FEMENINO</option>
              </select>
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="telef_usua">Telefono: </label>
              <input type="text" class="form-control telef-mask" name="telef_usua" autocomplete="off" id="telef_usua" placeholder="(0000) 000 0000" maxlength="15">
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="email_usua">E-Mail: </label>
              <input type="email" class="form-control" name="email_usua" autocomplete="off" id="email_usua" placeholder="correo@mail.com" maxlength="100" onkeyup="this.value = this.value.toUpperCase();">
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label" for="image_usua"><b>Imagen de Perfil: </b></label>
              <input type="file" class="filestyle" id="image_usua" name="image_usua" alt="Imagen de Perfil" data-btnClass="btn-primary" accept="image/*">
            </div>
          </div>
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

<?php require_once('includes/logreg_footer.php'); ?>


