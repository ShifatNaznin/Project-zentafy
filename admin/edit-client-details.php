    <?php
    require_once('functions/function.php');
    get_header();
    get_sidebar();

    $id=$_GET['e'];
    $sel="SELECT * FROM client_details WHERE client_details_id='$id'";
    $Q=mysqli_query($con,$sel);
    $data=mysqli_fetch_assoc($Q);

    if(!empty($_POST)){
      $cname=$_POST['cname'];
      $position=$_POST['position'];
      $subtitle=$_POST['subtitle'];
      $btn=$_POST['btn'];
      $url=$_POST['url'];
      $photo=$_FILES['photo'];
      $photoName="banner_".time().'_'.rand(100000,1000000).'.'.pathinfo($photo['name'],PATHINFO_EXTENSION);

        $update="UPDATE client_details SET client_details_name='$cname',client_details_position='$position',client_details_subtitle='$subtitle',	client_details_photo='$photoName' WHERE client_details_id='$id'";

      if(mysqli_query($con,$update)){
          move_uploaded_file($photo['tmp_name'],'uploads/'.$photoName);
           header('Location:view-client-details.php?v='.$id);
      }
      else {
        echo "Update failed!";
      }
    }
    ?>
    <div class="col-md-12">
      <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <div class="col-md-9 heading_title">
              Update
            </div>
            <div class="col-md-3 text-right">
              <a href="all-client-details.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All</a>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="panel-body">
            <div class="form-group">
              <label for="" class="col-sm-3 control-label">Name</label>
              <div class="col-sm-8">

                <input type="text" class="form-control" name="cname" value="<?= $data['client_details_name'];?>" >
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-3 control-label">Position</label>
              <div class="col-sm-8">

                <input type="text" class="form-control" name="position" value="<?= $data['client_details_position'];?>" >
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-3 control-label">Subtitle</label>
              <div class="col-sm-8">

                <input type="text" class="form-control" name="subtitle" value="<?= $data['client_details_subtitle'];?>" >
              </div>
            </div>

            <div class="form-group">
              <label for="" class="col-sm-3 control-label">Photo</label>
              <div class="col-sm-8">
                <?php
                if(!empty($data['client_details_photo'])){
                  ?>
                  <img id="upload_image" height="50" width="50" src="uploads/<?= $data['client_details_photo'];?>" alt="photo"/>
                  <?php
                }else{
                  ?>
                  <img height="50" src="images/avatar.png" alt="photo"/>
                <?php } ?>

                <input type="file" name="photo" onchange="readURL(this);" >
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
