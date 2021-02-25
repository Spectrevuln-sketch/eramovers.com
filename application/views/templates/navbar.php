<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent text-primary">
      <h1 class="logo mr-auto"><a href="index.html" class="logo mr-auto"><img src="<?= base_url('assets/img/icon.jpg'); ?>" alt="" class="img-fluid"></h1>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end " id="navbarNavDropdown">
        <ul class="navbar-nav ">
          <li class="nav-item active">
            <a class="nav-link text-primary" href="<?= base_url('auth'); ?>">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-primary" href="<?= base_url('auth/about'); ?>">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-primary" href="#">Ekspedisi Domestic & International</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-primary" href="<?= base_url('auth/contact'); ?>">Contact Us</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</header>