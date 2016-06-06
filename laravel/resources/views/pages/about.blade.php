@extends('layouts.layout')

@section('title')
    About
@endsection

@section('content')
    <h1>About {{ $name  }} {{ $lastName  }} </h1>

    <?php
        if(count($people)){
                echo "<h2>People I like:</h2>";
                echo "<ul>";
                    foreach($people as $person) {
                        echo "<li>".$person."</li>";
                    }
                echo "</ul>";
        }
    ?>

    @if(count($people))
        <h2>People I like:</h2>
        <ul>
            @foreach($people as $person)
                <li>{{ $person }}</li>
            @endforeach
        </ul>
    @endif
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id pulvinar nibh, a pharetra risus. In nec sapien ac diam venenatis fringilla. Sed in urna sed eros gravida fringilla. Curabitur quis gravida dolor. Donec semper, orci vel tincidunt dapibus, quam massa semper lacus, eu tincidunt enim nunc vitae eros. Sed rhoncus suscipit euismod. Curabitur ut euismod tortor. Sed magna metus, blandit nec ornare id, dapibus quis est. Aliquam porta rhoncus nibh at iaculis. Nullam sagittis leo nisl, eu sodales ante faucibus vel. Cras vitae arcu ante. Quisque pellentesque enim quis turpis elementum, et tincidunt neque varius. Curabitur in lacus augue.</p>
@endsection