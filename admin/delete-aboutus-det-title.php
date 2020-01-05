<?php
    require_once('functions/function.php');
    $id=$_GET['d'];
    $del="DELETE FROM aboutus_det_title WHERE aboutus_det_title_id='$id'";
    if(mysqli_query($con,$del)){
        header('Location: all-aboutus-det-title.php');
    }
?>
