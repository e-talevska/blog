@extends('layouts.app')

@section('content')
    <h1>Create Article</h1>

    {{ Form::open(['url' => url('/articles/save'), 'files' => true]) }}
        @include('articles._form', ['my_submit_button' => 'Create Article'])
    {{ Form::close() }}

    @include('errors._errors')

@endsection

@section('footer')
    <script type="text/javascript">
        $(function () {
            $('#published_at').datetimepicker();
            $("#tags_list").select2();
        });
    </script>
@endsection