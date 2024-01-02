@extends('layouts.app')
@section('title','Qo`shish sahifasi')
@section('content')
    <h1 class="text-center">Ma`lumot qo`shish sahifasi</h1>
    <a class="col-md-6 mb-4" href="{{route('companies.index')}}">Orqaga</a>
    <br>
    <br>
    <div class="row">
        <div class="col-md-6">
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
            <form method="POST" action="{{route('companies.store')}}">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Tashkilot nomi</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
                  </div>
                  <div class="mb-3">
                    <label for="address" class="form-label">Tashkilot manzili</label>
                    <input type="text" class="form-control" id="address" name="address" value="{{old('address')}}">
                  </div>
                <div class="mb-3">
                  <label for="phone" class="form-label">Tashkilot telefon raqami</label>
                  <input type="text" class="form-control" id="phone" name="phone" value="{{old('phone')}}">
                </div>
                <button type="submit" class="btn btn-primary">Qo`shish</button>
              </form>
        </div>
    </div>
@endsection