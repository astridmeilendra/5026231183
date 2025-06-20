@extends('template')

@section('content')
    <h2>Detail Data Karyawan</h2>

    <br/><br/>

    <form>
        <div class="form-group">
            <label for="kodepegawai">Kode Pegawai</label>
            <input type="text" class="form-control" name="kodepegawai" value="{{ $mykaryawan->kodepegawai }}" readonly>
        </div>

        <div class="form-group">
            <label for="namalengkap">Nama Lengkap</label>
            <input type="text" class="form-control" name="namalengkap" value="{{ $mykaryawan->namalengkap }}" readonly>
        </div>

        <div class="form-group">
            <label for="divisi">Divisi</label>
            <input type="text" class="form-control" name="divisi" value="{{ $mykaryawan->divisi }}" readonly>
        </div>

        <div class="form-group">
            <label for="departemen">Departemen</label>
            <input type="text" class="form-control" name="departemen" value="{{ $mykaryawan->departemen }}" readonly>
        </div>

        <!-- Tombol Kembali -->
        <a href="/eas" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
