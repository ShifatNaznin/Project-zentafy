<?php
    require_once('functions/function.php');
    $id=$_GET['d'];
    $del="DELETE FROM aboutus_other_part WHERE aboutus_other_part_id='$id'";
    if(mysqli_query($con,$del)){
        header('Location: all-aboutus-other-part.php');
    }
?>
