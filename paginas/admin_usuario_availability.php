<?php
  include_once("conexion_bd.php");

  $usuar_admi = urldecode($_POST['usuar_admi']);
  $result = mysqli_query($con, "SELECT * FROM tabma_admi WHERE usuar_admi = '$usuar_admi' LIMIT 1;");
  $num = mysqli_num_rows($result);

  if($num == 0){
      echo "true";
  } else {
      echo "false";
  }
  mysqli_close($con);
?>