<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center shadow">
  <div class="container d-flex align-items-center">
    <img src="<?= base_url('assets/img/logo_sk.png'); ?>" alt="" class="logo me-auto" width="150">
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

    <nav id="navbar" class="navbar">
      <ul>
        <li><a href="<?php echo site_url('Home') ?>">Home</a></li>
        <li><a href="<?php echo site_url('About-us') ?>" class="active">About Us</a></li>
        <li><a href="<?php echo site_url('Our-Products') ?>">Our Products</a></li>
        <li><a href="<?php echo site_url('Photo-Gallery') ?>">Photo Gallery</a></li>
        <li><a href="<?php echo site_url('Contacts') ?>">Contact Us</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->
<div class="qt-box qt-background shadow">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 ml-auto mr-auto text-center">
        <p class="lead " style="padding-top: 10%;">
          ABOUT US
        </p>
        <ul class="short-bread wow fadeInUp">
          <li style="font-size: 20px;"><a style="color: white;" href="<?php echo site_url('Beranda_c') ?>">Home</a><span> / </span>About Us</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- ======= Page Property  ======= -->
<!-- End Page Properti -->

<main id="main">

  <!-- ======= About Section ======= -->
  <div id="about" class="about-area area-padding wow fadeInUp">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
        </div>
      </div>
      <div class="row justify-content-center">
        <!-- single-well start-->
        <?php foreach ($tentang->result() as $result) : ?>

          <!-- single-well end-->
          <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft" data-aos="fade-right" data-aos-duration="1000">
            <div class="well-middle">
              <div class="single-well" style="margin-top: 10%;">
                <a href="#">
                  <h2 class="sec-head fw-bold text-center" style="color: black;"><?php echo $result->nama_tentang ?></h2>
                  <div class="line-2 mb-3"></div>
                </a>
                <p>
                  <?php echo $result->deskripsi_tentang ?>
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight" data-aos="fade-left" data-aos-delay="100" data-aos-duration="1000">
            <div class="well-left">
              <div class="single-well">
                <a href="#">
                  <img class="img-responsive" src="<?php echo base_url('assets/'); ?>img/<?php echo $result->foto_tentang ?>" style="width: 100%; padding-top: 100px;" alt="<?php echo $namaPerusahaan; ?>">
                </a>
              </div>
            </div>
          </div>

          <div class="col-md-12 col-sm-12 col-xs-12 wow fadeInLeft" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1000">
            <div class="well-middle">
              <div class="single-well">
                <a href="#">
                  <h2 class="sec-head fw-bold text-center" style="color: black;">Our Commitment</h2>
                  <div class="line-2 mb-3"></div>
                </a>
                <p>
                  <?php echo $result->our_commitment ?>
                </p>
              </div>
            </div>
          </div>

          <!-- <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight" >
            <div class="well-left">
              <div class="single-well">
                <a href="#">
                  <img src="<?php echo base_url('assets/'); ?>img/<?php echo $result->foto_tentang ?>" alt="">
                </a>
              </div>
            </div>
          </div> -->

          <div class="col-md-12 col-sm-12 col-xs-12 wow fadeInLeft" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1000">
            <div class="well-middle">
              <div class="single-well">
                <a href="#">
                  <h2 class="sec-head fw-bold text-center" style="color: black;">Vision & Mission</h2>
                  <div class="line-2 mb-3"></div>
                </a>
                <p>
                  <?php echo $result->vision_mission ?>
                </p>
              </div>
            </div>
          </div>

          <!-- <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight" >
            <div class="well-left">
              <div class="single-well">
                <a href="#">
                  <img src="<?php echo base_url('assets/'); ?>img/<?php echo $result->foto_tentang ?>" alt="">
                </a>
              </div>
            </div>
          </div> -->

          <div class="col-md-12 col-sm-12 col-xs-12 wow fadeInLeft" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1000">
            <div class="well-middle">
              <div class="single-well">
                <a href="#">
                  <h2 class="sec-head fw-bold text-center" style="color: black;">Main Market</h2>
                  <div class="line-2 mb-3"></div>
                </a>
                <p>
                  <?php echo $result->main_market ?>
                </p>
              </div>
            </div>
          </div>

          <!-- <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight" >
            <div class="well-left">
              <div class="single-well">
                <a href="#">
                  <img src="<?php echo base_url('assets/'); ?>img/<?php echo $result->foto_tentang ?>" alt="">
                </a>
              </div>
            </div>
          </div> -->

          <!-- End col-->
      </div>
    <?php endforeach; ?>
    </div>
  </div><!-- End About Section -->



</main><!-- End #main -->