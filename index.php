    <?php
    require_once('functions/function.php');
    get_header();
    ?>

    <section class="bg_home_landing full_height_100vh_home" id="home">
      <div class="bg_overlay_cover_on"></div>
      <div class="home_table_cell">
        <div class="home_table_cell_center">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <?php
                $sel="SELECT * FROM  home_banner ORDER BY  home_banner_id DESC LIMIT 0,1";
                $Q=mysqli_query($con,$sel);
                while ($data=mysqli_fetch_assoc($Q)) {
                  ?>
                  <div class="text-center">

                    <div class="video-btn-white text-center">
                      <a href="http://vimeo.com/99025203" class="play-btn-white features_video mx-auto">
                        <i class="mdi mdi-play"></i>
                        <p>Watch Video</p>
                      </a>
                    </div>

                    <h1 class="home_title text-white mx-auto text-capitalize mb-0"> <span class="text-typed" data-elements="<?= $data['home_banner_title'] ?>"></span> </h1>
                    <div class="home_text_details">
                      <p class="home_subtitle mt-4 mx-auto mb-0"><?= $data['home_banner_subtitle'] ?></p>
                    </div>

                    <div class="home_btn_manage mt-5">
                      <a href="<?= $data['home_banner_url'] ?>" class="btn btn_custom mr-3"><?= $data['home_banner_button'] ?></a>
                    </div>
                  </div>
                <?php } ?>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Home Section End-->

    <!-- About Start -->
    <section class="section_all bg-light" id="aboutus">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <?php
            $sql="SELECT * FROM aboutus_title ORDER BY aboutus_title_id DESC LIMIT 0,1";
            $q=mysqli_query($con,$sql);
            while ($data=mysqli_fetch_assoc($q)) {
              ?>
            <div class="text-center">
              <p class="text-white text-uppercase section_small_title">About Us</p>
              <h4 class="section-title pt-1"><?= $data['aboutus_title'] ?></h4>
              <p class="text-muted pt-2 section-subtitle mx-auto"><?= $data['aboutus_subtitle'] ?></p>
              <div class="section_subtitle_border mx-auto"></div>
            </div>
          <?php } ?>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <?php
            $sql="SELECT * FROM aboutus_det_title ORDER BY aboutus_det_title_id DESC LIMIT 0,1";
            $q=mysqli_query($con,$sql);
            while ($data=mysqli_fetch_assoc($q)) {
              ?>
            <div class="about_agency text-center mt-3">
              <h3><?= $data['aboutus_det_title'] ?></h3>
              <p class="text-muted pt-2 text-center mx-auto"><?= $data['aboutus_det_subtitle_one'] ?></p>

              <p class="text-muted pt-2 mx-auto"><?= $data['aboutus_det_subtitle_two'] ?></p>
            </div>
          <?php } ?>
          </div>
        </div>
        <?php
        $sql="SELECT * FROM  aboutus_other_part ORDER BY aboutus_other_part_id DESC LIMIT 0,1";
        $q=mysqli_query($con,$sql);
        while ($data=mysqli_fetch_assoc($q)) {
          ?>

        <div class="row vertical_content_manage mt-5">
            <div class="col-lg-6">
                <div class="about_header_main mt-3">
                    <h4 class="about_heading font-weight-normal text-capitalize"><?= $data['aboutus_other_part_title'] ?></h4>
                    <p class="text-muted pt-2"><?= $data['aboutus_other_part_subtitle'] ?></p>
                    <p class="text-muted pt-2"><?= $data['aboutus_other_part_subtitle_two'] ?></p>

                    <div class="mt-3">
                        <a href="#" class="btn btn_custom"><?= $data['aboutus_other_part_button'] ?></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="video_section mt-3">
                    <a href="https://vimeo.com/109054393" class="features_video"><i class="mdi mdi-play presentation_icon"></i> </a>
                    <img height="350" width="630" src="admin/uploads/<?= $data['aboutus_other_part_photo'];  ?>" alt="photo" class="img-fluid mx-auto d-block rounded">
                </div>
            </div>
        </div>
<?php } ?>
      </div>
    </section>
    <!-- About End -->

    <!-- Start Cta -->
    <section class="section_all bg_buss_cta_img">
      <div class="bg_overlay_cover_on"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="text-center text-white">
              <h2 class="cta_heading">Become a part of zentafy bussiness community today.</h2>
              <p class="mx-auto cta_details mt-4 pt-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
              <div class="mt-5">
                <a href="#" class="btn btn_custom btn-rounded">Contact Us</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Cta -->

    <!-- Services Start -->
    <section class="section_all" id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <?php
            $sql="SELECT * FROM service_title ORDER BY service_title_id DESC LIMIT 0,1";
            $q=mysqli_query($con,$sql);
            while ($data=mysqli_fetch_assoc($q)) {
              ?>
              <div class="text-center">
                <p class="text-white text-uppercase section_small_title">Services</p>
                <h4 class="section-title pt-1"><?= $data['service_title']?></h4>
                <p class="text-muted pt-2 section-subtitle mx-auto"><?= $data['service_subtitle']?></p>
                <div class="section_subtitle_border mx-auto"></div>
              </div>
            <?php } ?>
          </div>
        </div>

        <div class="row mt-5">
          <div class="col-lg-4">
            <div class="services_box text-center p-4 mt-3">
              <div class="service_icon">
                <i class="mdi mdi-camera-iris"></i>
              </div>
              <?php
              $sql="SELECT * FROM service_one_title ORDER BY service_one_title_id DESC LIMIT 0,1";
              $q=mysqli_query($con,$sql);
              while ($data=mysqli_fetch_assoc($q)) {
                ?>
                <div class="service_content mt-3">
                  <h5 class="font-weight-bold"><?= $data['service_one_title']?></h5>
                  <p class="mt-3 text-muted mb-0"><?= $data['service_one_subtitle']?></p>
                  <a href="#" class="text_custom mt-3 d-inline-block">Know More <i class="mdi mdi-arrow-right"></i></a>
                </div>
              <?php } ?>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="services_box text-center p-4 mt-3">
              <div class="service_icon">
                <i class="mdi mdi-cellphone-link"></i>
              </div>
              <?php
              $sql="SELECT * FROM service_two_title ORDER BY service_two_title_id DESC LIMIT 0,1";
              $q=mysqli_query($con,$sql);
              while ($data=mysqli_fetch_assoc($q)) {
                ?>
                <div class="service_content mt-3">
                  <h5 class="font-weight-bold"><?= $data['service_two_title']?></h5>
                  <p class="mt-3 text-muted mb-0"><?= $data['service_two_subtitle']?></p>
                  <a href="#" class="text_custom mt-3 d-inline-block">Know More <i class="mdi mdi-arrow-right"></i></a>
                </div>
              <?php } ?>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="services_box text-center p-4 mt-3">
              <div class="service_icon">
                <i class="mdi mdi-creation"></i>
              </div>
              <?php
              $sql="SELECT * FROM service_three_title ORDER BY service_three_title_id DESC LIMIT 0,1";
              $q=mysqli_query($con,$sql);
              while ($data=mysqli_fetch_assoc($q)) {
                ?>
                <div class="service_content mt-3">
                  <h5 class="font-weight-bold"><?= $data['service_three_title']?></h5>
                  <p class="mt-3 text-muted mb-0"><?= $data['service_three_subtitle']?></p>
                  <a href="#" class="text_custom mt-3 d-inline-block">Know More <i class="mdi mdi-arrow-right"></i></a>
                </div>
              <?php } ?>
            </div>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-lg-4">
            <div class="services_box text-center p-4 mt-3">
              <div class="service_icon">
                <i class="mdi mdi-palette"></i>
              </div>
              <div class="service_content mt-3">
                <h5 class="font-weight-bold">Unlimited Color</h5>
                <p class="mt-3 text-muted mb-0">There is now an abundance of readable dummy texts. These are usually used when a text is required purely. </p>
                <a href="#" class="text_custom mt-3 d-inline-block">Know More <i class="mdi mdi-arrow-right"></i></a>
              </div>

            </div>
          </div>

          <div class="col-lg-4">
            <div class="services_box text-center p-4 mt-3">
              <div class="service_icon">
                <i class="mdi mdi-headset "></i>
              </div>
              <div class="service_content mt-3">
                <h5 class="font-weight-bold">Easy to customize</h5>
                <p class="mt-3 text-muted mb-0">There is now an abundance of readable dummy texts. These are usually used when a text is required purely. </p>
                <a href="#" class="text_custom mt-3 d-inline-block">Know More <i class="mdi mdi-arrow-right"></i></a>
              </div>

            </div>
          </div>

          <div class="col-lg-4">
            <div class="services_box text-center p-4 mt-3">
              <div class="service_icon ">
                <i class="mdi mdi-responsive"></i>
              </div>
              <div class="service_content mt-3">
                <h5 class="font-weight-bold">Responsive Design</h5>
                <p class="mt-3 text-muted mb-0">There is now an abundance of readable dummy texts. These are usually used when a text is required purely. </p>
                <a href="#" class="text_custom mt-3 d-inline-block">Know More <i class="mdi mdi-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Services End -->

    <!-- Work Process Start -->
    <section class="section_all bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="text-center">
              <p class="text-white text-uppercase section_small_title">How we Work</p>
              <h4 class="section-title pt-1">Our Working Process</h4>
              <p class="text-muted pt-2 section-subtitle mx-auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <div class="section_subtitle_border mx-auto"></div>
            </div>
          </div>
        </div>

        <div class="row mt-5 vertical_content_manage">
          <div class="col-lg-6">
            <div class="work_process_main_desc mt-3">
              <div class="workflow_header_main">
                <div class="workflow_icon_box">
                  <p> <i class="mdi mdi-auto-fix text_custom"></i> </p>
                </div>
                <h3 class="workflow_heading text-capitalize font-weight-bold mt-4">Grow Your business for Professional Working Process.</h3>
                <p class="workflow_desc text-muted mt-3">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum.</p>
                <div class="mt-4">
                  <a href="#" class="btn btn_custom">Learn More<i class="mdi mdi-arrow-right ml-2"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="work_flow_content bg-white mt-3">
              <div class="work_flow_detail">
                <div class="work_flow_number">1</div>
                <h5 class=" mt-3">Research & Devloping</h5>
                <p class="work_flow_desc text-muted mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humouror randomised words.</p>
              </div>
            </div>

            <div class="work_flow_content bg-white mt-3">
              <div class="work_flow_detail">
                <div class="work_flow_number">2</div>
                <h5 class=" mt-3">Launch Your Project</h5>
                <p class="work_flow_desc text-muted mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour or randomised words.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Work Process End  -->

    <!-- Start Portfolio -->
    <section class="section_all text-center" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="text-center">
              <p class="text-white text-uppercase section_small_title">Portfolio</p>
              <h4 class="section-title pt-1">Some Our Recent Work</h4>
              <p class="text-muted pt-2 section-subtitle mx-auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <div class="section_subtitle_border mx-auto"></div>
            </div>
          </div>
        </div>
        <div class="row mt-5">
          <ul class="col list-unstyled list-inline mb-0 text-uppercase work_menu" id="menu-filter">
            <li class="list-inline-item"><a class="active" data-filter="*">All</a></li>
            <li class="list-inline-item"><a class="" data-filter=".seo">Seo</a></li>
            <li class="list-inline-item"><a class="" data-filter=".webdesign">Webdesign</a></li>
            <li class="list-inline-item"><a class="" data-filter=".work">WORK</a></li>
            <li class="list-inline-item"><a class="" data-filter=".wordpress">Wordpress</a></li>
          </ul>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row mt-5 work-filter">
          <div class="col-lg-4 work_item webdesign wordpress">
            <div class="work_box">
              <a href="images/portfolio/portfolio-1.jpg" class="img-zoom">
                <div class="work_img">
                  <img src="images/portfolio/portfolio-1.jpg" alt="" class="img-fluid mx-auto d-block" />
                </div>
              </a>
              <div class="work_detail text-center">
                <h4 class="font-weight-bold">Open Imagination</h4>
                <p class="text-muted mb-0">Media, Icons</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 work_item work webdesign seo">
            <div class="work_box">
              <a href="images/portfolio/portfolio-2.jpg" class="img-zoom">
                <div class="work_img">
                  <img src="images/portfolio/portfolio-2.jpg" alt="" class="img-fluid mx-auto d-block" />
                </div>
              </a>
              <div class="work_detail text-center">
                <h4 class="font-weight-bold">Locked Steel Gate</h4>
                <p class="text-muted mb-0">Illustrations</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 work_item seo wordpress">
            <div class="work_box">
              <a href="images/portfolio/portfolio-3.jpg" class="img-zoom">
                <div class="work_img">
                  <img src="images/portfolio/portfolio-3.jpg" alt="" class="img-fluid mx-auto d-block" />
                </div>
              </a>
              <div class="work_detail text-center">
                <h4 class="font-weight-bold">Console Activity</h4>
                <p class="text-muted mb-0">UI Elements, Media</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 work_item wordpress work webdesign">
            <div class="work_box">
              <a href="images/portfolio/portfolio-4.jpg" class="img-zoom">
                <div class="work_img">
                  <img src="images/portfolio/portfolio-4.jpg" alt="" class="img-fluid mx-auto d-block" />
                </div>
              </a>
              <div class="work_detail text-center">
                <h4 class="font-weight-bold">Mac Sunglasses</h4>
                <p class="text-muted mb-0">Graphics, UI Elements</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 work_item wordpress work webdesign">
            <div class="work_box">
              <a href="images/portfolio/portfolio-5.jpg" class="img-zoom">
                <div class="work_img">
                  <img src="images/portfolio/portfolio-5.jpg" alt="" class="img-fluid mx-auto d-block" />
                </div>
              </a>
              <div class="work_detail text-center">
                <h4 class="font-weight-bold">Locked Steel Gate</h4>
                <p class="text-muted mb-0">Graphics, UI Elements</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 work_item wordpress work webdesign">
            <div class="work_box">
              <a href="images/portfolio/portfolio-6.jpg" class="img-zoom">
                <div class="work_img">
                  <img src="images/portfolio/portfolio-6.jpg" alt="" class="img-fluid mx-auto d-block" />
                </div>
              </a>
              <div class="work_detail text-center">
                <h4 class="font-weight-bold">Backpack Contents</h4>
                <p class="text-muted mb-0">UI Elements, Media</p>
              </div>
            </div>
          </div>

        </div>

        <div class="row">
          <div class="col-lg-12">
            <div class="text-center mt-5">
              <a href="#" class="btn btn_custom">View More Work<i class="mdi mdi-arrow-right ml-2"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Portfolio -->

    <!-- START CTA -->
    <section class="section_all bg_creative_cta">
      <div class="bg_overlay_cover_on"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="text-center text-white">
              <h2 class="cta_heading font-weight-bold">Let's get started with Zentafy</h2>
              <p class="mx-auto cta_details mt-4 pt-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
              <div class="mt-5">
                <a href="#" class="btn btn_custom">Get Started</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END CTA -->

    <!-- Desc Start -->
    <section class="section_all bg-light">
      <div class="container">
        <div class="row vertical_content_manage">
          <div class="col-lg-6">
            <div class="mt-3 choose_main_head">
              <img src="images/macbook.png" alt="" class="img-fluid mx-auto d-block">
            </div>
          </div>

          <div class="col-lg-6">
            <div class="choose_head_contant mt-3">
              <div class="content_box p-4">
                <div class="content_icon">
                  <i class="text_custom font-weight-bold mdi mdi-android"></i>
                </div>
                <div class="content_details">
                  <div class="">
                    <h5 class="text-capitalize">Business Plannning.</h5>
                  </div>
                  <p class="text-muted mb-0">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using has normal distribution.</p>
                </div>
              </div>
            </div>

            <div class="choose_head_contant mt-3">
              <div class="content_box p-4">
                <div class="content_icon">
                  <i class="text_custom font-weight-bold mdi mdi-airplay"></i>
                </div>
                <div class="content_details">
                  <div class="">
                    <h5 class="text-capitalize">Market Analysis.</h5>
                  </div>
                  <p class="text-muted mb-0">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using has normal distribution.</p>
                </div>
              </div>
            </div>

            <div class="choose_head_contant mt-3">
              <div class="content_box p-4">
                <div class="content_icon">
                  <i class="text_custom font-weight-bold mdi mdi-arrow-expand-all"></i>
                </div>
                <div class="content_details">
                  <div class="">
                    <h5 class="text-capitalize">Search Opertuities.</h5>
                  </div>
                  <p class="text-muted mb-0">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using has normal distribution.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Desc End  -->

    <!-- Start Client -->
    <section class="section_all" id="client">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <?php
            $sql="SELECT * FROM client_title ORDER BY client_title_id DESC LIMIT 0,1";
            $q=mysqli_query($con,$sql);
            while ($data=mysqli_fetch_assoc($q)) {
              ?>
            <div class="text-center">
              <p class="text-white text-uppercase section_small_title">Our Client's</p>
              <h4 class="section-title pt-1"><?= $data['client_title'] ?></h4>
              <p class="text-muted pt-2 section-subtitle mx-auto"><?= $data['client_subtitle'] ?></p>
              <div class="section_subtitle_border mx-auto"></div>
            </div>
          <?php } ?>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-lg-12">
            <div id="owl-demo" class="owl-carousel">
              <?php
              $sql="SELECT * FROM client_details ORDER BY client_details_id DESC LIMIT 0,4";
              $q=mysqli_query($con,$sql);
              while ($data=mysqli_fetch_assoc($q)) {
                ?>
              <div class="text-center testi_box_all bg-light mt-3">
                <div class="testi_icons text_custom">
                  <i class="mdi mdi-format-quote-open"></i>
                </div>
                <div class="">
                  <p class="client_review text-muted font-italic text-center"><?= $data['client_details_subtitle'] ?></p>
                  <p class="client_name text-center text_custom mb-0 mt-3"><?= $data['client_details_name'] ?></p>
                  <p class="text-muted mb-0"><?= $data['client_details_position'] ?></p>
                  <div class="client_img mx-auto mt-3">
                    <img height="100" width="100" src="admin/uploads/<?= $data['client_details_photo'];  ?>" alt="photo"  class="img-fluid rounded-circle d-block">
                  </div>
                </div>
              </div>
            <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Client -->

    <!-- Features Start -->
    <section class="section_all bg-light" id="features">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="text-center">
              <p class="text-white text-uppercase section_small_title">Features</p>
              <h4 class="section-title pt-1">Appropriate Features</h4>
              <p class="text-muted pt-2 section-subtitle mx-auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <div class="section_subtitle_border mx-auto"></div>
            </div>
          </div>
        </div>

        <div class="row mt-5">
          <div class="col-lg-4">
            <div class="features_type_box text-center active_features p-4 mt-3">
              <div class="features_icon_box">
                <i class="mdi mdi-barley text_custom"></i>
              </div>
              <div class="features_details_box mt-3">
                <h5 class="font-weight-bold">Clean & Minimal Design</h5>
                <p class="mt-3 mb-0">There is now an abundance of readable dummy texts. These are usually used when a text is required purely. </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="features_type_box text-center bg-white p-4 mt-3">
              <div class="features_icon_box">
                <i class="mdi mdi-crop text_custom"></i>
              </div>
              <div class="features_details_box mt-3">
                <h5 class="font-weight-bold">Planing & Strategy</h5>
                <p class="mt-3 mb-0">There is now an abundance of readable dummy texts. These are usually used when a text is required purely. </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="features_type_box text-center active_features p-4 mt-3">
              <div class="features_icon_box">
                <i class="mdi mdi-gamepad text_custom"></i>
              </div>
              <div class="features_details_box mt-3">
                <h5 class="font-weight-bold">Modern Design</h5>
                <p class="mt-3 mb-0">There is now an abundance of readable dummy texts. These are usually used when a text is required purely. </p>
              </div>
            </div>
          </div>
        </div>

        <div class="row mt-3">
          <div class="col-lg-4">
            <div class="features_type_box text-center bg-white p-4 mt-3">
              <div class="features_icon_box">
                <i class="mdi mdi-image-filter-hdr text_custom"></i>
              </div>
              <div class="features_details_box mt-3">
                <h5 class="font-weight-bold">Graphic Design</h5>
                <p class="mt-3 mb-0">There is now an abundance of readable dummy texts. These are usually used when a text is required purely. </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="features_type_box text-center active_features p-4 mt-3">
              <div class="features_icon_box">
                <i class="mdi mdi-lightbulb-on text_custom"></i>
              </div>
              <div class="features_details_box mt-3">
                <h5 class="font-weight-bold">Easy Customize</h5>
                <p class="mt-3 mb-0">There is now an abundance of readable dummy texts. These are usually used when a text is required purely. </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="features_type_box text-center bg-white p-4 mt-3">
              <div class="features_icon_box">
                <i class="mdi mdi-motorbike text_custom"></i>
              </div>
              <div class="features_details_box mt-3">
                <h5 class="font-weight-bold">Responsive Layout</h5>
                <p class="mt-3 mb-0">There is now an abundance of readable dummy texts. These are usually used when a text is required purely. </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Features End  -->

    <!-- Team Start  -->
    <section class="section_all" id="team">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="text-center">
              <p class="text-white text-uppercase section_small_title">Our Team</p>
              <h4 class="section-title pt-1">Behind the theme</h4>
              <p class="text-muted pt-2 section-subtitle mx-auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <div class="section_subtitle_border mx-auto"></div>
            </div>
          </div>
        </div>

        <div class="row mt-5">
          <div class="col-lg-3">
            <div class="team_box_all rounded text-center mt-3">
              <div class="team_img">
                <img src="images/team/team-1.jpg" alt="" class="img-fluid mx-auto d-block">
              </div>
              <div class="p-4">
                <h6 class="mb-0 font-weight-bold">Aaron Lomeli</h6>
                <p class="text-muted team_work">CEO/Founder</p>
                <div class="team_follow">
                  <a href="#" class="text-white">Follow me</a>
                </div>
              </div>

              <div class="team_social">
                <ul class="list-inline mt-2 mb-0 text-center">
                  <li class="list-inline-item"><a href="#" class="team_social_border"><i class="mdi mdi-facebook"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="team_social_border"><i class="mdi mdi-google"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="mdi mdi-twitter"></i></a></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="team_box_all rounded text-center mt-3">
              <div class="team_img">
                <img src="images/team/team-2.jpg" alt="" class="img-fluid mx-auto d-block">
              </div>
              <div class="p-4">
                <h6 class="mb-0 font-weight-bold">Michael Sears</h6>
                <p class="text-muted team_work">Founder</p>
                <div class="team_follow">
                  <a href="#" class="text-white">Follow me</a>
                </div>
              </div>

              <div class="team_social">
                <ul class="list-inline mt-2 mb-0 text-center">
                  <li class="list-inline-item"><a href="#" class="team_social_border"><i class="mdi mdi-facebook"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="team_social_border"><i class="mdi mdi-google"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="mdi mdi-twitter"></i></a></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="team_box_all rounded text-center mt-3">
              <div class="team_img">
                <img src="images/team/team-3.jpg" alt="" class="img-fluid mx-auto d-block">
              </div>
              <div class="p-4">
                <h6 class="mb-0 font-weight-bold">Stephanie Macias</h6>
                <p class="text-muted team_work">Co-Founder</p>
                <div class="team_follow">
                  <a href="#" class="text-white">Follow me</a>
                </div>
              </div>

              <div class="team_social">
                <ul class="list-inline mt-2 mb-0 text-center">
                  <li class="list-inline-item"><a href="#" class="team_social_border"><i class="mdi mdi-facebook"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="team_social_border"><i class="mdi mdi-google"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="mdi mdi-twitter"></i></a></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="team_box_all rounded text-center mt-3">
              <div class="team_img">
                <img src="images/team/team-4.jpg" alt="" class="img-fluid mx-auto d-block">
              </div>
              <div class="p-4">
                <h6 class="mb-0 font-weight-bold">Darlene Gandy</h6>
                <p class="text-muted team_work">Sr. Developers</p>
                <div class="team_follow">
                  <a href="#" class="text-white">Follow me</a>
                </div>
              </div>

              <div class="team_social">
                <ul class="list-inline mt-2 mb-0 text-center">
                  <li class="list-inline-item"><a href="#" class="team_social_border"><i class="mdi mdi-facebook"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="team_social_border"><i class="mdi mdi-google"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="mdi mdi-twitter"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Team End -->

    <!-- Pricing Start  -->
    <section class="section_all bg-light" id="pricing">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="text-center">
              <p class="text-white text-uppercase section_small_title">Pricing</p>
              <h4 class="section-title pt-1">Our Pricing Plan</h4>
              <p class="text-muted pt-2 section-subtitle mx-auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <div class="section_subtitle_border mx-auto"></div>
            </div>
          </div>
        </div>

        <div class="row mt-5">
          <div class="col-lg-4">
            <div class="mt-3 business_price_box rounded text-center bg-white">
              <div class="business_price_icon">
                <i class="mdi mdi-auto-fix text_custom"></i>
              </div>
              <div class="plan_price">
                <h5 class="mb-0 font-weight-bold mt-3">Startup Plan</h5>
              </div>
              <div class="business_price_header mt-4 ">
                <h1 class="mb-0 mb-4 text_custom font-weight-bold"><sub>$</sub>19/<span>month</span></h1>
              </div>
              <div class="business_price_features mt-5 text-muted">
                <p>Additional Features </p>
                <p>Free Email Support</p>
                <p>10 Domain</p>
                <p>24/7 Support</p>
                <p>Single User</p>
              </div>
              <div class="text-center mt-5">
                <a href="#" class="btn btn_custom">Get Started</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="mt-3 business_price_box rounded text-center bg-white">
              <div class="business_price_icon">
                <i class="mdi mdi-crown text_custom"></i>
              </div>
              <div class="plan_price">
                <h5 class="mb-0 font-weight-bold mt-3">Business Plan</h5>
              </div>
              <div class="business_price_header mt-4 ">
                <h1 class="mb-0 mb-4 text_custom font-weight-bold"><sub>$</sub>39/<span>month</span></h1>
              </div>
              <div class="business_price_features mt-5 text-muted">
                <p>Additional Features </p>
                <p>Free Email Support</p>
                <p>10 Domain</p>
                <p>24/7 Support</p>
                <p>Single User</p>
              </div>
              <div class="text-center mt-5">
                <a href="#" class="btn btn_custom">Get Started</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="mt-3 business_price_box rounded text-center bg-white">
              <div class="business_price_icon">
                <i class="mdi mdi-diamond text_custom"></i>
              </div>
              <div class="plan_price">
                <h5 class="mb-0 font-weight-bold mt-3">Premiume Plan</h5>
              </div>
              <div class="business_price_header mt-4 ">
                <h1 class="mb-0 mb-4 text_custom font-weight-bold"><sub>$</sub>59/<span>month</span></h1>
              </div>
              <div class="business_price_features mt-5 text-muted">
                <p>Additional Features </p>
                <p>Free Email Support</p>
                <p>10 Domain</p>
                <p>24/7 Support</p>
                <p>Single User</p>
              </div>
              <div class="text-center mt-5">
                <a href="#" class="btn btn_custom">Get Started</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Pricing End   -->

    <!-- Counter Start -->
    <section class="section_all bg_counter_cover">
      <!-- <div class="bg_overlay_cover_on"></div> -->
      <div class="container">
        <div class="row" id="counter">
          <div class="col-lg-3">
            <div class="text-center counter_box p-4 mt-3 text-white">
              <div class="counter_icon mb-3">
                <i class="mdi mdi-alarm"></i>
              </div>
              <h1 class="counter_value mb-1" data-count="654">4 </h1>
              <p class="info_name font-weight-bold mt-3 mb-0">Working Hours</p>
              <p class="mt-3">It is a long established fact that a reader will be distracted by the readable content.</p>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="text-center counter_box p-4 mt-3 text-white">
              <div class="counter_icon mb-3">
                <i class="mdi mdi-book-open-variant"></i>
              </div>
              <h1 class="counter_value mb-1" data-count="6400">10</h1>
              <p class="info_name font-weight-bold mt-3 mb-0">Completed Projects</p>
              <p class="mt-3">It is a long established fact that a reader will be distracted by the readable content.</p>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="text-center counter_box p-4 mt-3 text-white">
              <div class="counter_icon mb-3">
                <i class="mdi mdi-account-box-outline"></i>
              </div>
              <h1 class="counter_value mb-1" data-count="2389">201</h1>
              <p class="info_name font-weight-bold mt-3 mb-0">No. of Clients</p>
              <p class="mt-3">It is a long established fact that a reader will be distracted by the readable content.</p>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="text-center counter_box p-4 mt-3 text-white">
              <div class="counter_icon mb-3">
                <i class="mdi mdi-account-multiple-outline"></i>
              </div>
              <h1 class="counter_value mb-1" data-count="653">2</h1>
              <p class="info_name font-weight-bold mt-3 mb-0">Team Member</p>
              <p class="mt-3">It is a long established fact that a reader will be distracted by the readable content.</p>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- Counter End -->

    <!-- Blog Start -->
    <section class="section_all" id="blog">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="text-center">
              <p class="text-white text-uppercase section_small_title">Blog</p>
              <h4 class="section-title pt-1">Our Recent Blog</h4>
              <p class="text-muted pt-2 section-subtitle mx-auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <div class="section_subtitle_border mx-auto"></div>
            </div>
          </div>
        </div>

        <div class="row mt-5">
          <div class="col-lg-4">
            <div class="blog_box mt-3">
              <div class="blog_img">
                <img src="images/blog/blog-1.jpg" alt="" class="img-fluid mx-auto d-block">
              </div>
              <div class="blog_desc_box text-center p-3">
                <p class="label mb-0 mt-3">1 December 2018</p>
                <p class="text_custom blog_author_name mt-3">By <span class="">Juana M. Austin</span></p>
                <a href="#" class="text-dark"><h5 class="font-weight-bold">There are many variations</h5></a>
                <p class="text-muted mt-3">It is a long established fact that a reader will be distracted by the readable content of a page. There is now an abundance.</p>

                <a href="#" class="text-dark font-weight-bold">
                  Learn More
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="blog_box mt-3">
              <div class="blog_img">
                <img src="images/blog/blog-2.jpg" alt="" class="img-fluid mx-auto d-block">
              </div>
              <div class="blog_desc_box text-center p-3">
                <p class="label mb-0 mt-3">10 December 2018</p>
                <p class="text_custom blog_author_name mt-3">By <span class="">Troy B. Hearn</span></p>
                <a href="#" class="text-dark"><h5 class="font-weight-bold">There are many variations</h5></a>
                <p class="text-muted mt-3">It is a long established fact that a reader will be distracted by the readable content of a page. There is now an abundance.</p>

                <a href="#" class="text-dark font-weight-bold">
                  Learn More
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="blog_box mt-3">
              <div class="blog_img">
                <img src="images/blog/blog-3.jpg" alt="" class="img-fluid mx-auto d-block">
              </div>
              <div class="blog_desc_box text-center p-3">
                <p class="label mb-0 mt-3">12 December 2018</p>
                <p class="text_custom blog_author_name mt-3">By <span class="">David S. Morgan</span></p>
                <a href="#" class="text-dark"><h5 class="font-weight-bold">There are many variations</h5></a>
                <p class="text-muted mt-3">It is a long established fact that a reader will be distracted by the readable content of a page. There is now an abundance.</p>

                <a href="#" class="text-dark font-weight-bold">
                  Learn More
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Blog End  -->

    <!-- START CTA -->
    <section class="section_all bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="text-center">
              <h3 class="font-weight-bold cta_heading">Do You have a any project... ?</h3>
              <p class="mx-auto cta_details mt-4 pt-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
              <div class="mt-4 pt-3">
                <a href="#" class="btn btn_custom btn-rounded font-weight-bold"><i class="mdi mdi-phone"></i> Contact Us</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END CTA -->

    <!-- Start Contact Us  -->
    <section class="section_all" id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="text-center">
              <p class="text-white text-uppercase section_small_title">Contact Us</p>
              <h4 class="section-title pt-1 ">Get in touch</h4>
              <p class="text-muted pt-1 section-subtitle mx-auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <div class="section_subtitle_border mx-auto"></div>
            </div>
          </div>
        </div>

        <div class="row mt-5">
          <div class="col-lg-4">
            <div class="contact_info_content bg-light p-3 rounded text-center mt-3">
              <div class="">
                <p class="mb-0 add_head text_custom">Call Us Now</p>
                <p class="text-muted mb-0 mt-3">+801-486-4484</p>
                <p class="text-muted">+801-301-6202</p>
              </div>
            </div>

            <div class="contact_info_content bg-light p-3 rounded text-center mt-3">
              <div class="">
                <p class="mb-0 add_head text_custom">Mail Us</p>
                <p class="text-muted mt-3">Support@mail.com
                  <br> example@mail.com</p>
                </div>
              </div>

              <div class="contact_info_content bg-light p-3 rounded text-center mt-3">
                <div class="">
                  <p class="mb-0 add_head text_custom">Location Here</p>
                  <p class="text-muted mt-3">1487 Yorkshire Circle
                    <br> North Carolina, NY 27834.</p>
                  </div>
                </div>
              </div>

              <div class="col-lg-8">
                <div class="corp_form_custom bg-white mt-3">
                  <form>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group mt-2">
                          <input name="name" id="name" type="text" class="form-control" placeholder="Your Name*" required>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group mt-2">
                          <input name="email" id="email" type="email" class="form-control" placeholder="Your Email*" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="form-group mt-2">
                          <input type="text" class="form-control" name="subject" id="subject" placeholder="Your Subject.." required/>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="form-group mt-2">
                          <textarea name="comments" id="comments" rows="6" class="form-control" placeholder="Your message..."></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="row mt-3">
                      <div class="col-lg-12 text-center">
                        <input type="submit" id="submit" name="send" class="btn btn_custom" value="Send Message">
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
        <?php get_footer(); ?>
