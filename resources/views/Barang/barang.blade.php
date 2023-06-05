<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Tabel Barang</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('Template/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

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

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Tabel Barang</h1>
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data Barang</h6>
                </div>
                <div class="card-body">
                    <a href="/barang/barang_tambah" class="btn btn-primary">
                        <span class="text">Tambah Data</span>
                    </a>
                    <a href="/barang/barang_cetak" target="_blank" class="btn btn-success">
                        <span class="text">Cetak</span>
                    </a>
                    <p></p>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Id Barang</th>
                                    <th>Id Pegawai</th>
                                    <th>Merk</th>
                                    <th>Haga</th>
                                    <th>Barang Masuk</th>
                                    <th>Barang Keluar</th>
                                    <th>Sisa Barang</th>
                                    <th>Tanggal</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($barang as $barang)
                                <tr>
                                    <td>{{ $barang->id_barang }}</td>
                                    <td>{{ $barang->id_pegawai }}</td>
                                    <td>{{ $barang->merk }}</td>
                                    <td>{{ $barang->harga }}</td>
                                    <td>{{ $barang->masuk }}</td>
                                    <td>{{ $barang->keluar }}</td>
                                    <td>{{ $barang->total }}</td>
                                    <td>{{ $barang->tanggal }}</td>
                                    <td><a href="/barang/barang_edit/{{ $barang->id_barang }}">Edit |</a>
                                        <a href="/barang/barang_hapus/{{ $barang->id_barang }}">Hapus</a>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Main Content -->

        <!-- Bootstrap core JavaScript-->
        <script src="{{asset('Template/vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('Template/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

        <!-- Core plugin JavaScript-->
        <script src="{{asset('Template/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

        <!-- Custom scripts for all pages-->
        <script src="{{asset('Template/js/sb-admin-2.min.js')}}"></script>

</body>

</html>