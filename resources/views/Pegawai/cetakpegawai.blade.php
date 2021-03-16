<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <meta name="csrf-token" content="{{ csrf_token }}"> --}}
    <style>
        table.static {
            position: relative;
            border: 1px solid #545454;
            /* left: 3%; */
        }
    </style>
    <title>Cetak data Pegawai</title>
</head>

<body>
    <div class="form-group">
        <p align="center"><b>Laporan Data Pegawai</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Tanggal Lahir</th>
            </tr>
            @foreach ($dtcetakPegawai as $key=> $item)
            <tr>
                <th>{{ $loop->iteration }}</th>
                <th>{{ $item->nama }}</th>
                <td>{{ $item->alamat }}</td>
                <td>{{ date('d-m-y',strtotime($item->tgllhr)) }}</td>
            </tr>
            @endforeach

        </table>
    </div>
</body>

</html>