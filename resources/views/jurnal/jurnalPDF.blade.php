<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3 align="center">DATA JURNAL</h3>
    <table border="1" cellpadding="10" align="center">
        <thead>
            <tr>
                <th>No</th>
                <th>AUTHOR</th>
                <th>Judul Dan Tahun Terbit</th>
                <th>Keterangan</th>
                <th>Kategori</th>
            </tr>
        </thead>
        <tbody>
            @php $no=1; @endphp
            @foreach ($jurnal as $row )
            <tr>
                <th>{{$no++}}</th>
                <td>{{$row->profile->nama}}</td>
                <td>{{ $row->judul }} {{ $row->tahun }}</td>
                <td>{{ $row->ket }}</td>
                <td>{{ $row->kategori->nama_kategori }}</td>
            </tr>
            @endforeach
        </tbody>


    </table>

</body>

</html>