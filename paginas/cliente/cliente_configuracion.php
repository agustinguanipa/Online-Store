<?php
  session_start();

  if (!isset($_SESSION['loggedInUsuario']) || $_SESSION['ident_tipo'] != 4) {
    header('Location: ../usuario/usuario_inicio.php');
    exit();
  }
?>

<?php require_once('../includes/principal_header.php'); ?>

<head>
  <title>Mi Cuenta | SIGMAEMCA Online Store</title>
</head>

<body>

  <section class="section-pagetop bg" style="padding: 30px;">
      <div class="container" align="center">
        <div class="row">
          <div class="col-sm-4">
          </div>
          <div class="col-sm-4">
            <h2 class="" style="color: #000000;"><b>Mi Cuenta / Configuración</b></h2>
          </div>
          <div class="col-sm-4">
          </div>
        </div>
      </div>
    </section>

    <section class="section-content padding-y">
      <div class="container">
        <div class="row">
          <aside class="col-md-3">
            <ul class="list-group">
              <a class="list-group-item active" href="cliente_cuenta.php"><i class="fa fa-user-circle"></i> Mi Cuenta</a>
              <a class="list-group-item" href="cliente_cart.php"><i class="fa fa-shopping-cart"></i> Carrito</a>
              <a class="list-group-item" href="cliente_listar_orden.php"><i class="fa fa-boxes"></i> Ordenes</a>
              <a class="list-group-item" href="cliente_listar_direccion.php"><i class="fa fa-map-marker-alt"></i> Direcciones</a>
              <a class="list-group-item" href="cliente_configuracion.php"><i class="fa fa-cogs"></i> Configuración</a>
            </ul>
          </aside>
          <main class="col-md-9">
            <div class="container">
              <div class="card-deck">
                <div class="card text-center">
                  <div class="card-header">
                    <b>Configuración</b>
                  </div>
                 <div class="card-body justify-content-center">
                  <h5>Información Personal</h5>
                    <hr class="my-4">
                    <div class="form-row justify-content-center">
                        <img class="img-md rounded-circle" src="<?php echo $imagen; ?>" alt="Imagen Perfil">
                    </div>
                    <div class="form-row">
                      <div class="col form-group">
                        <label class="form-label" for="nombr_usua">Nombre: </label><br>
                        <label><?= $_SESSION['nomb1']; ?> <?= $_SESSION['nomb2']; ?></label>
                      </div>
                      <div class="col form-group">
                        <label class="form-label" for="apeli_usua">Apellido: </label><br>
                        <label><?= $_SESSION['apel1']; ?> <?= $_SESSION['apel2']; ?></label>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="col form-group">
                        <label class="form-label" for="gener_usua">Género: </label><br>
                        <label><?= $_SESSION['gener']; ?></label>
                      </div>
                      <div class="col form-group">
                        <label class="form-label" for="telef_usua">Teléfono: </label><br>
                        <label><?= $_SESSION['telef']; ?></label>
                      </div>
                      <div class="col form-group">
                        <label class="form-label" for="email_usua">E-Mail: </label><br>
                        <label><?= $_SESSION['email']; ?></label>
                      </div>
                    </div>
                  <h5>Datos Usuario</h5>
                  <hr class="my-4">
                    <div class="form-row">
                      <div class="col form-group">
                        <label class="form-label" for="usuar_usua">Usuario: </label>
                        <label><?= $_SESSION['usuar']; ?></label>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="col form-group">
                        <label class="form-label" for="ident_tipu"><b>Tipo de Usuario: </b></label>
                        <label><?= $_SESSION['nombr_tipo']; ?></label>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="card text-center">
                  <div class="card-header">
                    <b>Cambiar Contraseña</b>
                  </div>
                  <div class="container">
                    <div class="form-group text-center">
                      <div class="justify-content-center mx-3 my-1">
                        <form role="form" name="frmChangePass" id="frmChangePass" action="../ajax/actualizar_contrasena.php" class="justify-content-center" align="center" method="post">
                          <div class="form-row">
                            <div class="col form-group">
                              <label class="form-label" for="txtPassUser">Contraseña Actual: </label>
                              <input class="form-control" type="password" name="txtPassUser" id="txtPassUser" placeholder="*********" required>
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="col form-group">
                              <label class="form-label" for="txtNewPassUser">Nueva Contraseña: </label>
                              <input class="form-control newPass" type="password" name="txtNewPassUser" id="txtNewPassUser" placeholder="*********" required>
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="col form-group">
                              <label class="form-label" for="txtPassConfirm">Confirmar Contraseña: </label>
                              <input class="form-control newPass" type="password" name="txtPassConfirm" id="txtPassConfirm" placeholder="*********" required>
                            </div>
                          </div>
                          <div class="alertChangePass" style="display: none;"></div>
                          <div class="form-row">
                            <div class="col form-group">
                              <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-key"></i> Cambiar Contraseña</button>
                              <button type="reset" class="btn btn-light btn-block"><i class="fa fa-undo"></i> Limpiar</button>
                            </div>
                          </div>
                        </form>
                      </div> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </main>
        </div>
      </div> 
    </section>

  <div class="container" style="padding: 30px;">
    
    </div>
</body>

<?php require_once('../includes/principal_footer.php');  ?>



