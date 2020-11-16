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
    <!-- Site wrapper -->
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-dark" style="background-color: #001f3f;">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button" style="height: inherit; line-height: 2;"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="<?= base_url() ?>dashboard" class="nav-link" id="titlebps"> DDA Online Kabupaten Banyumas</a>
                </li>
            </ul>
        </nav>

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4 " style="background-color: #001f3f;">
            <!-- Brand Logo -->
            <a href="<?= base_url() ?>dashboard" class="brand-link">
                <img src="<?= base_url() ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Mas DaKa</span>
            </a>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                    <li class="nav-item has-treeview">
                        <a href="<?= base_url() ?>dashboard" class="nav-link">

                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 3.293l6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                                <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                            </svg>
                            <p>Home</p>
                        </a>

                    <li class="nav-item">
                        <a href="<?= base_url() ?>Dinas/daftar" class="nav-link">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-lines-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7 1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm2 9a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z" />
                            </svg>
                            <p>Daftar Dinas</p>
                        </a>
                    </li>



        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-4">
                        <div class="col">
                            <h1 class="titleWelcome">Selamat Datang di Website Banyumas Dalam Angka (Mas DaKa) Online</h1>
                            <h1 class="titleWelcome">BPS Kabupaten Banyumas</h1>

                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- Main content -->
            <section class="content">
                <h5 style="text-align: justify; margin: auto 20px 10px 20px;">Silahkan ikuti petunjuk dibawah ini untuk pengisian data dalam rangka pembuatan buku daerah dalam angka kabupaten banyumas...</h5>
                <!-- Default box -->
                <div class="card" style=" height: 300px; margin: auto 20px">
                    <div class="card-header" style="background-color: lightgray;">
                        <h3 class="card-title"><b>Petunjuk Pengisian :</b></h3>
                    </div>
                    <div class="card-body" style="overflow-y: scroll; padding: 10px 0px;">
                        <ol start="1">
                            <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur adipisci ex dolores quo repellat aliquam natus tenetur iure cumque quasi maxime perspiciatis sit voluptate nisi, iste error laboriosam iusto consectetur?</li>
                            <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur adipisci ex dolores quo repellat aliquam natus tenetur iure cumque quasi maxime perspiciatis sit voluptate nisi, iste error laboriosam iusto consectetur?</li>
                            <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur adipisci ex dolores quo repellat aliquam natus tenetur iure cumque quasi maxime perspiciatis sit voluptate nisi, iste error laboriosam iusto consectetur?</li>
                            <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur adipisci ex dolores quo repellat aliquam natus tenetur iure cumque quasi maxime perspiciatis sit voluptate nisi, iste error laboriosam iusto consectetur?</li>
                            <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur adipisci ex dolores quo repellat aliquam natus tenetur iure cumque quasi maxime perspiciatis sit voluptate nisi, iste error laboriosam iusto consectetur?</li>
                            <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur adipisci ex dolores quo repellat aliquam natus tenetur iure cumque quasi maxime perspiciatis sit voluptate nisi, iste error laboriosam iusto consectetur?</li>
                            <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur adipisci ex dolores quo repellat aliquam natus tenetur iure cumque quasi maxime perspiciatis sit voluptate nisi, iste error laboriosam iusto consectetur?</li>
                            <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur adipisci ex dolores quo repellat aliquam natus tenetur iure cumque quasi maxime perspiciatis sit voluptate nisi, iste error laboriosam iusto consectetur?</li>
                            <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur adipisci ex dolores quo repellat aliquam natus tenetur iure cumque quasi maxime perspiciatis sit voluptate nisi, iste error laboriosam iusto consectetur?</li>
                            <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur adipisci ex dolores quo repellat aliquam natus tenetur iure cumque quasi maxime perspiciatis sit voluptate nisi, iste error laboriosam iusto consectetur?</li>
                            <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur adipisci ex dolores quo repellat aliquam natus tenetur iure cumque quasi maxime perspiciatis sit voluptate nisi, iste error laboriosam iusto consectetur?</li>
                            <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur adipisci ex dolores quo repellat aliquam natus tenetur iure cumque quasi maxime perspiciatis sit voluptate nisi, iste error laboriosam iusto consectetur?</li>
                            <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur adipisci ex dolores quo repellat aliquam natus tenetur iure cumque quasi maxime perspiciatis sit voluptate nisi, iste error laboriosam iusto consectetur?</li>
                            <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur adipisci ex dolores quo repellat aliquam natus tenetur iure cumque quasi maxime perspiciatis sit voluptate nisi, iste error laboriosam iusto consectetur?</li>
                            <li>Selesaiii :)</li>
                        </ol>
                    </div>
                </div>
                <!-- /.card -->

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