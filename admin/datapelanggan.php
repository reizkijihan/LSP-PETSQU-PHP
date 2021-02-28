<?php

require 'koneksi.php';
$pelanggan = query("SELECT * FROM pelanggan");

?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Data Pelanggan</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">

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
                                        <th>No.Hp</th>
                                        <th>Alamat</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i =1; ?>
		                        <?php $ambil=$koneksi->query("SELECT * FROM pelanggan"); ?>
		                        <?php foreach ( $pelanggan as $row ) : ?> 
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $row["nama_pelanggan"] ?></td>
                                        <td><?= $row["no_hp"] ?></td>
                                        <td><?= $row["alamat_pelanggan"] ?></td>
                                        <td>
                                        <a href="" class="btn btn-info"><i
                                                    class="fas fa-clipboard-list"></i></i>Pesanan</a>
                                        <button type="button" class="btn btn-danger"><i
                                                    class="fas fa-exclamation-triangle"></i>Non-Aktif</button>
                                            
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