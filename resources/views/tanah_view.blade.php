<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Tanah Dijual</title>
    <link rel="stylesheet" href="/style/style-rian.css">
    
</head>
<body>
    <h1>Daftar Tanah Dijual</h1>

    <img src="/image/image.jpg" alt="Gambar 1">
    <img src="/image/image.png" alt="Gambar 2">

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>Lokasi</th>
                <th>Luas</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $tanah)
                <tr>
                    <td>{{ $tanah['lokasi'] }}</td>
                    <td>{{ $tanah['luas'] }}</td>
                    <td>{{ $tanah['harga'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
