<?php
require_once('functions/function.php');
get_header();
get_sidebar();

$id=$_GET['e'];
$sql="SELECT * FROM service_title WHERE service_title_id='$id'";
$q=mysqli_query($con,$sql);
$data=mysqli_fetch_assoc($q);

if(!empty($_POST)){
  $title=$_POST['title'];
  $subtitle=$_POST['subtitle'];

  $update="UPDATE service_title SET service_title='$title', service_subtitle='$subtitle' WHERE service_title_id='$id'";
  if(mysqli_query($con,$update)){
    header('Location:view-service-title.php?v='.$id);

  }
  else{
    echo "Update Failed!!!";
  }
}

?>
<div class="col-md-12">
  <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <div class="col-md-9 heading_title">
          Update About Service Information
        </div>
        <div class="col-md-3 text-right">
          <a href="all-service-title.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All about Service</a>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="panel-body">
        <div class="form-group">
          <label for="" class="col-sm-3 control-label">Title</label>
          <div class="col-sm-8">

            <input type="text" class="form-control" name="title" value="<?= $data['service_title'];?>" >
          </div>
        </div>
        <div class="form-group">
          <label for="" class="col-sm-3 control-label">Subtitle</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="subtitle" value="<?= $data['service_subtitle'];?>">
          </div>
        </div>
  </div>
  <div class="panel-footer text-center">
    <button class="btn btn-sm btn-primary">UPDATE</button>
  </div>
</div>
</form>
</div><!--col-md-12 end-->
<?php
get_footer();
?>
