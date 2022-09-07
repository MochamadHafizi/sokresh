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
        <li><a href="<?php echo site_url('Our-Products') ?>" class="active">Our Products</a></li>
        <li><a href="<?php echo site_url('Photo-Gallery') ?>">Photo Gallery</a></li>
        <li><a href="<?php echo site_url('Contacts') ?>">Contact Us</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->
<!-- End Header -->
<div class="qt-box qt-background shadow">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 ml-auto mr-auto text-center">
        <p class="lead " style="padding-top: 10%;">
          OUR PRODUCTS
        </p>
        <ul class="short-bread wow fadeInUp">
          <li style="font-size: 20px;"><a style="color: white;" href="<?php echo site_url('Beranda_c') ?>">Home</a><span> / </span>Our Products</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- End Menu -->
<!-- Start Menu -->
<?php foreach ($product as $p) : ?>
  <div class="menu-box">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="heading-title text-center">
            <h2 class="fw-bold text-center mt-5"><?php echo $p['nama_kategori']; ?></h2>
            <div class="line mb-5"></div>
          </div>
        </div>
      </div>
      <div class="row inner-menu-box" style="margin-bottom: 50px;">
        <div class="col-12">
          <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
              <div class="row">
                <?php foreach ($gambar->gambarproduk($p['id_kategori'])->result() as $result) : ?>
                  <div class="col-lg-4 col-md-6 special-grid drinks">
                    <div class="gallery-single fix">
                      <img src="<?php echo base_url('assets/'); ?>img/<?php echo $result->foto_layanan ?>" alt="<?php echo $result->nama_layanan . ' - ' . $p['nama_kategori'] . ' - ' . $namaPerusahaan; ?>" class="img-fluid" alt="Image">
                      <div class="why-text">
                        <a href="<?php echo site_url('Our-Product/' . str_replace(' ', '-', $result->kategori) . '/' . str_replace(' ', '-', $result->nama_layanan)) ?>">
                          <h4 class="text-dark"><?php echo $result->nama_layanan ?></h4>
                          <span class="text-dark"><?php echo substr($result->deskripsi_layanan, 0, 100) . " ... " ?></span>
                        </a>
                      </div>
                    </div>
                  </div>
                <?php endforeach; ?>
                <div class="see-more text-center col-12">
                  <a href="<?php echo site_url('Our-Products/' . str_replace(' ', '-', $p['nama_kategori'])) ?>" class="btn btn-danger mt-3">See More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php endforeach; ?>
<!-- End Menu -->