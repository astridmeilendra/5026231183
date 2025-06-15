<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index()
	{
		$karyawan = DB::table('karyawan')->paginate(10);
		return view('karyawan.index', ['karyawan' => $karyawan]);
	}
        public function tambah()
	{
		return view('karyawan.tambah');
	}
    public function store(Request $request){
        $request->validate([
            'kodepegawai' => 'required|unique:karyawan,kodepegawai', // Validasi tidak null dan unik
            'namalengkap' => 'required',
            'divisi' => 'required',
            'departemen' => 'required'
        ]);

        DB::table('karyawan')->insert([
            'kodepegawai' => $request->kodepegawai,
            'namalengkap' => $request->namalengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen,
        ]);
        return redirect('/karyawan');
    }

        public function hapus($id)
	{
		DB::table('karyawan')->where('kodepegawai', $id)->delete();
		return redirect('/karyawan');
	}

}
