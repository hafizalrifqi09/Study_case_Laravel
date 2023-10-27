@extends('layouts.tamplate')

@section('content')
    <form action="{{ route('medicine.store')}}" method="POST" class="car p-5d">
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
            <label for="name" class="col-sm-2 col col-form-label">nama obat :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="type" class="col-sm-2 col col-form-label">jenis obat :</label>
            <div class="col-sm-10">
                <select class="form-select" id="type" name="type">
                    <option selected disable hidden>pilih</option>
                    <option value="tablet">tablet</option>
                    <option value="sirup">sirup</option>
                    <option value="kapsul">kapsul</option>
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="price" class="col-sm-2 col col-form-label">harga obat :</label>
            <div class="col-sm-10">
                <input type ="number" class="form-control" id="price" name="price">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="stock" class="col-sm-2 col col-form-label">stock tersedia :</label>
            <div class="col-sm-10">
                <input type ="number" class="form-control" id="stock" name="stock">
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3">tambah data</button>
    </form>
    @endsection
