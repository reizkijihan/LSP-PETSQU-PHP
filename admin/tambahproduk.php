<?php 
require 'koneksi.php';

if(isset($_POST["submit"])) {
    if (tambahproduk($_POST) > 0){
        echo "<script>
        alert('Data Produk berhasil disimpan');
        document.location.href='index.php?halaman=dataproduk';
        </script>";

    } else {
        echo "<script>
        alert('Data Gagal disimpan');
        </script>";
    }
}
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Tambah Data Produk</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                <form method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id">

                        <div class="form-group">
                            <label for="nama_produk">Nama</label>
                            <input type="text" name="nama_produk" class="form-control" id="nama_produk" required>
                        </div>
                        <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <input type="file" name="gambar" class="form-control" id="gambar" required>
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="text" name="harga_produk" id="harga_produk" class="form-control" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="deskripsi_produk">Deskripsi</label>
                            <input type="text" name="deskripsi_produk" class="form-control" id="deskripsi_produk" required>
                        </div>
                        <button class="btn btn-primary" name="submit">Save</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
