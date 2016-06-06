@extends('layouts.layout')

@section('content')

    <h1>About {{ $name }}</h1>
    @if(count($people))

    <h2>People I like</h2>
    <ul>
        @endif
        @foreach($people as $person)
            <li>{{ $person }}</li>
        @endforeach
    </ul>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum dui et tortor bibendum, vitae pretium nisi scelerisque. Nam ipsum nisl, suscipit in est sit amet, hendrerit dapibus lectus. Ut sit amet risus cursus, efficitur enim quis, facilisis enim. Nam hendrerit, tortor ornare vulputate viverra, diam nunc mattis urna, quis sagittis magna eros id velit. Donec aliquam elit eleifend elementum feugiat. Donec condimentum massa quis pretium volutpat. Nunc a dolor congue, molestie odio tristique, aliquet eros. Donec vehicula metus risus, eget cursus nibh cursus eget. Suspendisse rutrum pulvinar lacus in vulputate. Nulla facilisi. Duis non tellus at nisl auctor pellentesque non ac tortor. Proin vel ultrices neque, ut euismod nunc. Donec sodales facilisis feugiat.</p>
@endsection
