@extends('layouts.layout')

@section('content')

     <h2>{{ $article->title }}</h2>
     <hr>
    <div>{{ $article->body }}</div>
    @endsection