<!DOCTYPE html>
<html lang="es">
<head>
  <title>Iniciar Sesión | SIGMAEMCA Online Store</title>
  <meta name="description" content="Online Store SIGMAEMCA Servicio Integral General y Mantenimiento de Equipos Médicos Compañía Anónima">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--- Favicon --->
  <link rel="shortcut icon" href="../imagen/favicon.ico" type="image/x-icon">
  <!--- CSS --->
  <link rel="stylesheet" type="text/css" href="../css/estilos.css">
  <!--- JS --->
  <script src="../js/validacion.js" type="text/javascript"></script>
  <!--- Bootstrap 4 --->
  <link rel="stylesheet" href="../libs/bootstrap-4.1.3-dist/css/bootstrap.min.css"/>
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
  <link href="../libs/bootstrap-ecommerce-uikit/ui-ecommerce/css/responsive.css" rel="stylesheet" media="only screen and (max-width: 1200px)"/>
  <script src="../libs/bootstrap-ecommerce-uikit/ui-ecommerce/js/script.js" type="text/javascript"></script>
  <!--- jQuery --->
  <script src="../libs/jquery/jquery-3.4.1.min.js" type="text/javascript"></script>
  <!--- jQuery Validation --->
  <script type="text/javascript" src="../libs/jquery-validation-1.19.0/lib/jquery-1.11.1.js"></script>
  <script type="text/javascript" src="../libs/jquery-validation-1.19.0/dist/jquery.validate.js"></script>
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
              <label class="form-label" for="contra_clie">Contraseña: </label>
              <input type="text" class="form-control" name="contra_clie" autocomplete="off" id="contra_clie" placeholder="********" maxlength="20">
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <button type="submit" class="btn btn-primary btn-block">Iniciar Sesión</button>
              <button type="reset" class="btn btn-secondary btn-block">Limpiar</button>
            </div>
          </div>
          <p class="text-center">No Tienes una Cuenta? <a href="usuario_registro.php">Registrate</a> </p>
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

<script type="text/javascript">
  $.validator.setDefaults( {
      submitHandler: function () {
        alert( "submitted!" );
      }
    } );

    $( document ).ready( function () {
      $( "#usuario_registro" ).validate( {
        rules: {
          nomb1_clie: {
            required: true,
            minlength: 2
          },
          apel1_clie: {
            required: true,
            minlength: 2
          },
          usuar_clie: {
            required: true,
            minlength: 2
          },
          contra_clie: {
            required: true,
            minlength: 5
          },
          confirm_password: {
            required: true,
            minlength: 5,
            equalTo: "#contra_clie"
          },
          telef_clie: {
            required: true,
            minlength: 11
          },
          email_clie: {
            required: true,
            email: true
          },
      
        },
        messages: {
          nomb1_clie: {
            required: "Ingrese su Primer Nombre",
            minlength: "Tu Nombre debe contener al menos 2 caracteres" 
          },
          apel1_clie: {
            required: "Ingrese su Primer Apellido",
            minlength: "Tu Apellido debe contener al menos 2 caracteres"
          },
          usuar_clie: {
            required: "Ingrese un Nombre de Usuario",
            minlength: "Tu Nombre de Usuario debe contener al menos 2 caracteres"
          },
          contra_clie: {
            required: "Ingrese una Contraseña",
            minlength: "Tu Contraseña debe contener al menos 5 caracteres"
          },
          confirm_password: {
            required: "Ingrese una Contraseña",
            minlength: "Tu Contraseña debe contener al menos 5 caracteres",
            equalTo: "Ingrese la Misma Contraseña"
          },
          telef_clie: {
            required: "Ingrese un Número de Teléfono Valido",
            minlength: "Ingrese un Número de Teléfono Valido"
          },
          email_clie: "Ingrese una Dirección de Correo Electrónico Válida"
        },
        errorElement: "em",
        errorPlacement: function ( error, element ) {
          // Add the `invalid-feedback` class to the error element
          error.addClass( "invalid-feedback" );

          if ( element.prop( "type" ) === "checkbox" ) {
            error.insertAfter( element.next( "label" ) );
          } else {
            error.insertAfter( element );
          }
        },
        highlight: function ( element, errorClass, validClass ) {
          $( element ).addClass( "is-invalid" ).removeClass( "is-valid" );
        },
        unhighlight: function (element, errorClass, validClass) {
          $( element ).addClass( "is-valid" ).removeClass( "is-invalid" );
        }
      } );

    } );
</script>
</html>


