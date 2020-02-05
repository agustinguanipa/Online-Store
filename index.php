<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <title>Inicio | SIGMAEMCA Online Store</title>
  <meta name="description" content="SIGMAEMCA Online Store | Servicio Integral General y Mantenimiento de Equipos Médicos Compañía Anónima">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--- Favicon --->
  <link rel="shortcut icon" href="imagen/favicon.ico" type="image/x-icon">
  <link rel="icon" href="imagen/favicon.ico" type="image/x-icon">
  <!--- CSS --->
  <link rel="stylesheet" type="text/css" href="css/estilos.css">
  <link rel="stylesheet" type="text/css" href="css/estilos_admin.css">
  <!--- jQuery --->
  <script src="libs/jquery/jquery-3.4.1.min.js" type="text/javascript"></script>
  <!--- jQuery Validation --->
  <script type="text/javascript" src="libs/jquery-validation-1.19.0/lib/jquery-1.11.1.js"></script>
  <script type="text/javascript" src="libs/jquery-validation-1.19.0/dist/jquery.validate.js"></script>
  <!--- jQuery Mask Plugin --->
  <script type="text/javascript" src="libs/jQuery-Mask-Plugin/dist/jquery.mask.js"></script>
  <!--- JS --->
  <script src="js/validacion.js" type="text/javascript"></script>
  <script src="js/admin_sidebar.js" type="text/javascript"></script>
  <!--- Bootstrap 4 --->
  <link rel="stylesheet" href="libs/bootstrap-4.1.3-dist/css/bootstrap.min.css"/>
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
  <link href="libs/bootstrap-ecommerce-uikit/ui-ecommerce/css/responsive.css" rel="stylesheet" media="only screen and (max-width: 1200px)"/>
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
            <a class="nav-link" href="index.php"><i class="fa fa-phone"></i> <b>Llámanos: +58 0276 3532978 </b></a>
          </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.php"><i class="fa fa-home"></i> <b>Inicio </b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="paginas/principal/principal_nosotros.php"><i class="fa fa-info"></i> <b>Nosotros </b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="paginas/principal/principal_contacto.php"><i class="fa fa-phone"></i> <b>Contacto </b></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Barra 2 --->

  <section class="header-main border-bottom">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-5-24 col-sm-5 col-4">
          <div class="brand-wrap">
            <a href="index.php" style="color: #000000; text-decoration: none;">
              <img class="logo" src="imagen/logo-sigmaemca.png">
              <h2 class="logo-text"><b>SIGMAEMCA</b></h2>
            </a>
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
              <input type="text" class="form-control" style="width:60%;" placeholder="Buscar Productos">
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
            <?php  if (isset($_SESSION['loggedInUsuario'])) :  ?>
              <div class="widget-header">
                <small class="title text-muted">Bienvenido <?=$_SESSION['nombre']?> <?=$_SESSION['apellido']?></small>
                <div>
                  <?php
                    // Session is Set  
                      if ($_SESSION['ident_tipo'] == 4)
                    {
                      echo "<a href='paginas/cliente/cliente_cuenta.php'>Mi Cuenta</a> <span class='dark-transp'>   | </span>";
                    }else{
                      echo "<a href='paginas/administrador/admin_panel.php'>Ir al Panel</a> <span class='dark-transp'>   | </span>";
                      }
                    
                    echo "<a href='paginas/usuario/usuario_cerrar.php'>Cerrar Sesión</a>";
                  ?>
                </div>
              </div>
            <?php endif ?>
            <?php  if (!isset($_SESSION['loggedInUsuario'])) : ?>
              <div class="widget-header">
                <small class="title text-muted">Bienvenido Visitante</small>
                <div>
                  <?php
                    // Session is Not Set
                    echo "<a href='paginas/usuario/usuario_inicio.php'>Iniciar Sesión</a> <span class='dark-transp'> | </span>";
                    echo "<a href='paginas/cliente/cliente_registro.php'>Registrarse</a>"; 
                  ?>
                </div>
              </div>
            <?php endif ?>
            <a href="paginas/cliente/cliente_cart.php" class="widget-header border-left pl-3 ml-3">
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

  <nav class="navbar navbar-main navbar-expand-lg navbar-light border-bottom" style="color: #000000;">
  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="main_nav">
      <ul class="navbar-nav">
        <li class="nav-item dropdown" style="color: #000000;">
          <a class="nav-link pl-0" data-toggle="dropdown" href="#" style="color: #000000;"><strong> <i class="fa fa-bars"></i> &nbsp  Todas las Categorías</strong></a>
          <div class="dropdown-menu">
            <?php
              include("paginas/conexion_bd.php");
              $sql = "SELECT * FROM tabma_cate WHERE statu_cate = 1";
              $res = mysqli_query($con, $sql);

              while($row = mysqli_fetch_assoc($res)){
            ?>
              <a class="dropdown-item" href="paginas/principal/principal_categoria_detalle.php?id=<?php echo $row['ident_cate']; ?>"><?php echo $row['nombr_cate'] ?></a>
            <?php
              }
            ?>
          </div> 
        </li>
        <?php
            include("paginas/conexion_bd.php");
            $sql = "SELECT * FROM tabma_cate WHERE statu_cate = 1 LIMIT 7";
            $res = mysqli_query($con, $sql);

              while($row = mysqli_fetch_assoc($res)){
            ?>
            <li class="nav-item">
              <a class="nav-link"href="paginas/principal/principal_categoria_detalle.php?id=<?php echo $row['ident_cate']; ?>" style="color: #000000;"><b><?php echo $row['nombr_cate'] ?></b></a>
            </li>
          <?php
            }
        ?>
        <li class="nav-item">
          <a class="nav-link text-primary" href="paginas/principal/principal_categoria.php"><b>Ver Todas</b></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>

<!-- Main --->

<section class="section-intro padding-y-sm">
<div class="container">
  <div class="intro-banner-wrap">
    <div class="card-deck">
      <div class="card" align="center">
        <div class="card-body index-background" style="padding: 60px;">
          <h2 class="card-title text-white" style="font-size: 50px;"><b>SIGMAEMCA Online Store</b></h2>
          <p class="card-text text-white"><b>Todo en Equipos Médicos, Material Médico Quirúrgico, Consumibles y Mucho Más </b></p>
          <a href="paginas/principal/principal_categoria.php" class="btn btn-light btn-md"> <b>Ver Categorías</b><i class="fa fa-boxes ml-2"></i></a>
          <a href="paginas/principal/principal_producto.php" class="btn btn-light btn-md"> <b>Ver Todos los Productos</b><i class="fa fa-shopping-bag ml-2"></i></a>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

<section class="section-content padding-y-sm">
  <div class="container">
    <article class="card card-body">
      <div class="row">
        <div class="col-md-4">  
          <figure class="item-feature">
            <span class="text-primary"><i class="fa fa-2x fa-truck"></i></span>
            <figcaption class="pt-3">
              <h5 class="title"><b>Envíos a todo el País</b></h5>
              <p>Envíos a cualquier sitio de Venezuela y próximamente a Colombia y Pánama </p>
            </figcaption>
          </figure>
        </div>
        <div class="col-md-4">
          <figure  class="item-feature">
            <span class="text-primary"><i class="fa fa-2x fas fa-globe"></i></span>  
            <figcaption class="pt-3">
              <h5 class="title"><b>Productos Nacionales e Importados de Calidad</b></h5>
              <p>Ofrecemos los Mejores Productos Importados y de Fabricación Nacional
               </p>
            </figcaption>
          </figure>
        </div>
          <div class="col-md-4">
          <figure  class="item-feature">
            <span class="text-primary"><i class="fa fa-2x fa-credit-card"></i></span>
            <figcaption class="pt-3">
              <h5 class="title"><b>Distintas Opciones de Pago </b></h5>
              <p>Recibimos todo tipo de Pago a tráves de las distintas plataformas
               </p>
            </figcaption>
          </figure>
        </div>
      </div>
    </article>
  </div>
</section>

<!-- Contenido -->

<section class="section-content">
  <div class="container">
  <header class="section-heading" ali>
    <h3 class="section-title" align="center"><b>Productos Populares</b></h3>
    <hr>
  </header>
    <div class="row" align="center">
      <?php
        include("paginas/conexion_bd.php");
        $sql = "SELECT * FROM tabma_prod WHERE statu_prod = 1 LIMIT 4";
        $res = mysqli_query($con, $sql);
          while($row = mysqli_fetch_assoc($res)){
      ?>
      <div class="col-lg-3">
        <figure class="card card-product">
          <div class="img-wrap"><?php echo '<img src="__DIR__ .'.$row['imag1_prod'].'" width="100">' ?></div>
            <figcaption class="info-wrap" scope="r">
              <a href="paginas/principal/principal_producto_detalle.php?ident_prod=<?php echo $row['ident_prod']; ?>" title=""><h5 class="title"><?php echo $row['nombr_prod'] ?></h5></a>
              <p class="desc"><?php echo $row['desco_prod'] ?></p>
            </figcaption>
            <div class="bottom-wrap">
              <div class="preci_prod-wrap h5">
                <span class="preci_prod-new"><?php echo 'Bs. ' .$row['preci_prod'] ?></span>
              </div>
            </div>
            <div class="bottom-wrap">
              <a href="paginas/cliente/cliente_cart.php" class="btn btn-sm btn-primary float-right"><i class="fa fa-shopping-cart"></i> Agregar al Carrito</a>
              <a href="paginas/principal/principal_producto_detalle.php?ident_prod=<?php echo $row['ident_prod']; ?>" class="btn btn-sm btn-success float-left"><i class="fa fa-eye"></i> Ver Producto</a>
            </div>
        </figure> 
      </div>
      <?php
        }
      ?>
    </div>
  </div>
</section>
<br>

<!-- Footer --->

<footer class="section-footer bg2">
  <div class="container">
    <section class="footer-bottom row">
      <div class="col-sm-4" align="left"> 
        <p><b>Diseñado y Desarrollado por: </b><br><a href="https://agustinguanipa.000webhostapp.com/" title="Carlos Agustin Guanipa Alvarez">Carlos Agustin Guanipa Alvarez</a></p>
      </div>
      <div class="col-sm-4 form-group" align="center">
          <p class="pie"><b>Redes Sociales</b></p>
          <a href="https://facebook.com/agustin.guanipa" class="icono fab fa-facebook"></a>
          <a href="https://twitter.com/AgustinGuanipa" class="icono fab fa-twitter"></a>
          <a href="https://instagram.com/agustinguanipa/" class="icono fab fa-instagram"></a>
          <a href="https://wa.me/584266908396" class="icono fab fa-whatsapp"></a>
        </div>
      <div class="col-sm-4" align="right">
        <p class="text-sm-right"><b>SIGMAEMCA Servicio Integral de Mantenimiento Equipos Medicos Compañía Anonima</b></p>
        <p class="text-sm-right">Copyright &copy 2019<br>
        </p>
      </div>
    </section>
  </div>
</footer>

</body>
</html>

