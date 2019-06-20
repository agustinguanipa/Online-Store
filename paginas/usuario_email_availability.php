<?php
  include_once("conexion_bd.php");

  $email_clie = urldecode($_POST['email_clie']);
  $result = mysqli_query($con, "SELECT * FROM tabma_clie WHERE email_clie = '$email_clie' LIMIT 1;");
  $num = mysqli_num_rows($result);

  if($num == 0){
      echo "true";
  } else {
      echo "false";
  }
  mysqli_close($con);
?>