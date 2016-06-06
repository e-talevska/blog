@extends('layouts.layout')
@section('title')
    about
@endsection
@section('content')
    <h1>About {{ $name }} {{$last_name}}</h1>

    @if(count($people))

    <h2>People I like:</h2>
    <ul>
        @foreach($people as $person)
            <li>{{ $person }}</li>
        @endforeach
    </ul>
    @endif
@endsection
