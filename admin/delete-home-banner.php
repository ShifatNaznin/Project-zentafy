<?php
    require_once('functions/function.php');
    $id=$_GET['d'];
    $del="DELETE FROM home_banner WHERE home_banner_id='$id'";
    if(mysqli_query($con,$del)){
        header('Location: all-home-banner.php');
    }
?>
