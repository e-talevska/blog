@extends('layouts.app')

@section('content')
    <h1>Create Article</h1>

    {{ Form::open(['url' => url('/tags'), 'method' => 'POST']) }}
    <div class = "form-group">
        {{ Form::label("name", "Name") }}
        {{ Form::text("name", null , ["class" => "form-control"]) }}
    </div>
<div class= "form-group">
    {{ Form::submit("Create tag", ['class' => 'btn btn-primary']) }}
</div>
    {{ Form::close() }}

    @include('errors._errors')
    @endsection