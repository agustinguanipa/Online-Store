<!DOCTYPE html>
<html lang="es">
<head>
	<title>Inicio | Online Store SIGMAEMCA</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--- Favicon --->
  <link rel="shortcut icon" href="imagen/favicon.ico" type="image/x-icon">
  <!--- CSS --->
  <link rel="stylesheet" type="text/css" href="css/estilos.css">
  <link rel="stylesheet" type="text/css" href="../css/iconos.css">
  <!--- JS --->
  
  <!--- Bootstrap 4 --->
  <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css"/>
  <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
  <script src="libs/bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
  <!--- Bootstrap 4 UI E-Commerce --->
	<script src="libs/bootstrap-ecommerce-uikit/ui-ecommerce/js/bootstrap.bundle.min.js" type="text/javascript"></script>
  <script src="libs/bootstrap-ecommerce-uikit/ui-ecommerce/js/jquery-2.0.0.min.js" type="text/javascript"></script>
  <link href="libs/bootstrap-ecommerce-uikit/ui-ecommerce/css/bootstrap.css" rel="stylesheet" type="text/css"/>
  <link href="libs/bootstrap-ecommerce-uikit/ui-ecommerce/fonts/fontawesome/css/fontawesome-all.min.css" type="text/css" rel="stylesheet">
  <link href="libs/bootstrap-ecommerce-uikit/ui-ecommerce/plugins/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="libs/bootstrap-ecommerce-uikit/ui-ecommerce/plugins/owlcarousel/assets/owl.theme.default.css" rel="stylesheet">
  <script src="libs/bootstrap-ecommerce-uikit/ui-ecommerce/plugins/owlcarousel/owl.carousel.min.js"></script>
  <link href="libs/bootstrap-ecommerce-uikit/ui-ecommerce/css/ui.css" rel="stylesheet" type="text/css"/>
  <link href="libs/bootstrap-ecommerce-uikit/ui-ecommerce/css/responsive.css" rel="stylesheet" media="only screen and (max-width: 1200px)" />
  <script src="libs/bootstrap-ecommerce-uikit/ui-ecommerce/js/script.js" type="text/javascript"></script>
</head>

<body>

<!-- Header --->

<header class="section-header">
  <!-- Barra 1 --->
  <nav class="navbar navbar-top navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTop" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTop">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#"><i class="fa fa-phone"></i> Llámanos: +58 276 3532978 </a>
          </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.php"><i class="fa fa-home"></i>Inicio</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="paginas/sobre_mi.php"><i class="fa fa-info"></i>Nosotros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="paginas/contacto.php"><i class="fa fa-phone"></i>Contacto</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Barra 2 --->
  <section class="header-main">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-5-24 col-sm-5 col-4">
          <div class="brand-wrap">
            <img class="logo" src="imagen/logo-sigmaemca.png">
            <h2 class="logo-text">SIGMAEMCA</h2>
          </div>
        </div>
        <div class="col-lg-13-24 col-sm-12 order-3 order-lg-2">
          <form action="#">
            <div class="input-group w-100">
              <select class="custom-select"  name="category_name">
                  <option value="">Todo</option>
                  <option value="codex">Ofertas</option>
                  <option value="comments">Equipos Médicos</option>
                  <option value="content">Consumibles Médicos</option>
                  <option value="content">Material Quirurgico</option>
              </select>
              <input type="text" class="form-control" style="width:60%;" placeholder="Buscar">
              <div class="input-group-append">
                  <button class="btn btn-primary" type="submit">
                    <i class="fa fa-search"></i>
                  </button>
              </div>
              </div>
          </form>
        </div>
        <div class="col-lg-6-24 col-sm-7 col-8  order-2  order-lg-3">
          <div class="d-flex justify-content-end">
            <div class="widget-header">
              <small class="title text-muted">Bienvenido</small>
              <div> <a href="#">Iniciar Sesión</a> <span class="dark-transp"> | </span>
              <a href="#">Registrarse</a></div>
            </div>
            <a href="#" class="widget-header border-left pl-3 ml-3">
              <div class="icontext">
                <div class="icon-wrap icon-sm round border"><i class="fa fa-shopping-cart"></i></div>
              </div>
              <span class="badge badge-pill badge-danger notify">0</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
</header>

<!-- Main --->

<section class="bg2">
  <div class="container">
    <div class="row no-gutters">
      <div class="col-lg-9 offset-lg-5-24">
        <nav class="navbar navbar-expand-lg navbar-light">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="main_nav" style="padding-left: 150px;">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#">Equipos Médicos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Consumibles Médicos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Material Quirúrgico</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </div>
</section>

<section class="section-main bg padding-bottom">
  <div class="container">
    <div class="row no-gutters border border-top-0 bg-white">
      <aside class="col-lg-5-24">
        <nav>
          <div class="title-category bg-primary white d-none d-lg-block" style="margin-top:-53px">
            <span>Categorías</span>
          </div>
          <ul class="menu-category">
            <li> <a href="#">Equipos Médicos</a></li>
            <li> <a href="#">Consumibles Médicos</a></li>
            <li> <a href="#">Material Quirúrgico</a></li>
            <li> <a href="#">Mobiliario e Infraestructura</a></li>
            <li> <a href="#">Cirugía</a></li>
            <li> <a href="#">Laboratorio</a></li>
            <li> <a href="#">Imagénes Médicas</a></li>
            <li> <a href="#">Ortopedia y Rehabilitación</a></li>
          </ul>
        </nav>
      </aside>

      <main class="col-lg-19-24">
      <!-- Aside  -->
        <div class="row no-gutters">
          <div class="col-lg-9 col-md-8">
            <!--  Slide  -->
            <div class="owl-init slider-main owl-carousel" data-items="1" data-margin="1" data-nav="true" data-dots="false">
              <div class="item-slide">
                <img src="images/banners/slide1.jpg">
              </div>
              <div class="item-slide">
                <img src="images/banners/slide2.jpg">
              </div>
              <div class="item-slide">
                <img src="images/banners/slide3.jpg">
              </div>
            </div>
            <!-- Slide End -->
          </div> 
          <div class="col-lg-3 col-md-4">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                <h6>Categoría de Producto 1</h6>
                <a href="#" class="btn btn-primary btn-sm btn-round"> Ver Más </a>
                </li>
                <li class="list-group-item">
                <h6>Categoría de Producto 2</h6>
                <a href="#" class="btn btn-primary btn-sm btn-round"> Ver Más </a>
                </li>
                <li class="list-group-item">
                <h6>Categoría de Producto 3</h6>
                <a href="#" class="btn btn-primary btn-sm btn-round"> Ver Más </a>
                </li>
              </ul>
          </div>
        </div>
      <!--  Aside End -->
      </main>
    </div>
  </div>
</section>
<!-- Main End -->

<!-- Contenido -->

<div class="jumbotron text-center" id="fondo_sobre_mi" style="margin-bottom:0; background-color: #FFFFFF">
    <div class="container">
      <h3>SIGMAEMCA Online Store</h3>
      <hr class="my-4">
      <div class="row">
        <div class="col-sm-6 form-group">
          <div>
            <img src="imagen/logo-sigmaemca.png" alt="Logo SIGMAEMCA" height="225px">
          </div>
        </div>
        <div class="col-sm-6 form-group">
        <p class="titulo">Servicio Integral General y Mantenimiento de Equipos Médicos Compañía Anónima</p>
          <p class="contenido">
            SIGMAEMCA es un empresa fundada el 10 de noviembre de 2002, se posiciona como una entidad de responsabilidad social líder en la comercialización de equipos, suministros e insumos médicos para clínicas y hospitales en general. Además presta servicios especializados en las áreas médicas que sean requeridas.
          </p>
          <div>
            <a href="paginas/sobre_mi.php" class="btn btn-primary">Ver Más</a>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- Footer --->

<footer class="section-footer bg2">
  <div class="container">
    <section class="footer-bottom row">
      <div class="col-sm-6"> 
        <p>Diseñado por: <br><a href="https://agustinguanipa.000webhostapp.com/" title="Carlos Agustin Guanipa Alvarez">Carlos Agustin Guanipa Alvarez</a></p>
      </div>
      <div class="col-sm-6">
        <p class="text-sm-right">SIGMAEMCA Servicio Integral de Mantenimiento Equipos Medicos Compañía Anonima</p>
        <p class="text-sm-right">Copyright &copy 2019<br>
        </p>
      </div>
    </section>
  </div>
</footer>

</body>
</html>