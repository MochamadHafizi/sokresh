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
        <li><a href="<?php echo site_url('Photo-Gallery') ?>" class="active">Photo Gallery</a></li>
        <li><a href="<?php echo site_url('Contacts') ?>">Contact Us</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->
<div class="qt-box qt-background">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 ml-auto mr-auto text-center">
        <p class="lead " style="padding-top: 10%;">
          PHOTO GALLERY
        </p>
        <ul class="short-bread wow fadeInUp">
          <li style="font-size: 20px;"><a style="color: white;" href="<?php echo site_url('Beranda_c') ?>">Home</a><span> / </span>Photo Gallery</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- End Page Properti -->
<?php foreach ($album as $a) : ?>
  <div class="gallery-box">
    <div class="col-lg-12">
      <div class="heading-title text-center">
        <h2 class="fw-bold text-center"><?php echo $a['nama_album']; ?></h2>
        <div class="line"></div>
      </div>
    </div>
    <div class="container">
      <div class="tz-gallery">
        <div class="row">
          <?php foreach ($galeri->getPhotoByAlbum($a['id_album'])->result() as $result) : ?>
            <div class="col-sm-12 col-md-4 col-lg-4">
              <a class="lightbox" href="<?php echo base_url('assets/'); ?>img/<?php echo $result->foto_galeri ?>">
                <img class="img-fluid" src="<?php echo base_url('assets/'); ?>img/<?php echo $result->foto_galeri ?>" alt="<?php echo $a['nama_album'] . ' - ' . $namaPerusahaan; ?>" alt="Gallery Images">
              </a>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="see-more text-center col-12">
        <a href="<?php echo site_url('Photo-Gallery/' . str_replace(' ', '-', $a['nama_album'])) ?>" class="btn btn-danger">See More</a>
      </div>
    </div>
  </div>
<?php endforeach; ?>