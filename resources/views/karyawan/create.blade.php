@extends('template')

@section('content')
<h3>Tambah Karyawan</h3>

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
        <label>Kode Pegawai</label>
        <input type="text" name="kodepegawai" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Nama Lengkap</label>
        <input type="text" name="namalengkap" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Divisi</label>
        <input type="text" name="divisi" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Departemen</label>
        <input type="text" name="departemen" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="{{ route('karyawan.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection
