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
                <th>Username</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @php $no=1; @endphp
            @foreach ($profile as $row )
            <tr>
                <th>{{$no++}}</th>
                <td>{{ $row->nama }}</td>
                <td>{{ $row->username }}</td>
                <td>{{ $row->email }}</td>
                
            </tr>
            @endforeach
        </tbody>


    </table>

</body>

</html>