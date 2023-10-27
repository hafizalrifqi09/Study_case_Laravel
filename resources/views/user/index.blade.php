@extends('layouts.tamplate')

@section('content')

    @if(Session::get('success'))
        <div class="alert alert-success"> {{ Session::get('success') }} </div>
        @endif
        @if(Session::get('deleted'))
        <div class="alert alert-success"> {{ Session::get('deleted') }} </div>
        @endif
        <div class="container">
            <h3 class="mb-3">kelola data akun</h3>
            <div class="d-flex justify-content-between">
                <a href="{{ route('user.create') }}" class="btn btn-primary">Tambah akun</a>
            </div>
        <br>


<table class="table table->striped table-bordered table-hover">
    <thead>
        <tr>
            <th>no</th>
            <th>nama</th>
            <th>email</th>
            <th>role</th>
            <th class="text-center">aksi</th>
        </tr>
    </thead>
    @php $no = 1; @endphp
    @foreach ($Users as $item)
    <tr>
        <td>{{ $no++ }}</td>
        <td>{{ $item['name'] }}</td>
        <td>{{ $item['email'] }}</td>
        <td>{{ $item['role'] }}</td>
        <td class="d-flex justify-content-center">
            <a href="{{ route('user.edit', $item['id']) }}" class="btn btn-primary me-3">edit</a>

            <form action="{{ route('user.delete', $item['id']) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('arek nga hapus data iyeu')">hapus</button>
        </td>
    </tr>
    @endforeach
</tbody>
</table>
@endsection

