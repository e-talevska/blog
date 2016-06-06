@extends('layouts.layout')

@section('title')
   About
@endsection


@section ('content')
    <h1>About {{ $name }} {{ $last_name }}</h1>

    @if(count($people))
    <h2>People I like</h2>
        <ul>
            @foreach($people as $person)
                <li>{{ $person }}</li>
            @endforeach
        </ul>
    @endif
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam non urna iaculis, lobortis dolor eu, maximus sapien. Phasellus at ipsum ut nulla consectetur posuere. Aenean convallis, arcu ut interdum finibus, ligula quam fermentum erat, a aliquet magna urna vel dolor. Duis porta, lectus sit amet elementum aliquet, ex mauris efficitur tellus, quis ornare urna ante in nisi. Ut semper a ligula vitae hendrerit. Vivamus ac volutpat metus. Nulla tristique erat urna, tempor hendrerit turpis condimentum nec. Vivamus et tempor elit. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin ut condimentum justo. Suspendisse quis metus quis ipsum aliquam malesuada. Nulla varius nunc risus, vel elementum lorem feugiat efficitur. Etiam vehicula risus eu facilisis volutpat. In tincidunt eget dolor sit amet consectetur. Nam lobortis efficitur sagittis.</p>
@endsection