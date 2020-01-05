<?php
    require_once('functions/function.php');
    $id=$_GET['d'];
    $del="DELETE FROM service_two_title WHERE service_two_title_id='$id'";
    if(mysqli_query($con,$del)){
        header('Location: all-service-two-title.php');
    }
?>
