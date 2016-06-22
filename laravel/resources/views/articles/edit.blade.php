@extends('layouts.layout')

@section('content')
    <h1>Edit {{ $article->title }}</h1>

    {{ Form::model($article, ['url' => url('/articles/update', ['id' => $article->id])]) }}
        @include('articles._form',['my_submit_button' => 'Edit Article'])
    {{ Form::close() }}

    @include('errors._errors')

@endsection

@section('footer')
    <script type="text/javascript">
        $(function () {
            $('#published_at').datetimepicker( {
                defaultDate: "<?php echo $article->published_at->format("m/d/Y H:i A"); ?>"
            }});
        });
    </script>
@endsection

