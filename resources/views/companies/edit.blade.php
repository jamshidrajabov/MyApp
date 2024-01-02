@extends('layouts.app')
@section('title','Tahrirlash oynasi')
@section('content')
    <h1 class="text-center">Tashkilotlarni tahrirlash oynasi</h1>
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
            <form method="POST" action="{{route('companies.update',['company'=>$company->id])}}">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Tashkilot nomi</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$company->name}}">
                  </div>
                  <div class="mb-3">
                    <label for="address" class="form-label">Tashkilot manzili</label>
                    <input type="text" class="form-control" id="address" name="address" value="{{$company->address}}">
                  </div>
                <div class="mb-3">
                  <label for="phone" class="form-label">Tashkilot telefon raqami</label>
                  <input type="text" class="form-control" id="phone" name="phone" value="{{$company->phone}}">
                </div>
                <button type="submit" class="btn btn-primary">Tahrirlash</button>
              </form>
        </div>
    </div>
@endsection