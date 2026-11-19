<?php

namespace App\Http\Controllers;

class BelajarController extends Controller
{
        public function index()
    {
        $nama = 'Suta Wijaya';
        $kelas = '3C';
        $kampus = 'Mahasiswa';

        return view('dashboard', [
            'nama' => $nama,
            'kelas' => $kelas,
            'kampus' => $kampus
        ]);
    }
}