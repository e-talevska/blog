@extends('layouts.app')

@section('content')
    <h2>{{ $article->title  }}</h2>
    <hr>
    <div>{{ $article->body  }}</div>
    @if($article->tags()->exists())
        <h5>Tags:</h5>
        <ul>
            @foreach($article->tags as $tag)
                <li>{{ $tag->name }}</li>
            @endforeach
        </ul>
    @endif
@endsection