<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Blank Page</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-4">
                    <div class="col">
                        <h1 class="titleWelcome" style="text-align:center">DDA ONLINE</h1>
                        <h1 class="titleWelcome" style="text-align:center">Kabupaten Banyumas</h1>

                    </div>
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">


                            <li class="nav-item">
                                <a href="<?= site_url('auth/logout') ?>" class="nav-link">
                                    <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-box-arrow-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                                        <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                                    </svg>
                                    <p>logout</p>
                                </a>
                            </li>

                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card" style="text-align:center">
                <div class="card-header" style="background-color: lightgray;">
                    <h3 class="card-title"><b>FILE TABEL TEMPLATE DINAS SOSIAL</b></h3>
                </div>


                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Silahkan Upload Berkas dalam format xls</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <?php
                                if (isset($error)) {
                                    echo "ERROR UPLOAD : <br/>";
                                    print_r($error);
                                    echo "<hr/>";
                                }
                                ?>
                                <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/upload/proses">
                                    <div>Berkas : </div>
                                    <div><input type="file" name="dari"></div>
                                    <div>Keterangan : </div>
                                    <div><textarea name="keterangan_upload"></textarea></div>
                                    <div class="modal-footer">
                                        <input type="submit" class="btn btn-primary" value="Simpan" />
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="card-body" style="overflow-y: scroll; padding: 10px 0px;">

                    <table border="1" width="100%" style="text-align:center;">
                        <tr>
                            <th>No</th>
                            <th>Nama Berkas</th>
                            <th>Keterangan</th>
                            <th colspan="3 ">Action</th>
                        </tr>
                        <?php
                        $no = 1;
                        foreach ($berkas->result() as $row) {
                        ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $row->nama_berkas; ?></td>
                                <td><?php echo $row->keterangan_berkas; ?></td>
                                <td>

                                    <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Upload Berkas</a>

                                    <a href="<?php echo base_url(); ?>index.php/upload/download/<?php echo $row->kd_berkas; ?>" class="btn btn-success">Download</a>
                                </td>

                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                </div>
                <!-- /.card -->
                <div class="card" style="text-align:center">
                    <div class="card-header" style="background-color: lightgray;">
                        <h3 class="card-title"><b>FILE TABEL UPLOAD DINAS SOSIAL</b></h3>
                    </div>
                    <table border="1" width="100%" style="text-align:center;">
                        <tr>
                            <th>No</th>
                            <th>Nama Upload</th>
                            <th>Keterangan</th>

                        </tr>
                        <?php
                        $no = 1;
                        foreach ($dari->result() as $row) {
                        ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $row->nama_upload; ?></td>
                                <td><?php echo $row->keterangan_upload; ?></td>


                            </tr>
                        <?php
                        }
                        ?>
                    </table>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> 3.0.0
        </div>
        <strong>Copyright &copy; 2020 kelompok pkl</a>.</strong> All rights
        reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>assets/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url() ?>assets/dist/js/demo.js"></script>
</body>

</html>