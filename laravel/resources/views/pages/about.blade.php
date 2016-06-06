@extends('layouts.layout')

@section('title')
    About
@endsection

@section('content')
    <h1>About {{$name}} {{$lastName}} </h1>

    @if(count($people))
    <h2>People I like:</h2>
    <ul>
        @foreach($people as $person)
            <li>{{$person}}</li>
        @endforeach
    </ul>
    @endif
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla rutrum velit magna, eu suscipit ipsum aliquet ac. Aenean dignissim scelerisque ex a tincidunt. Aliquam ac finibus ex. Nam vel quam consequat, pellentesque metus vel, aliquam orci. Praesent hendrerit augue id metus fringilla lacinia. Phasellus molestie massa nec elit auctor finibus. Proin tempor lacinia urna, ultrices ultricies est finibus a. Vivamus vehicula tempus justo et semper. Vestibulum malesuada, mauris eu fermentum pulvinar, velit lacus condimentum lorem, vitae vehicula orci metus quis ante. Proin faucibus efficitur neque, in malesuada tortor condimentum vel. Donec sed dui vel lorem viverra eleifend at ut massa. Maecenas consectetur vehicula ex, non dignissim justo egestas eget.</p>
@endsection