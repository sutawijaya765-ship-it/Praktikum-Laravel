
@extends('layouts.app')

@section('title', 'Kalkulator Segitiga')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endpush

@section('content')

<div class="calculator-page">

    <div class="calculator-container">

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

</div>

@endsection
