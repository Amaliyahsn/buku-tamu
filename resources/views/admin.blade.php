<!DOCTYPE html>
<html>
<head>
    <title>Admin - Buku Tamu</title>
</head>
<body>

<h2>Data Buku Tamu</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Instansi</th>
        <th>Tujuan</th>
        <th>Waktu</th>
    </tr>

    @foreach ($guests as $guest)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $guest->nama }}</td>
        <td>{{ $guest->instansi }}</td>
        <td>{{ $guest->tujuan }}</td>
        <td>{{ $guest->created_at }}</td>
    </tr>
    @endforeach

</table>

</body>
</html>
