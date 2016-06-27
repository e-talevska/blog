@extends('layouts.app')

@section('content')
    @foreach($tags as $tag)
        <div>
            <a href="/tags/list/{{ $tag->name }}">{{ $tag->name }}</a>
        </div>
    @endforeach
@endsection