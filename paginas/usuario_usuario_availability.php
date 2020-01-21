<?php
  include_once("conexion_bd.php");

  $usuar_usua = urldecode($_POST['usuar_usua']);
  $result = mysqli_query($con, "SELECT * FROM tabma_usua WHERE usuar_usua = '$usuar_usua' LIMIT 1;");
  $num = mysqli_num_rows($result);

  if($num == 0){
      echo "true";
  } else {
      echo "false";
  }
  mysqli_close($con);
?>