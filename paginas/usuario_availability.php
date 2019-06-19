<?php
if(isset($_POST['usuar_clie']))
{
    // include Database connection file 
    include("db_connection.php");

    $usuar_clie = mysqli_real_escape_string($con, $_POST['usuar_clie']);

    $query = "SELECT usuar_clie FROM  WHERE usuar_clie = '$usuar_clie'";
    if(!$result = mysqli_query($con, $query))
    {
        exit(mysqli_error($con));
    }

    if(mysqli_num_rows($result) > 0)
    {
        // usuar_clie is already exist 
        echo '<div style="color: red;"> <b>'.$usuar_clie.'</b> is already in use! </div>';
    }
    else
    {
        // usuar_clie is avaialable to use.
        echo '<div style="color: green;"> <b>'.$usuar_clie.'</b> is avaialable! </div>';
    }
}
?>