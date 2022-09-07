<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center shadow">
  <div class="container d-flex align-items-center">
    <img src="<?= base_url('assets/img/logo_sk.png'); ?>" alt="" class="logo me-auto" width="150">
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

    <nav id="navbar" class="navbar">
      <ul>
        <li><a href="<?php echo site_url('Home') ?>">Home</a></li>
        <li><a href="<?php echo site_url('About-us') ?>">About Us</a></li>
        <li><a href="<?php echo site_url('Our-Products') ?>">Our Products</a></li>
        <li><a href="<?php echo site_url('Photo-Gallery') ?>">Photo Gallery</a></li>
        <li><a href="<?php echo site_url('Contacts') ?>" class="active">Contact Us</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->
<!-- End Header -->
<div class="qt-box qt-background">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 ml-auto mr-auto text-center">
        <p class="lead " style="padding-top: 10%;">
          OUR CONTACT
        </p>
        <ul class="short-bread wow fadeInUp">
          <li style="font-size: 20px;"><a style="color: white;" href="<?php echo site_url('Beranda_c') ?>">Home</a><span> / </span>Contact Us</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- End Page Properti -->

<main id="main">
  <!-- ======= About Section ======= -->
  <div class="about-area area-padding">
    <div class="container" style="margin-top: 5%; margin-bottom: 5%;">
      <?php foreach ($kontak->result() as $result) : ?>
        <div class="row justify-content-center">
          <div class="col-12 mb-5">
            <div class="single-well-c">
              <a href="#">
                <h2 class="sec-head-c text-center fx-bold text-dark"><span>Our Contact</span></h2>
                <div class="line mb-3"></div>
              </a>
              <p>
                <?php echo $result->deskripsi_kontak ?></p>
              <p>Email :
                <?php echo $result->email_kontak ?></p>
              <p>Nomor :
                <?php echo $result->nomor_kontak ?>
              </p>
            </div>
          </div>
          <div class="col-12 text-center">
            <div class="well-left" style="width: 100%;">
              <div class="single-well">
                <?php echo $result->script_embed_code ?>
              </div>
            </div>
          </div>
        </div>
    </div>
  <?php endforeach; ?>
  </div><!-- End About Section -->
</main><!-- End #main -->