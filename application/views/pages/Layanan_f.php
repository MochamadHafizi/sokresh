<div class="qt-box qt-background">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 ml-auto mr-auto text-center">
        <p class="lead " style="padding-top: 10%;">
          OUR PRODUCTS
        </p>
        <ul class="short-bread wow fadeInUp">
          <li style="font-size: 20px;"><a style="color: white;" href="<?php echo site_url('Beranda_c') ?>">Home</a><span> / </span><a style="color: white;" href="<?php echo site_url('Layanan_c') ?>">Our Products</a><span> / </span><?php echo $judul; ?></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="menu-box">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="heading-title text-center">
          <h2><?php echo $judul; ?></h2>
        </div>
      </div>
    </div>

    <div class="col-12">
      <div class="tab-content" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
          <div class="row">
            <?php foreach ($product->result_array() as $p) : ?>
              <div class="col-lg-4 col-md-6 special-grid drinks">
                <div class="gallery-single fix">
                  <img src="<?php echo base_url('assets/'); ?>img/<?php echo $p['foto_layanan'] ?>" alt="<?php echo $p['nama_layanan'] . ' - ' . $judul . ' - ' . $namaPerusahaan; ?>" class="img-fluid" alt="Image">
                  <div class="why-text">
                    <a href="<?php echo site_url('Our-Product/' . str_replace(' ', '-', $p['kategori']) . '/' . str_replace(' ', '-', $p['nama_layanan'])) ?>">
                      <h4><?php echo $p['nama_layanan'] ?></h4>
                      <p><?php echo substr($p['deskripsi_layanan'], 0, 100) . " ... " ?></p>
                    </a>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
</div>