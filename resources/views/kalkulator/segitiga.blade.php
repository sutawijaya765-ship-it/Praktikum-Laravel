<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kalkulator Segitiga</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <div class="container">

        <div class="card">

            <h1>Kalkulator Luas Segitiga</h1>

            <p>Masukkan alas dan tinggi segitiga.</p>

            <form action="{{ url('/kalkulator/segitiga') }}" method="GET">

                <label>Alas (cm)</label>

                <input
                    type="number"
                    name="alas"
                    step="any"
                    min="0.01"
                    placeholder="Masukkan alas"
                    value="{{ request('alas') }}"
                    required
                >

                @error('alas')
                    <p class="error">{{ $message }}</p>
                @enderror

                <label>Tinggi (cm)</label>

                <input
                    type="number"
                    name="tinggi"
                    step="any"
                    min="0.01"
                    placeholder="Masukkan tinggi"
                    value="{{ request('tinggi') }}"
                    required
                >

                @error('tinggi')
                    <p class="error">{{ $message }}</p>
                @enderror

                <button type="submit">
                    Hitung Luas
                </button>

            </form>

            @if ($luas !== null)

                <div class="hasil">

                    <h3>Hasil Perhitungan</h3>

                    <p>Alas: {{ $alas }} cm</p>

                    <p>Tinggi: {{ $tinggi }} cm</p>

                    <h2>
                        Luas: {{ number_format($luas, 2, ',', '.') }} cm²
                    </h2>

                </div>

            @endif

        </div>

    </div>

</body>
</html>