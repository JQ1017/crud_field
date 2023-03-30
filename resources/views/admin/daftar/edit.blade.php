@extends('admin.parent')

@section('content')

<form action="{{ route('daftar.update', $daftar->id) }}" method="post">
    @csrf
    @method('PUT')

    <label for="" class="form-label">Nama Pendaftar</label>
    <input type="text" class="form-control" name="name" value="{{ $daftar->name }}">

    <label for="" class="form-label">Nomer hp Pendaftar</label>
    <input type="number" class="form-control" name="phone" value="{{ $daftar->phone }}">

    <label for="" class="form-label">Alamat Pendaftar</label>
    <textarea class="form-control" id="" cols="30" rows="10" name="address">{{ $daftar->address }}</textarea>

    <button type="submit" class="btn btn-primary mt-3">Edit Pendaftar</button>
</form>

@endsection