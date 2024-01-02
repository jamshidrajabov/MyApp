@extends('layouts.app')
@section('title','Kompaniyalar ro`yxati')
@section('content')
    <h1 class="text-center">Bu kompaniyalar haqida ma'lumot</h1>
    <br>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="{{route('companies.create')}}"><button class="btn btn-success" type="button">Ma`lumot qo`shish</button></a>
      </div>
    <br>
          <table class="table table-bordered">
        <thead>
           <tr>
            <th>T/R</th>
            <th>Kompaniya nomi</th>
            <th>Manzili</th>
            <th>Telefon raqami</th>
            <th>Amallar</th>
           </tr>
        </thead>
        <tbody>
            @foreach ($companies as $company)
           <tr>
                <td>{{($companies->currentpage()-1)*$companies->perpage()+$loop->index+1}}</td>
                <td><a class="fw-bold link-offset-2 link-underline link-underline-opacity-0 fs-5" href="{{route('companies.show',['company'=>$company->id])}}">{{$company->name}}</a></td>
                <td>{{$company->address}}</td>
                <td>{{$company->phone}}</td>
                <td>
                  <a href="{{route('companies.edit',['company'=>$company->id])}}"><i class="bi bi-pen btn btn-primary mb-1"></i></a>
                  <form action="{{route('companies.destroy',['company'=>$company->id])}}"method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger mb-1" type="submit"><i class="bi bi-trash-fill"></i></button>
                  </form>
                </td>
                
           </tr>
            @endforeach
            
        </tbody>
    </table>
    {{$companies->links()}}
@endsection
