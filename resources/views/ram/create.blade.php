@extends('layout')

@section('content')
<h2>Tambah RAM Baru</h2>

@if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('ram.store') }}" method="POST">
    @csrf
    <label>Merk RAM:</label><br>
    <input type="text" name="merkRAM" value="{{ old('merkRAM') }}"><br><br>

    <label>Harga RAM:</label><br>
    <input type="number" name="hargaRAM" value="{{ old('hargaRAM') }}"><br><br>

    <label>Tersedia:</label><br>
    <select name="tersedia">
        <option value="1" {{ old('tersedia') == '1' ? 'selected' : '' }}>Ya</option>
        <option value="0" {{ old('tersedia') == '0' ? 'selected' : '' }}>Tidak</option>
    </select><br><br>

    <label>Berat (kg):</label><br>
    <input type="text" name="berat" value="{{ old('berat') }}"><br><br>

    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="{{ route('ram.index') }}" class="btn btn-danger">Batal</a>
</form>
@endsection
