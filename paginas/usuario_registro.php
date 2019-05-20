<!DOCTYPE html>
<html lang="es">
<head>
  <title>Registrarse | SIGMAEMCA Online Store</title>
  <meta name="description" content="Online Store SIGMAEMCA Servicio Integral General y Mantenimiento de Equipos Médicos Compañía Anónima">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--- Favicon --->
  <link rel="shortcut icon" href="../imagen/favicon.ico" type="image/x-icon">
  <!--- CSS --->
  <link rel="stylesheet" type="text/css" href="../css/estilos.css">
  <!--- JS --->
  
  <!--- Bootstrap 4 --->
  <link rel="stylesheet" href="../libs/bootstrap-4.1.3-dist/css/bootstrap.min.css"/>
  <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
  <script src="../libs/bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
  <!--- Bootstrap 4 UI E-Commerce --->
  <script src="../libs/bootstrap-ecommerce-uikit/ui-ecommerce/js/bootstrap.bundle.min.js" type="text/javascript"></script>
  <script src="../libs/bootstrap-ecommerce-uikit/ui-ecommerce/js/jquery-2.0.0.min.js" type="text/javascript"></script>
  <link href="../libs/bootstrap-ecommerce-uikit/ui-ecommerce/css/bootstrap.css" rel="stylesheet" type="text/css"/>
  <link href="../libs/bootstrap-ecommerce-uikit/ui-ecommerce/fonts/fontawesome/css/fontawesome-all.min.css" type="text/css" rel="stylesheet">
  <link href="../libs/bootstrap-ecommerce-uikit/ui-ecommerce/plugins/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../libs/bootstrap-ecommerce-uikit/ui-ecommerce/plugins/owlcarousel/assets/owl.theme.default.css" rel="stylesheet">
  <script src="../libs/bootstrap-ecommerce-uikit/ui-ecommerce/plugins/owlcarousel/owl.carousel.min.js"></script>
  <link href="../libs/bootstrap-ecommerce-uikit/ui-ecommerce/css/ui.css" rel="stylesheet" type="text/css"/>
  <link href="../libs/bootstrap-ecommerce-uikit/ui-ecommerce/css/responsive.css" rel="stylesheet" media="only screen and (max-width: 1200px)" />
  <script src="../libs/bootstrap-ecommerce-uikit/ui-ecommerce/js/script.js" type="text/javascript"></script>
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
              <h2 class="logo-text">SIGMAEMCA</h2>
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
        <form role="form" id="contact-form" class=" justify-content-center" align="center" action="mail_contacto.php" method="post">
          <h3>Registrarse</h3>
          <hr class="my-4">
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label">Primer Nombre: </label>
              <input type="text" class="form-control" name="nombres" autocomplete="off" id="nombres" placeholder="Carlos">
            </div>
            <div class="col form-group">
              <label class="form-label">Segundo Nombre: </label>
              <input type="text" class="form-control" name="nombres" autocomplete="off" id="nombres" placeholder="Agustin">
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label">Primer Apellido</label>
              <input type="text" class="form-control" name="apellidos" autocomplete="off" id="apellidos" placeholder="Guanipa">
            </div>
            <div class="col form-group">
              <label class="form-label">Segundo Apellido</label>
              <input type="text" class="form-control" name="apellidos" autocomplete="off" id="apellidos" placeholder="Alvarez">
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label">Genero: </label>
              <select class="form-control" id="sel1">
                <option value="MASCULINO">Masculino</option>
                <option value="FEMENINO">Femenino</option>
              </select>
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label">Telefono: </label>
              <input type="email" class="form-control" name="email" autocomplete="off" id="email" placeholder="0000-000-0000">
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label">E-Mail: </label>
              <input type="email" class="form-control" name="email" autocomplete="off" id="email" placeholder="correo@mail.com">
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label">Usuario: </label>
              <input type="email" class="form-control" name="email" autocomplete="off" id="email" placeholder="miusuario">
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label">Contraseña: </label>
              <input type="email" class="form-control" name="email" autocomplete="off" id="email" placeholder="********">
            </div>
            <div class="col form-group">
              <label class="form-label">Confirmar Contraseña: </label>
              <input type="email" class="form-control" name="email" autocomplete="off" id="email" placeholder="********">
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <button type="submit" class="btn btn-primary btn-block">Registrarse</button>
              <button type="reset" class="btn btn-secondary btn-block">Limpiar</button>
            </div>
          </div>
          <p class="text-center">Tienes una Cuenta? <a href="usuario_inicio.php">Iniciar Sesión</a> </p>
        </form>
      </div> 
    </div>
  </div>
</body>

<footer>
  <div class="container">
    <section class="footer-bottom row">
      <div class="col-sm-12">
        <p class="text-sm-center">SIGMAEMCA Servicio Integral de Mantenimiento Equipos Medicos Compañía Anonima</p>
        <p class="text-sm-center">Copyright &copy 2019<br>
        </p>
      </div>
    </section>
  </div>
</footer>

</body>
</html>


