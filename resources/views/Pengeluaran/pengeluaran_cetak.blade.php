<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{asset('Template/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <title>Cetak Data Pengeluaran</title>
</head>

<body>
    <div class="table-responsive">
        <br><br>
        <h1 class="h3 mb-2 text-gray-800"><b> Laporan Data Pengeluaran</b></H1>
        <b>PT. Sejahtera Abadi Maju</b><br>
        Jln. Kenangan Indah Gang. MoveOn No.113, Surabaya<br>
        Email : Hati_ini_suci@gmail.com<br>
        No.Hp : 089723849124<br><br>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Id Pengeluaran</th>
                    <th>Id Pegawai</th>
                    <th>Id Pembelian</th>
                    <th>merk</th>
                    <th>Kas Keluar</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pengeluaran as $cetakpengeluaran)
                <tr>
                    <td>{{ $cetakpengeluaran->id_pengeluaran }}</td>
                    <td>{{ $cetakpengeluaran->id_pegawai }}</td>
                    <td>{{ $cetakpengeluaran->id_pembelian }}</td>
                    <td>{{ $cetakpengeluaran->merk }}</td>
                    <td>{{ $cetakpengeluaran->kas_keluar }}</td>
                    <td>{{ $cetakpengeluaran->tanggal }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>