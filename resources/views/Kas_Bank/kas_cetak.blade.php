<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{asset('Template/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <title>Cetak Data Kas</title>
</head>

<body>
    <div class="table-responsive">
        <br><br>
        <h1 class="h3 mb-2 text-gray-800"><b> Laporan Data Kas dan Bank</b></H1>
        <b>PT. Sejahtera Abadi Maju</b><br>
        Jln. Kenangan Indah Gang. MoveOn No.113, Surabaya<br>
        Email : Hati_ini_suci@gmail.com<br>
        No.Hp : 089723849124<br><br>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Kode Unik</th>
                    <th>Id Pengeluaran</th>
                    <th>Id Pemasukan</th>
                    <th>Deskripsi</th>
                    <th>Kas Keluar</th>
                    <th>Kas Masuk</th>
                    <th>Total</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                @foreach($kas as $cetakkas)
                <tr>
                    <td>{{ $cetakkas->kode_unik }}</td>
                    <td>{{ $cetakkas->id_pengeluaran }}</td>
                    <td>{{ $cetakkas->id_pemasukan }}</td>
                    <td>{{ $cetakkas->deskripsi }}</td>
                    <td>{{ $cetakkas->kas_keluar }}</td>
                    <td>{{ $cetakkas->kas_masuk}}</td>
                    <td>{{ $cetakkas->total }}</td>
                    <td>{{ $cetakkas->tanggal }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>