<!-- End Header -->
<div class="qt-box qt-background">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 ml-auto mr-auto text-center">
        <p class="lead " style="padding-top: 10%;">
          PHOTO GALLERY
        </p>
        <ul class="short-bread wow fadeInUp">
          <li style="font-size: 20px;"><a style="color: white;" href="<?php echo site_url('Beranda_c') ?>">Home</a><span> / </span><a style="color: white;" href="<?php echo site_url('Galeri_c') ?>">Photo Gallery</a><span> / </span><?php echo $judul; ?></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- End Page Properti -->
<<div class="gallery-box">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="heading-title text-center">
          <h1 class="fw-bold text-center"><?php echo $judul; ?></h1>
          <div class="line"></div>
        </div>
      </div>
    </div>
    <div class="tz-gallery">
      <div class="row">
        <?php foreach ($galeri->result() as $result) : ?>
          <div class="col-sm-12 col-md-4 col-lg-4">
            <a class="lightbox" href="<?php echo base_url('assets/'); ?>img/<?php echo $result->foto_galeri ?>">
              <img src="<?php echo base_url('assets/'); ?>img/<?php echo $result->foto_galeri ?>" alt="<?php echo $judul . ' - ' . $namaPerusahaan; ?>" alt="" />
            </a>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
  </div>
  <!-- End Gallery -->