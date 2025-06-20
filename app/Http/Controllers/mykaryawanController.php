<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class mykaryawanController extends Controller
{
    // Menampilkan seluruh data karyawan
    public function index()
    {
        // Mengambil data karyawan dari tabel 'mykaryawan'
        $mykaryawan = DB::table('mykaryawan')->get();
        return view('mykaryawan.index', ['mykaryawan' => $mykaryawan]);
    }

    // Menampilkan halaman untuk mengedit data karyawan
    public function edit($id)
    {
        // Mengambil data karyawan berdasarkan kodepegawai
        $mykaryawan = DB::table('mykaryawan')->where('kodepegawai', $id)->first();

        // Jika data tidak ditemukan, kembalikan ke halaman daftar karyawan
        if (!$mykaryawan) {
            return redirect('/mykaryawan')->with('error', 'Karyawan tidak ditemukan!');
        }

        return view('mykaryawan.edit', ['mykaryawan' => $mykaryawan]);  // Mengirim data ke halaman edit
    }

    // Memperbarui data karyawan
    public function update(Request $request)
    {
        // Melakukan update data karyawan di database
        DB::table('mykaryawan')->where('kodepegawai', $request->kodepegawai)->update([
            'kodepegawai '     => $request->kodepegawai ,
            'namalengkap'     => $request->namalengkap,
            'divisi'          => $request->divisi,
            'departemen'      => $request->departemen
        ]);

        // Setelah data diupdate, redirect kembali ke halaman daftar karyawan
        return redirect('/eas');
    }

    // Menghapus data karyawan
   public function view($id)
{
    // Mengambil data karyawan berdasarkan kodepegawai
    $mykaryawan = DB::table('mykaryawan')->where('kodepegawai', $id)->first();

    // Jika data tidak ditemukan, kembalikan ke halaman daftar karyawan
    if (!$mykaryawan) {
        return redirect('/mykaryawan')->with('error', 'Karyawan tidak ditemukan!');
    }

    // Mengirim data ke halaman view
    return view('mykaryawan.view', ['mykaryawan' => $mykaryawan]);
}

}
