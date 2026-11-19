<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard Laravel</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
</head>
<body>

    <div class="container">

        <div class="card">

            <h1>Selamat Datang!</h1>

            <p>Nama: {{ $nama }}</p>

            <p>Kelas: {{ $kelas }}</p>

            <p>Status: {{ $kampus }}</p>

            <p>Saya sedang belajar Laravel 12.</p>

        </div>

    </div>

</body>
</html>