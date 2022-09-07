<!-- ======= Hero Section ======= -->

<div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

  <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

  <div class="carousel-inner" role="listbox">

    <!-- Slide 1 -->
    <div class="carousel-item active">
      <img src="assets/img/slider/1.jpg" alt="">
      <div class="carousel-container">
        <div class="container">
        </div>
      </div>
    </div>

    <!-- Slide 2 -->
    <div class="carousel-item">
      <img src="assets/img/slider/2.jpg" alt="">
      <div class="carousel-container">
        <div class="container">
        </div>
      </div>
    </div>

    <!-- Slide 3 -->
    <div class="carousel-item">
      <img src="assets/img/slider/3.jpg" alt="">
      <div class="carousel-container">
        <div class="container">
        </div>
      </div>
    </div>

  </div>

  <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
  </a>

  <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
  </a>

</div>


<main id="main">

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container">
      <div class="row" data-aos="fade-in">
        <div class="col">
          <h2 class="fw-bold text-center">About Us</h2>
          <div class="line mb-5"></div>
        </div>
      </div>
      <?php foreach ($tentang->result() as $result) : ?>
        <div class="row content justify-content-center" data-aos-duration="1000">
          <div class="col-lg-6" data-aos="fade-right">
            <h2><span class="badge" style="background-color:#AE1010"><?php echo $result->nama_tentang ?></span></h2>

            <p>
              <?php echo $result->deskripsi_tentang ?>
            </p>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1000">
            <img class="img-responsive mt-5" style="width: 100%;" src="<?php echo base_url('assets/'); ?>img/<?php echo $result->foto_tentang ?>" alt="<?php echo $namaPerusahaan; ?>">

          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section><!-- End About Section -->

  <!-- ======= Portfolio Section ======= -->
  <div class="tz-gallery">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2 class="fw-bold text-center">Gallery</h2>
          <div class="line mb-5"></div>
        </div>
      </div>
      <div class="row">
        <?php $a = 0;
        $b = 3;
        foreach ($galeri->result() as $result) {
          $a++;
          if ($a <= $b) { ?>
            <div class="col-sm-12 col-md-4 col-lg-4">
              <a class="lightbox" href="<?php echo base_url('assets/'); ?>img/<?php echo $result->foto_galeri ?>">
                <img src="<?php echo base_url('assets/'); ?>img/<?php echo $result->foto_galeri ?>" alt="<?php echo $a . ' - ' . $namaPerusahaan; ?>" />
              </a>
            </div>
        <?php }
        } ?>
      </div>
    </div>
  </div>
  </div>
  </section><!-- End Portfolio Section -->

</main><!-- End #main -->