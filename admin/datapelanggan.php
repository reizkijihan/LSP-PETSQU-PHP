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
                                        <th>Email</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                    <tr>
                                    <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>
                                        <a href="" class="btn btn-info"><i
                                                    class="fas fa-clipboard-list"></i></i>Detail</a>
                                        
                                        <a href="" class="btn btn-primary"><i
                                                    class="far fa-edit"></i>Ubah</a>
                                        <button type="button" class="btn btn-danger" data-toggle="modal"
                                                data-target="#modal<%= karyawan.id %>"><i
                                                    class="fas fa-exclamation-triangle"></i>Delete</button>
                                            
                                        </td>
                                        <tr>
                                </thead>
                                <tbody>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>