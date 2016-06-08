@extends('layouts.layout')

@section('content')
    <h2>Articles</h2>
    <hr>
    @foreach($articles as $article)
        <article>
            <h2><a href="{{url('/articles',['slug' => $article->slug])}}"> {{$article->title}}</a></h2>
            <div class="content">
                {{ $article->body }}
            </div>
        </article>

    @endforeach
@endsection