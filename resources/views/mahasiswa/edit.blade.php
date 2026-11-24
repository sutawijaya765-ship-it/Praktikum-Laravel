
@extends('layouts.app')

@section('content')

<div class="card">

    <h1>Edit Mahasiswa</h1>

    <p>Perbarui data mahasiswa berikut.</p>

    <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">

        @csrf
        @method('PUT')

        <div>
            <label>Nama Mahasiswa</label>
            <input
                type="text"
                name="nama"
                value="{{ $mahasiswa->nama }}"
                required
            >
        </div>

        <div>
            <label>NPM</label>
            <input
                type="text"
                name="npm"
                value="{{ $mahasiswa->npm }}"
                required
            >
        </div>

        <div>
            <label>Jurusan</label>
            <input
                type="text"
                name="jurusan"
                value="{{ $mahasiswa->jurusan }}"
                required
            >
        </div>

        <div>
            <label>Kelas</label>
            <input
                type="text"
                name="kelas"
                value="{{ $mahasiswa->kelas }}"
                required
            >
        </div>

        <button type="submit">Update Mahasiswa</button>

        <a href="{{ route('mahasiswa.index') }}">Kembali</a>

    </form>

</div>

@endsection
