<?php
require 'koneksi.php';

$produk = query("SELECT * FROM produk");

?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Data Produk</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">        
            <a href="index.php?halaman=tambahproduk" class="btn btn-secondary mb-3"><i class="fas fa-plus"></i>Tambah
                Produk</a><br>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="dataTables" class="table table-bordered table-striped table-responsive-md">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama </th>                            
                                        <th>Gambar </th>                            
                                        <th>Harga</th>
                                        <th>Deskripsi</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $i =1; ?>
		                        <?php $ambil=$koneksi->query("SELECT * FROM produk"); ?>
		                        <?php foreach ( $produk as $row ) : ?> 
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $row["nama_produk"] ?></td>
                                        <td> <img src="../img/<?= $row['gambar']; ?>" width="50"> </td>
                                        <td><?= $row["harga_produk"] ?></td>
                                        <td><?= $row["deskripsi_produk"] ?></td>
                                        <td>
                                        
                                        <a href="index.php?halaman=editproduk&id=<?= $row['id']; ?>" class="btn btn-primary"><i
                                                    class="far fa-edit"></i>Edit</a>
                                        <a href="index.php?halaman=deleteproduk&id=<?= $row['id']; ?>"  onclick="return confirm('Hapus?');" class="btn-danger btn">Delete</a>
                                            
                                        </td>
                                        
                                    </tr>
                                    <?php $i++; ?>
	                        <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

