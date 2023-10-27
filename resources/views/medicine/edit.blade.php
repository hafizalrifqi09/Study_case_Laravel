@extends('layouts.tamplate')

@section('content')
    <form action="{{ route('medicine.update', $medicine['id'])}}" method="POST" class="car p-5d">
        @csrf
      @method('PATCH')  

      @if($errors->any())
        <div class="alert alert-danger p-3">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach 
        </ul>
        @endif

        <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-label">nama obat :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" value="{{ $medicine['name']}}">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="type" class="col-sm-2 col-form-label">jenis obat :</label>
            <div class="col-sm-10">
                <select class="form-select" id="type" name="type">
                    <option selected disable hidden>pilih</option>
                    <option value="tablet" {{ $medicine['type'] == 'tablet' ? 'selected' : '' }}>tablet</option>
                    <option value="sirup" {{ $medicine['type'] == 'sirup' ? 'selected' : '' }}>sirup</option>
                    <option value="kapsul" {{ $medicine['type'] == 'kapsul' ? 'selected' : '' }}>kapsul</option>
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="price" class="col-sm-2 col-form-label">harga obat :</label>
            <div class="col-sm-10">
                <input type ="number" class="form-control" id="price" name="price" value="{{ $medicine['price'] }}">
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3">ubah data</button>
    </form>
    @endsection