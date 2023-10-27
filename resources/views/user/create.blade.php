@extends('layouts.tamplate')

@section('content')
    <form action="{{ route('user.store')}}" method="POST" class="car p-5d">
        @csrf

        @if(Session::get('success'))
        <div class="alert alert-success"> {{ Session::get('success') }} </div>
        @endif
        @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach 
        </ul>
        @endif

        <div class="mb-3 row">
            <label for="name" class="col-sm-2 col col-form-label">nama :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="email" class="col-sm-2 col col-form-label">email :</label>
            <div class="col-sm-10">
                <input type ="text" class="form-control" id="email" name="email">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="role" class="col-sm-2 col col-form-label">Tipe Pengguna :</label>
            <div class="col-sm-10">
                <select class="form-select" id="role" name="role">
                    <option selected disable hidden>pilih</option>
                    <option value="admin">admin</option>
                    <option value="cashier">cashier</option>
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3">tambah data</button>
    </form>
    @endsection
