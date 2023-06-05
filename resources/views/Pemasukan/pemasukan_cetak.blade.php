<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{asset('Template/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <title>Cetak Data Penjualan</title>
</head>

<body>
    <div class="table-responsive">
        <br><br>
        <h1 class="h3 mb-2 text-gray-800"><b> Laporan Data Penjualan</b></H1>
        <b>PT. Sejahtera Abadi Maju</b><br>
        Jln. Kenangan Indah Gang. MoveOn No.113, Surabaya<br>
        Email : Hati_ini_suci@gmail.com<br>
        No.Hp : 089723849124<br><br>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Id Pemasukan</th>
                    <th>Id Pegawai</th>
                    <th>Id Penjualan</th>
                    <th>merk</th>
                    <th>Kas Masuk</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pemasukan as $cetakpemasukan)
                <tr>
                    <td>{{ $cetakpemasukan->id_pemasukan }}</td>
                    <td>{{ $cetakpemasukan->id_pegawai }}</td>
                    <td>{{ $cetakpemasukan->id_penjualan }}</td>
                    <td>{{ $cetakpemasukan->merk }}</td>
                    <td>{{ $cetakpemasukan->kas_masuk }}</td>
                    <td>{{ $cetakpemasukan->tanggal }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script type="text/javascript">
        window.print("/penjualan/penjualan_cetak");
    </script>
</body>

</html>