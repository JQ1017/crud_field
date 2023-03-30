@extends('admin.parent')


@section('content')

<div class="container card">
    <a href="{{ route('daftar.create') }}" class="btn btn-primary">
        Tambahkan Pendaftar
    </a>

    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Name</td>
                    <td>Phone</td>
                    <td>Address</td>
                    <td>Action</td></tr>
            </thead>
            <tbody>
                @foreach ($daftar as $row)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->phone }}</td>
                    <td>{{ $row->address }}</td>
                    <td>
                        <a href="{{ route('daftar.show', $row->id) }}" class="btn btn-primary m-1" style="width: 6rem">
                            Show
                        </a>

                        <a href="{{ route('daftar.edit', $row->id) }}" class="btn btn-warning m-1" style="width: 6rem">
                            Edit
                        </a>

                        <form action="{{ route('daftar.destroy', $row->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button style="width: 6rem" class="btn btn-danger m-1" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

@endsection

