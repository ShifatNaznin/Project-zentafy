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
                    All Home Information
                 </div>

                <div class="clearfix"></div>
            </div>
          <div class="panel-body">
              <table class="table table-responsive table-striped table-hover table_cus">
              		<thead class="table_head">
                     <th>Home Feature</th>
                	</thead>
                    <tbody>

                    	<tr>
                        <td>Home Banner
                            <div class="table_btn" >

                          	<a href="add-home-banner.php" class="btn btn-sm btn btn-primary" float="right">
                                   <i class="fa fa-plus-circle"></i> Add Home Banner</a>
                           	<a href="all-home-banner.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Home Banner</a>
                              </div>
                          </td>
                        </tr>

                        <tr>
                        	<td>About Us
                            <div class="table_btn" >

                          	<a href="add-aboutus-title.php" class="btn btn-sm btn btn-primary" float="right">
                                   <i class="fa fa-plus-circle"></i> Add About Us Title</a>
                           	<a href="all-aboutus-title.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All About Us Title</a>
                              </div>
                            </td>
                            </tr>
                        <tr>
                        	<td>AboutUs Details
                            <div class="table_btn" >

                          	<a href="add-aboutus-det-title.php" class="btn btn-sm btn btn-primary" float="right">
                                   <i class="fa fa-plus-circle"></i> Add AboutUs Details Title</a>
                           	<a href="all-aboutus-det-title.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All AboutUs Details Title</a>
                              </div>
                            </td>
                            </tr>
                        <tr>
                        	<td>AboutUs Other Part
                            <div class="table_btn" >

                          	<a href="add-aboutus-other-part.php" class="btn btn-sm btn btn-primary" float="right">
                                   <i class="fa fa-plus-circle"></i> Add AboutUs Other Part Title</a>
                           	<a href="all-aboutus-other-part.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All AboutUs Other Part Title</a>
                              </div>
                            </td>
                            </tr>
                        <tr>
                        	<td>Home Service
                            <div class="table_btn" >

                          	<a href="add-service-title.php" class="btn btn-sm btn btn-primary" float="right">
                                   <i class="fa fa-plus-circle"></i> Add Home Service Title</a>
                           	<a href="all-service-title.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Home Service Title</a>
                              </div>
                            </td>
                            </tr>
                        <tr>
                        	<td>Service One
                            <div class="table_btn" >

                          	<a href="add-service-one-title.php" class="btn btn-sm btn btn-primary" float="right">
                                   <i class="fa fa-plus-circle"></i> Add Service One Title</a>
                           	<a href="all-service-one-title.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Service One Title</a>
                              </div>
                            </td>
                            </tr>
                        <tr>
                        	<td>Service Two
                            <div class="table_btn" >

                          	<a href="add-service-two-title.php" class="btn btn-sm btn btn-primary" float="right">
                                   <i class="fa fa-plus-circle"></i> Add Service Two Title</a>
                           	<a href="all-service-two-title.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Service Two Title</a>
                              </div>
                            </td>
                            </tr>
                        <tr>
                        	<td>Service Three
                            <div class="table_btn" >

                          	<a href="add-service-three-title.php" class="btn btn-sm btn btn-primary" float="right">
                                   <i class="fa fa-plus-circle"></i> Add Service Three Title</a>
                           	<a href="all-service-three-title.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Service Three Title</a>
                              </div>
                            </td>
                            </tr>
                        <tr>
                        	<td>Client
                            <div class="table_btn" >

                          	<a href="add-client-title.php" class="btn btn-sm btn btn-primary" float="right">
                                   <i class="fa fa-plus-circle"></i> Add Client Title</a>
                           	<a href="all-client-title.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Client Title</a>
                              </div>
                            </td>
                            </tr>
                        <tr>
                        	<td>Client Details
                            <div class="table_btn" >

                          	<a href="add-client-details.php" class="btn btn-sm btn btn-primary" float="right">
                                   <i class="fa fa-plus-circle"></i> Add Client Details Title</a>
                           	<a href="all-client-details.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Client Details Title</a>
                              </div>
                            </td>
                            </tr>



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
