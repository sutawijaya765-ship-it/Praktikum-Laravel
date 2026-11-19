<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Daftar Mahasiswa</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <div class="container">

        <div class="card">

            <h1>DAFTAR MAHASISWA</h1>

            <p>Data mahasiswa Laravel 12</p>

            <table>
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Gender</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($mahasiswa as $mhs)
                        <tr>
                            <td>{{ $mhs['nama'] }}</td>
                            <td>{{ $mhs['alamat'] }}</td>
                            <td>{{ $mhs['gender'] }}</td>
                        </tr>
                    @endforeach
                </tbody>

            </table>

        </div>

    </div>

</body>
</html>