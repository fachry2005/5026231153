@extends('template')

@section('content')
    <h3>Daftar Karyawan</h3>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- Tombol Tambah dan Form Pencarian --}}
    <div class="d-flex justify-content-between align-items-center mb-3">
        <a href="{{ route('karyawan.create') }}" class="btn btn-primary">Tambah Data</a>

        <form action="{{ route('karyawan.index') }}" method="GET" class="d-flex">
            <label for="search" class="me-2">Cari Karyawan:</label>
            <input type="text" name="search" id="search" value="{{ request('search') }}" class="form-control me-2" placeholder="Nama / Divisi / Departemen">
            <button type="submit" class="btn btn-secondary">Cari</button>
        </form>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Kode Pegawai</th>
                <th>Nama Lengkap</th>
                <th>Divisi</th>
                <th>Departemen</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($karyawan as $row)
            <tr>
                <td>{{ $row->kodepegawai }}</td>
                <td>{{ strtoupper($row->namalengkap) }}</td>
                <td>{{ strtoupper($row->divisi) }}</td>
                <td>{{ strtolower($row->departemen) }}</td>
                <td>
                    <a href="{{ route('karyawan.edit', $row->kodepegawai) }}" class="btn btn-warning btn-sm">Edit</a>

                    <form action="{{ route('karyawan.destroy', $row->kodepegawai) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Yakin ingin menghapus data ini?')" class="btn btn-danger btn-sm">Hapus Data</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center text-muted">Data karyawan tidak ditemukan.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
@endsection
