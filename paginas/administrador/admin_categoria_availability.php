<?php
  include_once("../conexion_bd.php");

  $nombr_cate = urldecode($_POST['nombr_cate']);
  $result = mysqli_query($con, "SELECT * FROM tabma_cate WHERE nombr_cate = '$nombr_cate' LIMIT 1;");
  $num = mysqli_num_rows($result);

  if($num == 0){
      echo "true";
  } else {
      echo "false";
  }
  mysqli_close($con);
?>