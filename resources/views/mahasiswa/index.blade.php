
@extends('layouts.app')

@section('title', 'Data Mahasiswa')

@section('content')

<div class="mahasiswa-page">

    <div class="mahasiswa-header">
        <div>
            <h1>TES HALAMAN MAHASISWA BERHASIL</h1>
            <p>Kelola data mahasiswa Laravel 12</p>
        </div>

        <a href="{{ route('mahasiswa.create') }}" class="btn-tambah">
            + Tambah Mahasiswa
        </a>
    </div>

    @if (session('success'))
        <div class="alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="mahasiswa-card">

        <div class="table-wrapper">
            <table class="mahasiswa-table">

                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NPM</th>
                        <th>Jurusan</th>
                        <th>Kelas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($mahasiswa as $mhs)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $mhs->nama }}</td>
                            <td>{{ $mhs->npm }}</td>
                            <td>{{ $mhs->jurusan }}</td>
                            <td>{{ $mhs->kelas }}</td>

                            <td>
                                <div class="aksi-buttons">

                                    <a href="{{ route('mahasiswa.edit', $mhs->id) }}"
                                       class="btn-edit">
                                        Edit
                                    </a>

                                    <form action="{{ route('mahasiswa.destroy', $mhs->id) }}"
                                          method="POST"
                                          onsubmit="return confirm('Yakin ingin menghapus data mahasiswa ini?')">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn-hapus">
                                            Hapus
                                        </button>
                                    </form>

                                </div>
                            </td>
                        </tr>

                    @empty
                        <tr>
                            <td colspan="6" class="empty-data">
                                Belum ada data mahasiswa.
                            </td>
                        </tr>
                    @endforelse
                </tbody>

            </table>
        </div>

    </div>

</div>

@endsection
