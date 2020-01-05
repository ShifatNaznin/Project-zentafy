<?php
    require_once('functions/function.php');
    get_header();
    get_sidebar();

    $id=$_GET['v'];
    $sel="SELECT * FROM home_banner WHERE home_banner_id='$id'";
    $Q=mysqli_query($con,$sel);
    $info=mysqli_fetch_assoc($Q);
?>
    <div class="col-md-12">
    	<div class="panel panel-primary">
            <div class="panel-heading">
                <div class="col-md-9 heading_title">
                    All Home banner
                 </div>
                 <div class="col-md-3 text-right">
                 	<a href="all-home-banner.php" class="btn btn-sm btn btn-primary"><i class="fa fa-plus-circle"></i> All Home banner</a>
                </div>
                <div class="clearfix"></div>
            </div>
          <div class="panel-body">
              <div class="col-md-1">
              </div>
              <div class="col-md-9">
              	<table class="table table-hover table-striped table-responsive view_table_cus">
                	<tr>
                    	<td>Title</td>
                        <td>:</td>
                        <td><?= $info['home_banner_title']; ?></td>
                    </tr>
                	<tr>
                    	<td>Subtitle</td>
                        <td>:</td>
                        <td><?= $info['home_banner_subtitle']; ?></td>
                    </tr>
                	<tr>
                    	<td>Button</td>
                        <td>:</td>
                        <td><?= $info['home_banner_button']; ?></td>
                    </tr>
                	<tr>
                    	<td>URL</td>
                        <td>:</td>
                        <td><?= $info['home_banner_url']; ?></td>
                    </tr>
                    <tr>
                    	<td>Photo</td>
                        <td>:</td>
                        <td>
                          <?php
                            if(!empty($info['home_banner_photo'])){
                        ?>
                        <img height="50" width="50" src="uploads/<?=$info['home_banner_photo'];?>" alt="photo"/>
                        <?php
                          }else{
                        ?>
                        <img height="50" src="images/avatar.png" alt="photo"/>
                        <?php } ?>
                      </td>
                    </tr>


                </table>
              </div>
              <div class="col-md-2">
              </div>
          </div>
          <div class="panel-footer">
            <div class="col-md-4">
                <a href="#" class="btn btn-sm btn-primary">PDF</a>
                <a href="#" class="btn btn-sm btn-success">PRINT</a>
            </div>
            <div class="col-md-4">
            </div>
            <div class="col-md-4 text-right">

            </div>
            <div class="clearfix"></div>
          </div>
        </div>
    </div><!--col-md-12 end-->
<?php
    get_footer();
?>
