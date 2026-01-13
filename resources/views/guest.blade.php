<!DOCTYPE html>
<html>
<head>
    <title>Buku Tamu Digital</title>
</head>
<body>
    <h2>Buku Tamu</h2>

    <form method="POST" action="/simpan">
        @csrf
        <input name="nama" placeholder="Nama"><br><br>
        <input name="instansi" placeholder="Instansi"><br><br>
        <input name="tujuan" placeholder="Tujuan"><br><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
