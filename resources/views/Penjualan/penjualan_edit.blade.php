<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Penjualan</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('Template/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('Template/https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i')}}" rel="stylesheet">

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
                    <h6 class="m-0 font-weight-bold text-primary">Edit Data Penjualan</h6>
                </div>
                <div class="card-body">
                    @foreach($penjualan as $penjualan)
                    <form action="/penjualan/penjualan_update" method="post">
                        {{csrf_field()}}
                        <input type="hidden" name="id_penjualan" value="{{ $penjualan->id_penjualan }}">
                        ID Penjualan :
                        <input type="password" class="form-control form-control-user" required="requeired" name="id_penjualan" value="{{ $penjualan->id_penjualan }}">
                        ID Customer :
                        <select name="id_customer" class="form-control form-control-user" required class="from-control">
                            @foreach ($customer as $customer)
                            <option value="{{ $customer->id_customer }}">{{ $customer->id_customer }}</option>
                            @endforeach
                        </select>
                        ID Barang :
                        <select name="id_barang" class="form-control form-control-user" required class="from-control">
                            @foreach ($barang as $barang)
                            <option value="{{ $barang->id_barang }}">{{ $barang->id_barang }}</option>
                            @endforeach
                        </select>
                        Merk :
                        <input type="text" name="merk" class="form-control form-control-user" required="requeired" value="{{ $penjualan->merk }}">
                        Keluar :
                        <input type="int" name="keluar" class="form-control form-control-user" required="requeired" value="{{ $penjualan->keluar }}">
                        Kas Masuk :
                        <input type="int" name="kas_masuk" class="form-control form-control-user" required="requeired" value="{{ $penjualan->kas_masuk }}">
                        Tanggal :
                        <input type="date" name="tanggal" class="form-control form-control-user" required="requeired" value="{{ $penjualan->tanggal }}">
                        </br><input type="submit" class="btn btn-primary btn-user btn-block" value="Simpan">
                    </form>
                    @endforeach
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