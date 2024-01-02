@extends('layouts.app')
@section('title','Tashkilot haqida malumot oynasi')
@section('content')
    <h1 class="text-center">{{$company->name}} nomli tashkilot haqida ma`lumot</h1>
    <br>
    <div class="row justify-content-center">
        <a class="col-md-6 mb-3" href="{{route('companies.index')}}">Orqaga</a>
    </div>
    
    <div class="row justify-content-center">
                
        <div class="col-md-6">
            <table class="table table-hover">
                <tr class="table-primary">
                    <th>Tashkilot nomi</th>
                    <td>{{$company->name}}</td>
                </tr>
                <tr class="table-warning">
                    <th>Tashkilot manzili</th>
                    <td>{{$company->address}}</td>
                </tr>
                <tr class="table-danger">
                    <th>Tashkilot telefon raqami</th>
                    <td>{{$company->phone}}</td>
                </tr>
                <tr class="table-dark">
                    <th>Tashkilot qo`shilgan sana</th>
                    <td>{{$company->created_at}}</td>
                </tr>
            </table>
        </div>

    </div>
    
    
@endsection