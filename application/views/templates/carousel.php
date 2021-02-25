<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-interval="10000">

            <div class="row">
              <div class="col-lg-6 justify-content-center d-flex mt-5" data-aos="zoom-in" data-aos-delay="200">

                <img style="width: 80%; height: 90%;" src="<?= base_url('assets/img/icon-1.png'); ?>" class="img-fluid animated" alt="">

              </div>
              <div class="col-lg-6 d-flex flex-column justify-content-center pt-lg-0 order-2 order-lg-1" id="carousel-eramover" data-aos="fade-up" data-aos-delay="200" style="margin: 80px 0 0 0;">
                <?php if ($this->session->home == $title) {
                  echo '<h1>ERAMOVER INDONESIA</h1>
        <h2 style="text-shadow: 2px 2px 2px 5px #0A0A0A;">JASA PINDAHAN, JASA PACKING DAN JASA PENYIMPANAN</h2>
        <div class="d-lg-flex" style="width: 30%; height: 30%;">
          <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Lihat Video <i class="icofont-play-alt-2"></i></a>
        </div>';
                } elseif ($this->session->about == $title) {
                  echo '<h1 style="font-size:30px; font-weight:800;">ABOUT <span class="text-light">ERAMOVER INDONESIA</span></h1>
          <div class="d-lg-flex" style="width: 30%; height: 30%;">
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Lihat Video <i class="icofont-play-alt-2"></i></a>
          </div>';
                } elseif ($this->session->contact == $title) {
                  echo '<h1 style="font-size:30px; font-weight:800;">ABOUT <span class="text-light">ERAMOVER INDONESIA</span></h1>
          <div class="d-lg-flex" style="width: 30%; height: 30%;">
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Lihat Video <i class="icofont-play-alt-2"></i></a>
          </div>';
                } ?>
              </div>
            </div>

          </div>
          <div class="carousel-item" data-interval="10000">
            <div class="row" style="margin-top: 10%;">
              <div class="col-lg-6 justify-content-center d-flex" data-aos="zoom-in" data-aos-delay="200">
                <img style="width: 50%; height: 100%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" src="<?= base_url('assets/img/portfolio/portfolio-8.jpg'); ?>" class="img-fluid animated" alt="">
              </div>
              <div class="col-lg-6 d-flex flex-column justify-content-center pt-lg-0 order-2 order-lg-1" id="carousel-eramover" data-aos="fade-up" data-aos-delay="200" style="margin: 10px 0 0 0;">
                <?php if ($this->session->home == $title) {
                  echo '<h1>ERAMOVER INDONESIA</h1>
        <h2 style="text-shadow: 2px 2px 2px 5px #0A0A0A;">JASA PINDAHAN, JASA PACKING DAN JASA PENYIMPANAN</h2>
        <div class="d-lg-flex" style="width: 30%; height: 30%;">
          <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Lihat Video <i class="icofont-play-alt-2"></i></a>
        </div>';
                } elseif ($this->session->about == $title) {
                  echo '<h1 style="font-size:30px; font-weight:800;">ABOUT <span class="text-light">ERAMOVER INDONESIA</span></h1>
          <div class="d-lg-flex" style="width: 30%; height: 30%;">
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Lihat Video <i class="icofont-play-alt-2"></i></a>
          </div>';
                } elseif ($this->session->contact == $title) {
                  echo '<h1 style="font-size:30px; font-weight:800;">ABOUT <span class="text-light">ERAMOVER INDONESIA</span></h1>
          <div class="d-lg-flex" style="width: 30%; height: 30%;">
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Lihat Video <i class="icofont-play-alt-2"></i></a>
          </div>';
                }  ?>
              </div>
            </div>
          </div>
          <div class="carousel-item" data-interval="10000">
            <div class="row" style="margin-top: 10%;">
              <div class="col-lg-6 justify-content-center d-flex" data-aos="zoom-in" data-aos-delay="200">
                <img style="width: 50%; height: 100%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" src="<?= base_url('assets/img/portfolio/portfolio-1.jpg'); ?>" class="img-fluid animated" alt="">
              </div>
              <div class="col-lg-6 d-flex flex-column justify-content-center pt-lg-0 order-2 order-lg-1" id="carousel-eramover" data-aos="fade-up" data-aos-delay="200" style="margin: 10px 0 0 0;">
                <?php if ($this->session->home == $title) {
                  echo '<h1>ERAMOVER INDONESIA</h1>
        <h2 style="text-shadow: 2px 2px 2px 5px #0A0A0A;">JASA PINDAHAN, JASA PACKING DAN JASA PENYIMPANAN</h2>
        <div class="d-lg-flex" style="width: 30%; height: 30%;">
          <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Lihat Video <i class="icofont-play-alt-2"></i></a>
        </div>';
                } elseif ($this->session->about == $title) {
                  echo '<h1 style="font-size:30px; font-weight:800;">ABOUT <span class="text-light">ERAMOVER INDONESIA</span></h1>
          <div class="d-lg-flex" style="width: 30%; height: 30%;">
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Lihat Video <i class="icofont-play-alt-2"></i></a>
          </div>';
                } elseif ($this->session->contact == $title) {
                  echo '<h1 style="font-size:30px; font-weight:800;">ABOUT <span class="text-light">ERAMOVER INDONESIA</span></h1>
          <div class="d-lg-flex" style="width: 30%; height: 30%;">
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Lihat Video <i class="icofont-play-alt-2"></i></a>
          </div>';
                }  ?>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>



</section><!-- End Hero -->