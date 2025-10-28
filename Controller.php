<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Menampilkan daftar semua Mahasiswa beserta Program Studinya.
     */
    public function index()
    {
        // Mengambil semua data Mahasiswa dan melakukan eager loading pada relasi 'prodi'.
        // Ini mencegah masalah N+1 query.
        $mahasiswas = Mahasiswa::with('prodi')->orderBy('nama')->get();

        // Melemparkan data ke view 'mahasiswa.index'
        return view('mahasiswa.index', compact('mahasiswas'));
    }

    // Anda bisa menambahkan method lain di sini seperti 'create', 'store', 'edit', 'update', dan 'destroy'
    // untuk mengelola data Mahasiswa secara penuh (CRUD).
}
