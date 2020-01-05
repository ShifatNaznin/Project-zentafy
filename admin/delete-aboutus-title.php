<?php
    require_once('functions/function.php');
    $id=$_GET['d'];
    $del="DELETE FROM aboutus_title WHERE aboutus_title_id='$id'";
    if(mysqli_query($con,$del)){
        header('Location: all-aboutus-title.php');
    }
?>
