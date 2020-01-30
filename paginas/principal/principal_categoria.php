<?php 

require_once('../includes/principal_header.php'); ?>

<?php 

 $perpage = 12;
  if(isset($_GET['page']) & !empty($_GET['page'])){
    $curpage = $_GET['page'];
  }else{
    $curpage = 1;
  }
  $start = ($curpage * $perpage) - $perpage;
  $PageSql = "SELECT * FROM tabma_cate WHERE statu_cate = 1";
  $pageres = mysqli_query($con, $PageSql);
  $totalres = mysqli_num_rows($pageres);

  $endpage = ceil($totalres/$perpage);
  $startpage = 1;
  $nextpage = $curpage + 1;
  $previouspage = $curpage - 1;

  $ReadSql = "SELECT * FROM tabma_cate WHERE statu_cate = 1 LIMIT $start, $perpage";
  $res = mysqli_query($con, $ReadSql);

?>

<head>
  <title>Categorías | SIGMAEMCA Online Store</title>
</head>

<body>
  
  <section class="section-pagetop bg" style="padding: 30px;">
    <div class="container" align="center">
      <div class="row">
        <div class="col-sm-4">
          <button type="submit" class="btn-sm btn-primary float-left" onclick="goBack()"><i class="fa fa-arrow-left"></i> Volver</button>
        </div>
        <div class="col-sm-4">
          <h2 class="" style="color: #000000;"><b>Categorías</b></h2>
        </div>
        <div class="col-sm-4">
           <a href="principal_producto.php" class="btn-sm btn-primary float-right">Ver Todos <i class="fa fa-arrow-right"></i></a>
        </div>
      </div>
    </div>
  </section>

  <div class="container my-3">
      <div class="card-deck">
        <div class="col-sm-12 form-group">
          <div class="row" align="center">
            <?php
              while($row = mysqli_fetch_assoc($res)){
            ?>
          <br>
            <div class="col-md-3">
              <br>
              <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
            <div class="card-body">
              <a href="principal_categoria_detalle.php?id=<?php echo $row['ident_cate']; ?>" title=""><h5 class="text-white"><?php echo $row['nombr_cate'] ?></h5></a>
            </div>
          </div>
            </div> <!-- col // -->
            <?php
              }
            ?>
          </div> <!-- r.// -->
          </br>
          <nav aria-label="Page navigation">
            <ul class="pagination float-right">
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

<?php require_once('../includes/principal_footer.php'); ?>

<script>
function goBack() {
  window.history.back();
}
</script>

