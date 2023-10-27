@extends('layouts.tamplate')

@section('content')

    @if(Session::get('success'))
        <div class="alert alert-success"> {{ Session::get('success') }} </div>
        @endif
        @if(Session::get('deleted'))
        <div class="alert alert-success"> {{ Session::get('deleted') }} </div>
        @endif


<table class="table table->striped table-bordered table-hover">
    <thead>
        <tr>
            <th>no</th>
            <th>nama</th>
            <th>tipe</th>
            <th>harga</th>
            <th>stock</th>
            <th class="text-center">aksi</th>
        </tr>
    </thead>
    @php $no = 1; @endphp
    @foreach ($medicines as $item)
    <tr>
        <td>{{ $no++ }}</td>
        <td>{{ $item['name'] }}</td>
        <td>{{ $item['type'] }}</td>
        <td>{{ $item['price'] }}</td>
        <td>{{ $item['stock'] }}</td>
        <td class="d-flex justify-content-center">
            <a href="{{ route('medicine.edit', $item['id']) }}" class="btn btn-primary me-3">edit</a>
            <form action="{{ route('medicine.delete', $item['id']) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">hapus</button>
        </td>
    </tr>
    @endforeach
</tbody>
</table>
@endsection

