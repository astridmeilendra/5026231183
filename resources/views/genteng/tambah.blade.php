@extends('template')

@section('content')
<h3>Tambah Data Genteng</h3>

	<a href="/genteng" class="btn btn-info"> Kembali</a>

	<br/>
	<br/>

	<form action="/genteng/store" method="post">
		{{ csrf_field() }}
        <div class="row mb-3">
            <div class="col-3">
				Merk Genteng
            </div>
            <div class="col-8">
                <input type="text" name="merkgenteng" required="required" class="form-control" maxlength="25" placeholder="Masukkan Merk Genteng">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-3">
				Harga (Rp)
            </div>
            <div class="col-8">
                <input type="number" name="hargagenteng" required="required" class="form-control" min="0" placeholder="Masukkan Harga Genteng">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-3">
				Tersedia
            </div>
            <div class="col-8">
                <select name="tersedia" class="form-control" required>
                    <option value="">-- Pilih --</option>
                    <option value="1">Ya</option>
                    <option value="0">Tidak</option>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-3">
				Berat (kg)
            </div>
            <div class="col-8">
                <input type="number" step="0.01" name="berat" required="required" class="form-control" min="0" placeholder="Masukkan Berat Genteng">
            </div>
        </div>
		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>

@endsection
