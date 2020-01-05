    <?php
    require_once('functions/function.php');
    needLogged();
    if($_SESSION['role']==1){
      get_header();
      get_sidebar();

       if(!empty($_POST)){
         $title=$_POST['title'];
         $subtitle=$_POST['subtitle'];
         $insert="INSERT INTO service_title(service_title,service_subtitle) VALUES ('$title','$subtitle')";
         if(mysqli_query($con,$insert)){
           echo"Service Information Uploaded";
         }else {
           echo "Service Information Uploaded Failed!!";
         }
       }

       ?>
      <div class="col-md-12">
        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <div class="col-md-9 heading_title">
                Add Service Title
              </div>
              <div class="col-md-3 text-right">
                <a href="all-service-title.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Service Title/Subtitle</a>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="panel-body">
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Service Title</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="title">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Service Subtitle</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="subtitle">
                </div>
              </div>
            </div>
            <div class="panel-footer text-center">
              <button class="btn btn-sm btn-primary">UPLOAD</button>
            </div>
          </div>
        </form>
      </div><!--col-md-12 end-->
      <?php
      get_footer();
    }else{
      echo "Invalid! You have no permission visit this page.";
    }
    ?>
