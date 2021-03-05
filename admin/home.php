<?php
require 'koneksi.php';
$catfood = query("SELECT * FROM produk ");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="frontend/libraries/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="frontend/styles/main.css">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Akaya+Telivigala&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <title>PetsQU</title>
</head>
<body>
  <section class="products">
  <h1 class="m-0 text-dark">Data Produk</h1>
    <!-- Content -->
    <main>
      <div class="container">
        <!-- Cats Food -->
        <div class="section-cat">
          <h2>Cats Food</h2>
          <div class="row mb-5">
          <?php foreach($catfood as $row): ?>
              <div class="col-lg-3 mt-5">
                <div class="card" style="width: 15rem;">
                  <img src="../img/<?= $row["gambar"]; ?>" class="card-img-top">
                  <div class="card-body">
                    <h5 class="card-title"><?= $row["nama_produk"]; ?></h5>
                    <p class="card-text text-muted"><?= $row["deskripsi_produk"] ?></p>
                    <p class="card-text harga"><?= "Rp".number_format($row["harga_produk"], 0, ".", "."); ?></p>
                  </div>
                </div>
              </div>
            <?php endforeach ?>
          </div>
        </div>
      </div>
    </main>
  </section>
</body>
</html>