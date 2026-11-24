<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    // Menampilkan seluruh data mahasiswa
    public function index()
    {
        $mahasiswa = Mahasiswa::all();

        return view('mahasiswa.index', compact('mahasiswa'));
    }

    // Menampilkan form tambah mahasiswa
    public function create()
    {
        return view('mahasiswa.create');
    }

    // Menyimpan data mahasiswa
    
    public function store(Request $request)
    {
        // Validasi data mahasiswa
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'npm' => 'required|string|max:20',
            'jurusan' => 'required|string|max:100',
            'kelas' => 'required|string|max:20',
        ]);

        // Simpan data ke database
        Mahasiswa::create($validated);

        // Kembali ke halaman daftar mahasiswa
        return redirect()
            ->route('mahasiswa.index')
            ->with('success', 'Data mahasiswa berhasil ditambahkan!');
    }


    // Menampilkan detail mahasiswa
    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    // Menampilkan form edit mahasiswa
        public function edit(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    // Memperbarui data mahasiswa
    
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        // Validasi data
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'npm' => 'required|string|max:20',
            'jurusan' => 'required|string|max:100',
            'kelas' => 'required|string|max:20',
        ]);

        // Perbarui data mahasiswa
        $mahasiswa->update($validated);

        // Kembali ke halaman daftar
        return redirect()
            ->route('mahasiswa.index')
            ->with('success', 'Data mahasiswa berhasil diperbarui!');
    }


    // Menghapus data mahasiswa
   
    public function destroy(Mahasiswa $mahasiswa)
    {
        // Menghapus data mahasiswa
        $mahasiswa->delete();

        // Kembali ke halaman daftar
        return redirect()
            ->route('mahasiswa.index')
            ->with('success', 'Data mahasiswa berhasil dihapus!');
    }

}