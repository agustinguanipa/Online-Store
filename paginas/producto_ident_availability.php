<?php
  include_once("conexion_bd.php");

  $ident_prod = urldecode($_POST['ident_prod']);
  $result = mysqli_query($con, "SELECT * FROM tabma_prod WHERE ident_prod = '$ident_prod' LIMIT 1;");
  $num = mysqli_num_rows($result);

  if($num == 0){
      echo "true";
  } else {
      echo "false";
  }
  mysqli_close($con);
?>