<?php 

require_once('../includes/principal_header.php'); 

include "conexion_bd.php";

$id = $_GET['ident_prod'];

?>

<head>
  <title>Productos | SIGMAEMCA Online Store</title>
</head>

<body>


  <section class="section-pagetop bg" style="padding: 30px;">
  <div class="container" align="center">
    <div class="row">
      <div class="col-sm-2">
        <button type="submit" class="btn-sm btn-primary float-left" onclick="goBack()"><i class="fa fa-arrow-left"></i> Volver</button>
      </div>
      <div class="col-sm-8">
        <?php
          $query_rol = mysqli_query($con,"SELECT u.ident_cate, u.nombr_cate, r.ident_prod, r.ident_cate, r.nombr_prod, r.imag1_prod FROM tabma_cate u INNER JOIN tabma_prod r ON u.ident_cate = r.ident_cate WHERE r.ident_prod = $id");
          $result_rol = mysqli_num_rows($query_rol);
        ?>
        <?php 
            if ($result_rol > 0) {
            $rol = mysqli_fetch_array($query_rol)?>
            <h2 align="center" style="color: #000000;"><b>Producto | <?php echo $rol['nombr_cate'] ?></b></h2>
            <?php
            
          }
          ?>
        </div>
      <div class="col-sm-2">
         <a href="principal_producto.php" class="btn-sm btn-primary float-right">Ver Todos <i class="fa fa-arrow-right"></i></a>
      </div>
    </div>
  </div>
</section>
 
    <div class="container my-3" align="center">
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
          </div>
          <div class="img-small-wrap">
            <div class="item-gallery"><?php echo '<img src="'.$row['imag1_prod'].'" width="100">' ?></div>
            <div class="item-gallery"><?php echo '<img src="'.$row['imag2_prod'].'" width="100">' ?></div>
            <div class="item-gallery"><?php echo '<img src="'.$row['imag3_prod'].'" width="100">' ?></div>
          </div>
          </article>
              </aside>
              <aside class="col-sm-7">
          <article class="p-5">
            <h3 class="title mb-3"><?php echo $row['nombr_prod'] ?></h3>

          <div class="mb-3"> 
            <var class="price h3 text-primary"> 
              <span class="currency">Bs. </span><span class="num"><?php echo $row['preci_prod'] ?></span>
            </var> 
          </div>
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
                </dl>
              </div>
            </div>
            <hr>
            <a href="../cliente/cliente_cart.php" class="btn btn-primary float-right"><i class="fa fa-shopping-cart"></i> Agregar al Carrito</a>
            <button type="submit" class="btn btn-success float-left" onclick="goBack()"><i class="fa fa-arrow-left"></i> Seguir Viendo</button>
          </article>
              </aside>
            </div>
          </div>
          <?php 
            }
          ?>
        </div>
      </div>
    </div>
  
</body>

<?php require_once('../includes/principal_footer.php');  ?>

<script>
function goBack() {
  window.history.back();
}
</script>