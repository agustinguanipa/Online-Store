<?php
    include_once("conexion_bd.php");
    $usuar_clie = urldecode($_POST['usuar_clie']);
    $result = mysqli_query($con, "SELECT * FROM tabma_clie WHERE usuar_clie = '$usuar_clie' LIMIT 1;");
    $num = mysqli_num_rows($result);
    if($num == 0){
        echo "true";
    } else {
        echo "E-Mail-Adresse schon registriert.";
    }
    mysqli_close($con);
?>