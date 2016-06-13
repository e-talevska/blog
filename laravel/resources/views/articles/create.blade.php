@extends('layouts.layout')

@section('content')
    <h1>Create Article</h1>

    {{ Form::open (['url' => url('/articles/save')]) }}
        <div class="form-group">
            {{ Form::label('title', 'Title') }}
            {{ Form::text('title', null, ['class'=> 'form-control']) }}
        </div>

    <div class="form-group">
        {{ Form::label('body', 'Content') }}
        {{ Form::textarea('body', null, ['class'=> 'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::label('slug', 'Slug') }}
        {{ Form::text('slug', null, ['class'=> 'form-control']) }}
        </div>

    <div class="form-group" style="position:relative;">
        {{ Form::label('published_at', 'Published') }}
        {{ Form::text('published_at', null, ['class'=> 'form-control']) }}
    </div>

    <div class="form-group">
    {{ Form::submit('Create Article', null, ['class'=> 'btn btn-primary']) }}
    </div>
    {{ Form::close() }}

@endsection

@section('footer')
    <script type="text/javascript">
        $(function () {
            $('#published_at').datetimepicker();
        });
    </script>
@endsection