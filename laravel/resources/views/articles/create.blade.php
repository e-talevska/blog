@extends('layouts.layout')
 @section('content')
  <h1>Create Article</h1>

    {{ Form::open(['url' => url('/articles/save')]) }}
       @include('articles._form',['my_submit_button'=> 'Create Article'])
  {{ Form::close() }}


  @include('errors._errors')








     @endsection

@section('footer')

    <script type="text/javascript">
        $(function ()
        {
            $('#published_at').datetimepicker();
        });
    </script>



@endsection