<?php
  include_once("conexion_bd.php");

  $email_usua = urldecode($_POST['email_usua']);
  $result = mysqli_query($con, "SELECT * FROM tabma_usua WHERE email_usua = '$email_usua' LIMIT 1;");
  $num = mysqli_num_rows($result);

  if($num == 0){
      echo "true";
  } else {
      echo "false";
  }
  mysqli_close($con);
?>