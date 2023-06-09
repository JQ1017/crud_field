@extends('admin.parent')

@section('content')

<form action="{{ route('daftar.store') }}" method="post">
    @csrf
    @method('POST')

    <label for="" class="form-label">Nama Pendaftar</label>
    <input type="text" class="form-control" name="name">

    <label for="" class="form-label">Nomer hp Pendaftar</label>
    <input type="number" class="form-control" name="phone">

    <label for="" class="form-label">Address</label>
    <textarea class="form-control" id="" cols="30" rows="10" name="address"></textarea>

    <button type="submit" class="btn btn-primary mt-3">Add Pendaftar</button>
</form>
@endsection