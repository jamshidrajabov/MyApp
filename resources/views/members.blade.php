@extends('layouts.app')
@section('title','Jamoa azolari')
@section('content')
<h1>Jamoa azolari ro`yxati</h1>
    <ul>
        @forelse ($members as $member)
            <li>{{$member}}</li>
            @empty
            Hechqanday azo mavjud emas!
        @endforelse
    </ul>
@endsection
