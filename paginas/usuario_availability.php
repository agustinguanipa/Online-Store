<?php       
    $existing_users=array('AGUSTINGUANIPA','CRRGABY','jason'); 

    $usuar_clie=$_POST['usuar_clie'];

    if (in_array($usuar_clie, $existing_users))
    {       
        echo "false"; //already registered
    } 
    else
    {       
         echo "true";  //user name is available
    }
?>