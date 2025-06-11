@extends('layout')

@section('content')
<h2>Edit Data RAM</h2>

@if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('ram.update', $ram->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Merk RAM:</label><br>
    <input type="text" name="merkRAM" value="{{ old('merkRAM', $ram->merkRAM) }}"><br><br>

    <label>Harga RAM:</label><br>
    <input type="number" name="hargaRAM" value="{{ old('hargaRAM', $ram->hargaRAM) }}"><br><br>

    <label>Tersedia:</label><br>
    <select name="tersedia">
        <option value="1" {{ $ram->tersedia ? 'selected' : '' }}>Ya</option>
        <option value="0" {{ !$ram->tersedia ? 'selected' : '' }}>Tidak</option>
    </select><br><br>

    <label>Berat (kg):</label><br>
    <input type="text" name="berat" value="{{ old('berat', $ram->berat) }}"><br><br>

    <button type="submit" class="btn btn-success">Update</button>
    <a href="{{ route('ram.index') }}" class="btn btn-danger">Batal</a>
</form>
@endsection
