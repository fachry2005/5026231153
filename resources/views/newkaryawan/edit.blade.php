@extends('template')

@section('content')
    <h3>Edit Data Karyawan</h3>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
        </div>
    @endif

    <form action="{{ route('newkaryawan.update', $data->nip) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nip">NIP</label>
            <input type="text" name="nip" value="{{ $data->nip }}" class="form-control" readonly>
        </div>

        <div class="mb-3">
            <label for="nama">Nama</label>
            <input type="text" name="nama" value="{{ $data->nama }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="pangkat">Pangkat</label>
            <input type="text" name="pangkat" value="{{ $data->pangkat }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="gaji">Gaji</label>
            <input type="number" name="gaji" value="{{ $data->gaji }}" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('newkaryawan.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
