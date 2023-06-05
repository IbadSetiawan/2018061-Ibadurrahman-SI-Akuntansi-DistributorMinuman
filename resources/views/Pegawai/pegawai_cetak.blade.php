<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{asset('Template/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <title>Cetak Data Pegawai</title>
</head>

<body>
    <div class="table-responsive">
        <br><br>
        <h1 class="h3 mb-2 text-gray-800"><b> Laporan Data Pegawai</b></H1>
        <b>PT. Sejahtera Abadi Maju</b><br>
        Jln. Kenangan Indah Gang. MoveOn No.113, Surabaya<br>
        Email : Hati_ini_suci@gmail.com<br>
        No.Hp : 089723849124<br><br>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Id.Pegawai</th>
                    <th>Nama Pegawai</th>
                    <th>Alamat</th>
                    <th>Pendidikan</th>
                    <th>No.Telp</th>
                    <th>Jabatan</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pegawai as $cetakpegawai)
                <tr>
                    <td>{{ $cetakpegawai->id_pegawai }}</td>
                    <td>{{ $cetakpegawai->nama_pegawai }}</td>
                    <td>{{ $cetakpegawai->alamat }}</td>
                    <td>{{ $cetakpegawai->pendidikan }}</td>
                    <td>{{ $cetakpegawai->no_telp }}</td>
                    <td>{{ $cetakpegawai->jabatan }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script type="text/javascript">
        window.print("/pegawai/pegawai_cetak");
    </script>
</body>

</html>