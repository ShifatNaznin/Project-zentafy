<?php
    require_once('functions/function.php');
    $id=$_GET['d'];
    $del="DELETE FROM client_details WHERE client_details_id='$id'";
    if(mysqli_query($con,$del)){
        header('Location: all-client-details.php');
    }
?>
