@extends('layouts.tamplate')

@section('content')
    <form action="{{ route('user.update', $User['id'])}}" method="POST" class="car p-5d">
        @csrf
      @method('PATCH')  

      @if($errors->any())
        <div class=>"alert alert-danger p-3">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach 
        </ul>
        @endif

        <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-label">nama :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" value="{{ $User['name']}}">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="role" class="col-sm-2 col-form-label">Tipe pengguna :</label>
            <div class="col-sm-10">
                <select class="form-select" id="role" name="role">
                    <option selected disable hidden>pilih</option>
                    <option value="admin" {{ $User['role'] == 'admin' ? 'selected' : '' }}>admin</option>
                    <option value="cashier" {{ $User['role'] == 'cashier' ? 'selected' : '' }}>kasir</option>
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="price" class="col-sm-2 col-form-label">email :</label>
            <div class="col-sm-10">
                <input type ="email" class="form-control" id="email" name="email">
            </div>
        </div>
            <div class="mb-3 row">
                <label for="password" class="col-sm-2 col-form-label">Ubah Password:</label>
                <div class="col-sm-10">
                    <input type ="password" class="form-control" id="password" name="password">
                </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3">ubah data</button>
    </form>
    @endsection
