@extends('template')

@section('content')
	<h3>Data Karyawan</h3>

	<br/>
	<br/>

	<table class="table table-striped">
		<tr>
			<th>Kode Pegawai</th>
			<th>Nama Lengkap</th>
			<th>Divisi</th>
			<th>Departemen</th>
			<th>Action</th>
		</tr>
		@foreach($karyawan as $s)
        <tr>
            <td>{{ $s->kodepegawai }}</td> <!-- Gunakan $s untuk menampilkan data -->
            <td>{{ strtoupper($s->namalengkap) }}</td> <!-- Nama Lengkap dengan huruf kapital -->
            <td>{{ $s->divisi }}</td>
            <td>{{ strtolower($s->departemen) }}</td> <!-- Departemen dengan huruf kecil -->

            <td>
                <a href="/karyawan/hapus/{{ $s->kodepegawai }}" class="btn btn-danger">Hapus Data</a>
            </td>
        </tr>
        </tr>
        @endforeach
	</table>
    	<a href="/karyawan/tambah" class="btn btn-primary"> + Tambah Karyawan Baru</a>

	{{ $karyawan->links() }}

@endsection
