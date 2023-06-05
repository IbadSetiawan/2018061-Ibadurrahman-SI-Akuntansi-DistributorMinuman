<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SI Akuntansi - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('Template/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('Template/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SI Akuntansi DisMin </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="./dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
                Daftar Data Distributor Minuman
            </div>

            <!-- Nav Item - Tabel Barang -->
            <li class="nav-item">
                <a class="nav-link" href="pegawai">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Data Pegawai</span></a>
            </li>
            <!-- Nav Item - Tabel Customer -->
            <li class="nav-item">
                <a class="nav-link" href="customer">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Data Customer</span></a>
            </li>
            <!-- Nav Item - Tabel Suplier -->
            <li class="nav-item">
                <a class="nav-link" href="suplier">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Data Suplier</span></a>
            </li>
            <!-- Nav Item - Tabel Pembelian -->
            <li class="nav-item">
                <a class="nav-link" href="pembelian">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Data Pembelian</span></a>
            </li>
            <!-- Nav Item - Tabel Penjualan -->
            <li class="nav-item">
                <a class="nav-link" href="penjualan">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Data Penjualan</span></a>
            </li>
            <!-- Nav Item - Tabel Barang -->
            <li class="nav-item">
                <a class="nav-link" href="barang">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Data Barang</span></a>
            </li>
            <!-- Nav Item - Tabel Pemasukan -->
            <li class="nav-item">
                <a class="nav-link" href="pemasukan">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Data Pemasukan</span></a>
            </li>
            <!-- Nav Item - Tabel Pengeluaran -->
            <li class="nav-item">
                <a class="nav-link" href="pengeluaran">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Data Pengeluaran</span></a>
            </li>
            <!-- Nav Item - Tabel Kas & Bank -->
            <li class="nav-item">
                <a class="nav-link" href="kas">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Data Kas dan Bank</span></a>
            </li>
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
    
        <!-- End of Sidebar -->
        
        <!-- Content Wrapper -->
        <!DOCTYPE html>
        <html lang="en">
            <head>
                <title>Home</title>
                <link rel="stylesheet" href="{{asset('Template/css/style.css')}}" />
                <link rel="preconnect" href="https://fonts.googleapis.com" />
                <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
                <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Roboto:wght@500;700&display=swap" rel="stylesheet" />
            </head>
        
            <body>
                <div class="container">
                    <div class="navbar">
                        <div class="lambang">
                            <img src="{{asset('Template/Gambar/spongebob.jpg')}}" alt="" width="200px" />
                        </div>
                    </div>
                    
                    <div class="jumbotron">
                        <div class="jumbotron-text">
                            <h1 id="Text">Halo Pelanggan!</h1>
                            <h2> Selamat Datang Di Toko Kami </h2><br>
                            <h4>Mayoritas Kami adalah Kepuasan Pelanggan</h4>
                            <p>Harga Standart, Barang Terbaik, Kualitas Mahal</p>
                        </div>
                        
                        <div class="jumbotron-img">
                            <img src="{{asset('Template/Gambar/Doraemon_character.png')}}" alt="" width="400"/>
                        </div>
                    </div>
                </div>
            </body>
        <!-- End of Page Wrapper -->
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('Template/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('Template/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('Template/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('Template/js/sb-admin-2.min.js')}}"></script>
</body>

</html>