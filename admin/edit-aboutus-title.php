<?php
require_once('functions/function.php');
get_header();
get_sidebar();

$id=$_GET['e'];
$sql="SELECT * FROM aboutus_title WHERE aboutus_title_id='$id'";
$q=mysqli_query($con,$sql);
$data=mysqli_fetch_assoc($q);

if(!empty($_POST)){
  $title=$_POST['title'];
  $subtitle=$_POST['subtitle'];

  $update="UPDATE aboutus_title SET aboutus_title='$title', aboutus_subtitle='$subtitle' WHERE aboutus_title_id='$id'";
  if(mysqli_query($con,$update)){
    header('Location:view-aboutus-title.php?v='.$id);

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
          Update About Us Information
        </div>
        <div class="col-md-3 text-right">
          <a href="all-aboutus-title.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All About Us</a>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="panel-body">
        <div class="form-group">
          <label for="" class="col-sm-3 control-label">Title</label>
          <div class="col-sm-8">

            <input type="text" class="form-control" name="title" value="<?= $data['aboutus_title'];?>" >
          </div>
        </div>
        <div class="form-group">
          <label for="" class="col-sm-3 control-label">Subtitle</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="subtitle" value="<?= $data['aboutus_subtitle'];?>">
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
