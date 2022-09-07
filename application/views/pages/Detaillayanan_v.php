<div class="qt-box qt-background">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 ml-auto mr-auto text-center">
        <p class="lead " style="padding-top: 10%;">
          OUR PRODUCTS
        </p>
        <ul class="short-bread wow fadeInUp">
          <li style="font-size: 20px;"><a style="color: white;" href="<?php echo site_url('Beranda_c') ?>">Home</a><span> / </span><a style="color: white;" href="<?php echo site_url('Layanan_c') ?>">Our Products</a><span> / </span><?php echo str_replace('-', ' ', $nama) ?></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- End Page Properti -->

<main id="main">

  <!-- ======= About Section ======= -->
  <!-- ======= About Section ======= -->
  <div id="about" class="about-area area-padding wow fadeInUp">
    <div class="container">
      <div class="row" style="padding-top: 5%; padding-bottom: 5%;">
        <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft">
          <div class="well-middle">
            <div class="single-well">
              <a href="#">
                <h2 class="sec-head-d text-center"><span style="color: black;"></span><span class="text-dark"><?php echo str_replace('-', ' ', $nama) ?></span></h2>
                <div class="line mb-5"></div>
              </a>
              <p align="justify" class="text-center">
                <?php echo $detail->deskripsi_layanan ?>
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight">
          <div class="well-left">
            <div class="single-well">
              <div class="single-awesome-project">
                <div class="awesome-img-2 wow fadeInUp tz-gallery">
                  <a class="lightbox" href="<?php echo base_url('assets/'); ?>img/<?php echo $detail->foto_layanan ?>">
                    <img class="img-fluid" src="<?php echo base_url('assets/'); ?>img/<?php echo $detail->foto_layanan ?>" alt="<?php echo $detail->nama_layanan . ' - ' . $kategori->nama_kategori . ' - ' . $namaPerusahaan; ?>" alt="Gallery Images">
                  </a>
                  <div class="add-actions-2 text-center">
                    <div class="project-dec">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End col-->
      </div>
    </div>
  </div><!-- End About Section -->
</main><!-- End #main -->