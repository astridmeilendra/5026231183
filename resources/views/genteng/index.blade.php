@extends('template')

@section('content')
	<h3>Data Genteng</h3>

	<a href="/genteng/tambah" class="btn btn-primary"> + Tambah Genteng Baru</a>
	<p>Cari Data Genteng :</p>
	<form action="/genteng/cari" method="GET">
		<input type="text" class="form-control" name="cari" placeholder="Cari Genteng .." value="{{ old('cari') }}">
		<input type="submit" class="btn btn-info" value="CARI">
	</form>

	<br/>
	<br/>

	<table class="table table-striped">
		<tr>
			<th>Merk</th>
			<th>Harga</th>
			<th>Tersedia</th>
			<th>Berat (kg)</th>
			<th>Opsi</th>
		</tr>
		@foreach($genteng as $s)
        <tr>
            <td>{{ $s->merkgenteng }}</td>
            <td>Rp{{ number_format($s->hargagenteng, 0, ',', '.') }}</td>
            <td>{{ $s->tersedia ? 'Ya' : 'Tidak' }}</td>
            <td>{{ $s->berat }}</td>
            <td>
                <a href="/genteng/edit/{{ $s->ID }}" class="btn btn-success">
                    <i class="fas fa-edit"></i> Edit
                </a>
                <a href="/genteng/hapus/{{ $s->ID }}" class="btn btn-danger">
                    <i class="fas fa-trash-alt"></i> Hapus
                </a>
            </td>
        </tr>
        @endforeach

	</table>
	{{ $genteng->links() }}

@endsection
