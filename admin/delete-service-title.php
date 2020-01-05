<?php
    require_once('functions/function.php');
    $id=$_GET['d'];
    $del="DELETE FROM service_title WHERE service_title_id='$id'";
    if(mysqli_query($con,$del)){
        header('Location: all-service-title.php');
    }
?>
