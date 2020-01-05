    <?php
    require_once('functions/function.php');
    needLogged();
    get_header();
    get_sidebar();
    ?>
    <div class="col-md-12">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <div class="col-md-9 heading_title">
          Service Details
        </div>
        <div class="col-md-3 text-right">
          <a href="add-service-two-title.php" class="btn btn-sm btn btn-primary"><i class="fa fa-plus-circle"></i> Add Service Details</a>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="panel-body">
        <table class="table table-responsive table-striped table-hover table_cus">
          <thead class="table_head">
            <tr>
                 <th>Title</th>
                 <th>Subtitle</th>
                 <th>Manage</th>

            </tr>
          </thead>
          <tbody>

              <?php
                 $qry="SELECT * FROM service_two_title ORDER BY service_two_title_id DESC LIMIT 0,1";
                 $q=mysqli_query($con,$qry);
                 while ($data=mysqli_fetch_assoc($q)) {

              ?>
              <tr>
                    <td><?= $data['service_two_title']; ?></td>
                    <td><?= $data['service_two_subtitle'] ?></td>

                    <td>
                      <a href="view-service-two-title.php?v=<?= $data['service_two_title_id']; ?>"><i class="fa fa-plus-square fa-lg"></i></a>
                      <a href="edit-service-two-title.php?e=<?= $data['service_two_title_id']; ?>"><i class="fa fa-pencil-square fa-lg"></i></a>
                      <a href="delete-service-two-title.php?d=<?= $data['service_two_title_id']; ?>"><i class="fa fa-trash fa-lg"></i></a>
                    </td>
                  </tr>
                <?php } ?>
          </tbody>
        </table>
      </div>
      <div class="panel-footer">
        <div class="col-md-4">
          <a href="#" class="btn btn-sm btn-warning">EXCEL</a>
          <a href="#" class="btn btn-sm btn-primary">PDF</a>
          <a href="#" class="btn btn-sm btn-danger">SVG</a>
          <a href="#" class="btn btn-sm btn-success">PRINT</a>
        </div>
        <div class="col-md-4">
        </div>
        <div class="col-md-4 text-right">
          <nav aria-label="Page navigation">
            <ul class="pagination pagina_cus">
              <li>
                <a href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                </a>
              </li>
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li>
                <a href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
    </div><!--col-md-12 end-->
    <?php
    get_footer();
    ?>
