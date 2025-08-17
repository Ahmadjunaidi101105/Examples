<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Tampilkan semua siswa.
     */
    public function index()
    {
        // Urutkan nilai dari besar ke kecil
        $data = Siswa::with('mentor')->orderBy('nilai', 'desc')->paginate(20);
        return view('siswa.index', ['data' => $data]) ;
    }

    /**
     * Tampilkan detail siswa berdasarkan ID.
     */
    public function show($id)
    {
        $siswa = Siswa::with('mentor')->findOrFail($id);
        return view('siswa.show', ['siswa' => $siswa]);
    }

    /**
     * Tampilkan form tambah siswa.
     */
    public function create()
    {
        return view('siswa.create');
    }

    /**
     * Simpan data siswa baru.
     */
    public function store(Request $request)
    {
        // validasi sederhana
        $request->validate([
            'nama'  => 'required|string|max:100',
            'nilai' => 'required|numeric',
        ]);

        Siswa::create($request->all());

        return redirect('/siswa')->with('success', 'Data siswa berhasil ditambahkan!');
    }

    /**
     * Tampilkan form edit siswa.
     */
    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('siswa.edit', ['siswa' => $siswa]);
    }

    /**
     * Update data siswa.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama'  => 'required|string|max:100',
            'nilai' => 'required|numeric',
        ]);

        $siswa = Siswa::findOrFail($id);
        $siswa->update($request->all());

        return redirect('/siswa')->with('success', 'Data siswa berhasil diupdate!');
    }

    /**
     * Hapus data siswa.
     */
    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();

        return redirect('/siswa')->with('success', 'Data siswa berhasil dihapus!');
    }
}