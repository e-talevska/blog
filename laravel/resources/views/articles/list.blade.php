@extends('layouts.app')

@section('content')
    <h2>Articles <a href="{{ url("/articles/create") }}"><span class="glyphicon glyphicon-plus"></span></a></h2>
    <hr>
    @foreach($articles as $article)
        <article>
            @if($article->featured_image != "")
                <img src="/uploads/{{ $article->featured_image }}" alt="">
            @endif

            <h2>
                <a href="{{url('/articles',['slug' => $article->slug])}}"> {{$article->title}}</a>
                <a href="{{ url("/articles/edit", ['id'=>$article->id])}}"><span class="glyphicon glyphicon-pencil"></span></a>
            </h2>
            <div class="content">
                {{ $article->body }}
            </div>
        </article>

    @endforeach
@endsection