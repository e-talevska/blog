@extends('layouts.app')

@section('content')
    <h1>Edit {{ $article->title }}</h1>

    {{ Form::model($article, ['url' => url('/articles/update', ['id' => $article->id]), 'files' => true]) }}
        @include('articles._form',['my_submit_button' => 'Edit Article'])
    {{ Form::close() }}

    @include('errors._errors')

@endsection

@section('footer')
    <script type="text/javascript">
        $(function () {
            $('#published_at').datetimepicker({

            });
            $("#tags_list").select2();
        });
    </script>
@endsection