<?php require_once('usuario_header.php'); ?>

<head>
	<title>Productos | SIGMAEMCA Online Store</title>
</head>

<body>
	<div class="jumbotron text-center" style="background-color: #FBFCFF;">
    <div class="containet">
      <?php
$result = mysqli_query($con,"SELECT * FROM 'tabma_prod'");
while($row = mysqli_fetch_assoc($result)){
    echo "<div class='product_wrapper'>
    <form method='post' action=''>
    <input type='hidden' name='ident_prod' value=".$row['ident_prod']." />
    <div class='image'><img src='".$row['image']."' /></div>
    <div class='nombr_prod'>".$row['nombr_prod']."</div>
    <div class='preci_prod'>$".$row['preci_prod']."</div>
    <button type='submit' class='buy'>Buy Now</button>
    </form>
    </div>";
        }
mysqli_close($con);
?>
 
<div style="clear:both;"></div>
 
<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>
    </div>
    <div class="container">
      <h1>Productos</h1>
      <hr class="my-4">
      <div class="row">
        <div class="col-sm-12 form-group">
          <div class="row">
            <div class="col-md-4">
              <figure class="card card-product">
                <div class="img-wrap"><img src="../imagen/productos/dinamapv100.jpg"></div>
                  <figcaption class="info-wrap">
                    <a href="usuario_producto_detalle.php" title=""><h5 class="title">DINAMAP CARESCAPE VITAL SIGNS MONITOR V100</h5></a>
                    <p class="desc">Diseñado para Pacientes Adultos, Pediatricos y Neonatales. Es extremadamente preciso y confiable, no solo para la presión arterial, si no, para otro rango de parametros tambien.</p>
                  </figcaption>
                  <div class="bottom-wrap">
                    <div class="preci_prod-wrap h5">
                      <span class="preci_prod-new">Bs. 10.000.000,00</span>
                    </div> <!-- preci_prod-wrap.// -->
                  </div> <!-- bottom-wrap.// -->
                  <div class="bottom-wrap">
                    <a href="usuario_cart.php" class="btn btn-sm btn-primary float-right"><i class="fa fa-shopping-cart"></i> Agregar al Carrito</a>
                    <a href="usuario_producto_detalle.php" class="btn btn-sm btn-success float-left"><i class="fa fa-eye"></i> Ver Producto</a>
                  </div> <!-- bottom-wrap.// -->
              </figure>
            </div> <!-- col // -->
          </div> <!-- row.// -->

        </div>
        
      </div>
    </div>
  </div>
</body>

<?php require_once('usuario_footer.php');  ?>

