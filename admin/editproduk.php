<?php 
require 'koneksi.php';
$ambil=$koneksi->query ("SELECT * FROM produk WHERE id='$_GET[id]'");
$produk = $ambil-> fetch_assoc();
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Edit Data Produk</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $produk["id"]; ?>">

                        <div class="form-group">
                            <label for="nama_produk">Nama</label>
                            <input type="text" name="nama_produk" class="form-control" id="nama_produk" required value="<?= $produk['nama_produk']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <input type="file" name="gambar" class="form-control" id="gambar" required value="<?= $produk['gambar']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="text" name="harga_produk" id="harga_produk" class="form-control"  required value="<?= $produk['harga_produk']; ?>">
                        </div>
                        
                        <div class="form-group">
                            <label for="deskripsi_produk">Deskripsi</label>
                            <input type="text" name="deskripsi_produk" class="form-control" id="deskripsi_produk" required value="<?= $produk['deskripsi_produk']; ?>">
                        </div>
                        <button class="btn btn-primary" name="submit">Ubah</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
	if (isset($_POST['submit']))
	{
		$namafoto = $_FILES['gambar']['name'];
		$lokasifoto = $_FILES['gambar']['tmp_name'];

		if(!empty($lokasifoto))
		{
			move_uploaded_file($lokasifoto, "../img/". $namafoto);

			$koneksi-> query ("UPDATE produk SET nama_produk='$_POST[nama_produk]' ,  gambar='$namafoto', harga_produk='$_POST[harga_produk]', deskripsi_produk='$_POST[deskripsi_produk]' WHERE id = '$_GET[id]'");

		} else{
			$koneksi-> query ("UPDATE produk SET nama_produk='$_POST[nama_produk]',   harga_produk='$_POST[harga_produk]', deskripsi_produk='$_POST[deskripsi_produk]' WHERE id = '$_GET[id]'");
		}
		echo "<script> alert('produk telah diubah');</script>";
		echo "<script>location='index.php?halaman=dataproduk';</script>";

		}
 ?>