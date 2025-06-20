@extends('template')

@section('content')
    <h3>Data Karyawan</h3>

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Kode Pegawai</th>
                <th>Nama Lengkap</th>
                <th>Divisi</th>
                <th>Departemen</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mykaryawan as $p)
            <tr>
                <td>{{ $p->kodepegawai }}</td>
                <td>{{ ucwords(strtolower($p->namalengkap)) }}</td>
                <td>{{ $p->divisi }}</td>
                <td>{{ $p->departemen }}</td>
                <td>
                    <!-- Membuat tombol Edit dan Hapus dalam satu kolom, menggunakan tombol bootstrap -->
                    <a href="/mykaryawan/edit/{{ $p->kodepegawai }}" class="btn btn-warning btn-sm">Edit</a>
                    <a href="/mykaryawan/view/{{ $p->kodepegawai }}" class="btn btn-info btn-sm">View</a> <!-- Tombol View -->
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
