@extends('karyawan layout')

@section('content')
<div class="container">
    <h2>Edit Data Karyawan</h2>
    <form action="{{ route('karyawan.update', $karyawan->kodepegawai) }}" method="POST" class="form-horizontal">
        @csrf
        @method('PUT')

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Kode Pegawai</label>
            <div class="col-sm-10">
                <input type="text" name="kodepegawai" class="form-control" value="{{ $karyawan->kodepegawai }}" readonly>
            </div>
        </div>

        <div class="form-group row mt-2">
            <label class="col-sm-2 col-form-label">Nama Lengkap</label>
            <div class="col-sm-10">
                <input type="text" name="namalengkap" class="form-control" value="{{ $karyawan->namalengkap }}" required maxlength="50">
            </div>
        </div>

        <div class="form-group row mt-2">
            <label class="col-sm-2 col-form-label">Divisi</label>
            <div class="col-sm-10">
                <input type="text" name="divisi" class="form-control" value="{{ $karyawan->divisi }}" required maxlength="5">
            </div>
        </div>

        <div class="form-group row mt-2">
            <label class="col-sm-2 col-form-label">Departemen</label>
            <div class="col-sm-10">
                <input type="text" name="departemen" class="form-control" value="{{ $karyawan->departemen }}" required maxlength="10">
            </div>
        </div>

        <div class="form-group row mt-3">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('karyawan.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </form>
</div>
@endsection
