<?php require 'navbar.php';?>
<link rel="stylesheet" type="text/css" href="assets/home.css">
<body>
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>

  </ol>
  <!-- Carousel gambar -->
  <div class="carousel-inner ">
    <div class="carousel-item active">
      <img src="img/pet1.png" class="d-block w-100">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
    <div class="carousel-item">
       <img src="img/cats.jpg" class="d-block w-100">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
    <div class="carousel-item">
     <img src="img/original.jpg" class="d-block w-100">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<!--- Jumbotron -->
<div class="container">
<div class="jumbotron-fluid jumbotron text-center bg-dark text-white">
    <h1 class="display-6">Selamat Datang di PetsQu Shop</h1>
    <p class="lead">Food, Suplement etc For Your Pets</p>
</div>
</div>
</body>
<!-- End Bagian wrapper -->
<?php require 'footer.php';?>