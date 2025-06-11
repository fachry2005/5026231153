@extends('template')

@section('content')
<h2>Data RAM</h2>

<!-- Tombol Tambah -->
<a href="{{ route('ram.create') }}" class="btn btn-primary mb-3">+ Tambah RAM Baru</a>

<!-- Form Cari -->
<form action="{{ route('ram.index') }}" method="GET" class="form-inline mb-3">
    <label for="search" class="mr-2">Cari RAM:</label>
    <input type="text" name="search" id="search" value="{{ request('search') }}" class="form-control mr-2">
    <button type="submit" class="btn btn-secondary">Cari</button>
</form>

<!-- Flash Message -->
@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<!-- Tabel Data -->
<table class="table table-bordered">
    <thead class="thead-light">
        <tr>
            <th>ID</th>
            <th>Merk RAM</th>
            <th>Harga</th>
            <th>Tersedia</th>
            <th>Berat (kg)</th>
            <th>Opsi</th>
        </tr>
    </thead>
    <tbody>
        @forelse($ram as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->merkRAM }}</td>
            <td>{{ number_format($item->hargaRAM, 0, ',', '.') }}</td>
            <td>{{ $item->tersedia ? 'Ya' : 'Tidak' }}</td>
            <td>{{ $item->berat }}</td>
            <td>
                <a href="{{ route('ram.edit', $item->id) }}" class="btn btn-success btn-sm">Edit</a>
                <form action="{{ route('ram.destroy', $item->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Yakin ingin menghapus?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="6" class="text-center">Data tidak ditemukan.</td>
        </tr>
        @endforelse
    </tbody>
</table>

<!-- Pagination -->
{{ $ram->links() }}
@endsection
