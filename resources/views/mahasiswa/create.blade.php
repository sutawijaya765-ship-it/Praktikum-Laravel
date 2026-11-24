
@extends('layouts.app')

@section('content')

<div class="card">

    <h1>Tambah Mahasiswa</h1>

    <p>Silakan isi data mahasiswa berikut.</p>

    <form action="{{ route('mahasiswa.store') }}" method="POST">

        @csrf

        <div>
            <label>Nama Mahasiswa</label>
            <input type="text" name="nama" placeholder="Masukkan nama mahasiswa" required>
        </div>

        <div>
            <label>NPM</label>
            <input type="text" name="npm" placeholder="Masukkan NPM" required>
        </div>

        <div>
            <label>Jurusan</label>
            <input type="text" name="jurusan" placeholder="Masukkan jurusan" required>
        </div>

        <div>
            <label>Kelas</label>
            <input type="text" name="kelas" placeholder="Masukkan kelas" required>
        </div>

        <button type="submit">Simpan Mahasiswa</button>

        <a href="{{ route('mahasiswa.index') }}">Kembali</a>

    </form>

</div>

@endsection
