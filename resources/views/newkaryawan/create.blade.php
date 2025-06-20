@extends('template')

@section('content')
<h3>Tambah Data</h3>

@if($errors->any())
    <div class="alert alert-danger">
        <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
    </div>
@endif

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<form action="{{ route('karyawan.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label>NIP</label>
        <input type="text" name="NIP" class="form-control" required>
    </div>
    <div class="form-group">
        <label>nama</label>
        <input type="text" name="nama" class="form-control" required>
    </div>
    <div class="form-group">
        <label>pangkat</label>
        <input type="text" name="pangkat" class="form-control" required>
    </div>
    <div class="form-group">
        <label>gaji</label>
        <input type="text" name="gaji" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="{{ route('newkaryawan.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection
