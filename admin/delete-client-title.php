<?php
    require_once('functions/function.php');
    $id=$_GET['d'];
    $del="DELETE FROM client_title WHERE client_title_id='$id'";
    if(mysqli_query($con,$del)){
        header('Location: all-client-title.php');
    }
?>
