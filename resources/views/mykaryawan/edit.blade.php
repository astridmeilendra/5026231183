@extends('template')

@section('content')
    <h2>Edit Data Karyawan</h2>
    <a href="/eas">Kembali</a>

    <br/><br/>

    <form action="/mykaryawan/update" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $mykaryawan->kodepegawai }}"> <br/>

        Nama Pegawai:
        <input type="text" name="namalengkap" required value="{{ $mykaryawan->namalengkap }}"> <br/>

        Kode Pegawai:
        <input type="text" name="kodepegawai" required value="{{ $mykaryawan->kodepegawai }}" readonly> <br/>

        Divisi:
        <input type="text" name="divisi" required value="{{ $mykaryawan->divisi }}"> <br/>

        Departemen:
        <input type="text" name="departemen" required value="{{ $mykaryawan->departemen }}"> <br/>

        <input type="submit" value="Simpan Perubahan">

    </form>
@endsection
