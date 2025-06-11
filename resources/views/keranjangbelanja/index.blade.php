@extends('template')

@section('content')
	<h3>Data Keranjang Belanja</h3>

	    <a href="/keranjangbelanja/tambah"class="btn btn-primary">  + Beli</a>


	    <br/>

	<table class="table table-striped">
		<tr>
            <th>Kode Pembelian</th>

			<th>Kode Barang</th>
			<th>Jumlah Pembelian</th>
			<th>Harga per item</th>
			<th>Total</th>
            <th>Action</th>
		</tr>
		@foreach($keranjangbelanja as $p)
		<tr>
			<td>{{ $p->ID }}</td>
			<td>{{ $p->KodeBarang }}</td>
			<td>{{ $p->Jumlah }}</td>
			<td>{{ $p->Harga }}</td>
            <td>{{ $p->Jumlah * $p->Harga }}</td>

			<td>
				<a href="/keranjangbelanja/hapus/{{ $p->ID }}" class="btn btn-danger">Batal</a>
			</td>
		</tr>



		@endforeach
	</table>

{{ $keranjangbelanja->links() }}


@endsection
