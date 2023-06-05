<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{asset('Template/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="{{asset('Template/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <title>Cetak Data Barang</title>
</head>

<body id="page-top">
    <div class="table-responsive">
        <br><br>
        <h1 class="h3 mb-2 text-gray-800"><b> Laporan Data Barang</b></H1>
        <b>PT. Sejahtera Abadi Maju</b><br>
        Jln. Kenangan Indah Gang. MoveOn No.113, Surabaya<br>
        Email : Hati_ini_suci@gmail.com<br>
        No.Hp : 089723849124<br><br>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                    </tr>
                </thead>
                <tbody>
                    @foreach($barang as $cetakbarang)
                    <tr>
                        <td>{{ $cetakbarang->id_barang }}</td>
                        <td>{{ $cetakbarang->id_pegawai }}</td>
                        <td>{{ $cetakbarang->merk }}</td>
                        <td>{{ $cetakbarang->harga }}</td>
                        <td>{{ $cetakbarang->masuk }}</td>
                        <td>{{ $cetakbarang->keluar }}</td>
                        <td>{{ $cetakbarang->total }}</td>
                        <td>{{ $cetakbarang->tanggal }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>