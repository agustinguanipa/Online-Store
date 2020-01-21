<?php require_once('includes/principal_header.php'); ?>

<head>
  <title>Productos | SIGMAEMCA Online Store</title>
</head>

<body>
  <div class="jumbotron text-center" style="background-color: #FBFCFF;">
    <div class="container">
      <h1>Productos</h1>
      <hr class="my-4">
      <div class="row">
        <div class="col-sm-12 form-group">
          <?php
            $ident_prod = $_REQUEST['ident_prod'];
            
            $query="SELECT * FROM tabma_prod WHERE ident_prod = '$ident_prod'";
            $resultado= $con->query($query);
            while($row=$resultado->fetch_assoc()){
          ?>
          <div class="card">
            <div class="row no-gutters">
              <aside class="col-sm-5 border-right">
          <article class="gallery-wrap"> 
          <div class="img-big-wrap">
            <div> <a href="#" data-fancybox=""><?php echo '<img src="'.$row['imag1_prod'].'" width="100">' ?></a></div>
          </div> <!-- slider-product.// -->
          <div class="img-small-wrap">
            <div class="item-gallery"><?php echo '<img src="'.$row['imag1_prod'].'" width="100">' ?></div>
            <div class="item-gallery"><?php echo '<img src="'.$row['imag2_prod'].'" width="100">' ?></div>
            <div class="item-gallery"><?php echo '<img src="'.$row['imag3_prod'].'" width="100">' ?></div>
          </div> <!-- slider-nav.// -->
          </article> <!-- gallery-wrap .end// -->
              </aside>
              <aside class="col-sm-7">
          <article class="p-5">
            <h3 class="title mb-3"><?php echo $row['nombr_prod'] ?></h3>

          <div class="mb-3"> 
            <var class="price h3 text-primary"> 
              <span class="currency">Bs. </span><span class="num"><?php echo $row['preci_prod'] ?></span>
            </var> 
            
          </div> <!-- price-detail-wrap .// -->
          <dl>
            <dt>Descripción</dt>
            <dd><p><?php echo $row['desla_prod'] ?></p></dd>
          </dl>
          <dl class="row" align="left">
            <dt class="col-sm-3">Condición:</dt>
            <dd class="col-sm-9"><?php echo $row['estad_prod'] ?></dd>

            <dt class="col-sm-3">Peso:</dt>
            <dd class="col-sm-9"><?php echo $row['pesoo_prod'] ?></dd>

            <dt class="col-sm-3">Tamaño:</dt>
            <dd class="col-sm-9"><?php echo $row['taman_prod'] ?></dd>
          </dl>
          <hr>
            <div class="row">
              <div class="col-sm-12">
                <dl class="dlist-inline">
                  <dt>Cantidad: </dt>
                  <dd> 
                    <select class="form-control form-control-sm" style="width:70px;">
                      <option> 1 </option>
                      <option> 2 </option>
                      <option> 3 </option>
                    </select>
                  </dd>
                </dl>  <!-- item-property .// -->
              </div> <!-- col.// -->
            </div> <!-- row.// -->
            <hr>
            <a href="usuario_cart.php" class="btn btn-primary float-right"><i class="fa fa-shopping-cart"></i> Agregar al Carrito</a>
            <a href="usuario_producto.php" class="btn btn-success float-left"><i class="fa fa-arrow-left"></i> Seguir Viendo</a> 
          </article> <!-- card-body.// -->
              </aside> <!-- col.// -->
            </div> <!-- row.// -->
          </div> <!-- card.// -->
          <?php 
            }
          ?>
        </div>
      </div>
    </div>
  </div>
</body>

<?php require_once('includes/usuario_footer.php');  ?>