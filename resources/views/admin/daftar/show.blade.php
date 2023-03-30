@extends('admin.parent')

@section('content')

ini halaman detail

<label for="" class="form-label">Nama Pendaftar</label>
<input type="text" class="form-control" value="{{ $daftar->name }}" readonly>

<label for="" class="form-label mt-3">Nomer hp Pendaftar</label>
<input type="number" class="form-control" value="{{ $daftar->phone }}" readonly>

<label for="" class="form-label mt-3">Alamat Pendaftar</label>
<input type="text" class="form-control" value="{{ $daftar->address }}" readonly>
<textarea
    class="form-label mt-3" cols="30" rows="10" 
    readonly>{!! $daftar->address !!}</textarea>

    <a href="{{ route('daftar.index') }}" class="btn btn-info mt-3">
        back
    </a>

@endsection