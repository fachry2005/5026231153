@extends('template')

@section('content')
    <h3>Data Karyawan</h3>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('newkaryawan.create') }}" class="btn btn-primary mb-3">+ Tambah Data</a>

    <form method="GET" action="{{ route('newkaryawan.index') }}" class="mb-3">
        <input type="text" name="cari" placeholder="Cari Nama..." value="{{ $cari ?? '' }}" class="form-control w-25 d-inline">
        <button type="submit" class="btn btn-info">Cari</button>
    </form>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>NIP</th>
                <th>Nama</th>
                <th>Pangkat</th>
                <th>Gaji</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $d)
            <tr>
                <td>{{ $d->nip }}</td>
                <td>{{ $d->nama }}</td>
                <td>{{ $d->pangkat }}</td>
                <td>Rp {{ number_format($d->gaji, 0, ',', '.') }}</td>
                <td>
                    <a href="{{ route('newkaryawan.edit', $d->nip) }}" class="btn btn-warning btn-sm">Edit</a>
                    <a href="{{ route('newkaryawan.destroy', $d->nip) }}" class="btn btn-danger btn-sm"
                       onclick="return confirm('Yakin hapus data ini?')">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
