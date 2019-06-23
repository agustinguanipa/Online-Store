<?php require_once('usuario_header.php'); ?>

<head>
	<title>Productos | SIGMAEMCA Online Store</title>
</head>

<body>
    <div class="container">
      <h1 align="center">Productos</h1>
      <hr class="my-4">
      <div class="row">
        <div class="col-sm-12 form-group">
          <div class="row" align="center">
            <?php
              $query="SELECT * FROM tabma_prod WHERE statu_prod = 1";
              $resultado= $con->query($query);
              while($row=$resultado->fetch_assoc()){
            ?>
            <div class="col-md-3">
              <figure class="card card-product">
                <div class="img-wrap"><?php echo '<img src="'.$row['imag1_prod'].'" width="100">' ?></div>
                  <figcaption class="info-wrap">
                    <a href="usuario_producto_detalle.php" title=""><h5 class="title"><?php echo $row['nombr_prod'] ?></h5></a>
                    <p class="desc"><?php echo $row['desco_prod'] ?></p>
                  </figcaption>
                  <div class="bottom-wrap">
                    <div class="preci_prod-wrap h5">
                      <span class="preci_prod-new"><?php echo 'Bs. ' .$row['preci_prod'] ?></span>
                    </div> <!-- preci_prod-wrap.// -->
                  </div> <!-- bottom-wrap.// -->
                  <div class="bottom-wrap">
                    <a href="usuario_cart.php" class="btn btn-sm btn-primary float-right"><i class="fa fa-shopping-cart"></i> Agregar al Carrito</a>
                    <a href="usuario_producto_detalle.php?ident_prod=<?php echo $row ['ident_prod']; ?>" class="btn btn-sm btn-success float-left"><i class="fa fa-eye"></i> Ver Producto</a>
                  </div> <!-- bottom-wrap.// -->
              </figure> 
            </div> <!-- col // -->
            <?php
              } 
            ?>
          </div> <!-- row.// -->
        </div>
      </div>
    </div>
  </div>
</body>

<?php require_once('usuario_footer.php');  ?>

