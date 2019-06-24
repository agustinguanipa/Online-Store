<?php require_once('usuario_header.php'); ?>

<?php 

 $perpage = 12;
  if(isset($_GET['page']) & !empty($_GET['page'])){
    $curpage = $_GET['page'];
  }else{
    $curpage = 1;
  }
  $start = ($curpage * $perpage) - $perpage;
  $PageSql = "SELECT * FROM tabma_prod WHERE statu_prod = 1";
  $pageres = mysqli_query($con, $PageSql);
  $totalres = mysqli_num_rows($pageres);

  $endpage = ceil($totalres/$perpage);
  $startpage = 1;
  $nextpage = $curpage + 1;
  $previouspage = $curpage - 1;

  $ReadSql = "SELECT * FROM tabma_prod WHERE statu_prod = 1 LIMIT $start, $perpage";
  $res = mysqli_query($con, $ReadSql);

?>

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
              while($row = mysqli_fetch_assoc($res)){
            ?>
            <div class="col-md-3">
              <figure class="card card-product">
                <div class="img-wrap"><?php echo '<img src="'.$row['imag1_prod'].'" width="100">' ?></div>
                  <figcaption class="info-wrap" scope="r">
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
                    <a href="usuario_producto_detalle.php?ident_prod=<?php echo $row['ident_prod']; ?>" class="btn btn-sm btn-success float-left"><i class="fa fa-eye"></i> Ver Producto</a>
                  </div> <!-- bottom-wrap.// -->
              </figure> 
            </div> <!-- col // -->
            <?php
              }
            ?>
          </div> <!-- r.// -->
          <nav aria-label="Page navigation">
            <ul class="pagination">
            <?php if($curpage != $startpage){ ?>
              <li class="page-item">
                <a class="page-link" href="?page=<?php echo $startpage ?>" tabindex="-1" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                  <span class="sr-only">First</span>
                </a>
              </li>
              <?php } ?>
              <?php if($curpage >= 2){ ?>
              <li class="page-item"><a class="page-link" href="?page=<?php echo $previouspage ?>"><?php echo $previouspage ?></a></li>
              <?php } ?>
              <li class="page-item active"><a class="page-link" href="?page=<?php echo $curpage ?>"><?php echo $curpage ?></a></li>
              <?php if($curpage != $endpage){ ?>
              <li class="page-item"><a class="page-link" href="?page=<?php echo $nextpage ?>"><?php echo $nextpage ?></a></li>
              <li class="page-item">
                <a class="page-link" href="?page=<?php echo $endpage ?>" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                  <span class="sr-only">Last</span>
                </a>
              </li>
              <?php } ?>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
</body>

<?php require_once('usuario_footer.php');  ?>

