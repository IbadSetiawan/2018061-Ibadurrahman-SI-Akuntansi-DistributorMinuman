<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Pemasukan</title>

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
                <a class="nav-link" href="dashboard">
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

        <!-- Content -->
        <div class="container-fluid">
            <p class="mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah Data Pemasukan</h6>
                </div>
                <div class="card-body">
                    <form action="/pemasukan/pemasukan_store" method="post">
                        {{csrf_field()}}
                        ID Pemasukan :
                        <input type="varchar" name="id_pemasukan" class="form-control form-control-user" required="requeired">
                        ID Pegawai :
                        <select name="id_pegawai" class="form-control form-control-user" required class="from-control">
                            @foreach ($pegawai as $pegawai)
                            <option value="{{ $pegawai->id_pegawai }}">{{ $pegawai->id_pegawai }}</option>
                            @endforeach
                        </select>
                        ID Penjualan :
                        <select name="id_penjualan" class="form-control form-control-user" required class="from-control">
                            @foreach ($penjualan as $penjualan)
                            <option value="{{ $penjualan->id_penjualan }}">{{ $penjualan->id_penjualan }}</option>
                            @endforeach
                        </select>
                        Merk :
                        <input type="text" name="merk" class="form-control form-control-user" required="requeired">
                        Kas Masuk :
                        <input type="int" name="kas_masuk" class="form-control form-control-user" required="requeired">
                        Tanggal :
                        <input type="date" name="tanggal" class="form-control form-control-user" required="requeired">
                        </br><input type="submit" class="btn btn-primary btn-user btn-block" value="Simpan">
                    </form>
                </div>
            </div>
            </p>
        </div>
        <!-- end -->
    </div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('Template/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('Template/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('Template/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('Template/js/sb-admin-2.min.js')}}"></script>
</body>

</html>