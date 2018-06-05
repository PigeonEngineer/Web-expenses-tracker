@extends('layouts.main')
@section('stuff')
<?php
$name_of_thing = "Budget";
// use resources/views/app.blade.php;
 ?>

        <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a class="nav-link" href="{{ URL::to('Budget') }}">{{$name_of_thing}}s</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ URL::to('Budget/create') }}">Create a {{$name_of_thing}}</a>
                </li>
              </ul>
<br>
<h1>Showing {{ $Budget->id }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $Budget->amount }}</h2>
        <p>
            <strong>from date time:</strong> {{ $Budget->fromDateTime }}<br>
            <strong>to date time:</strong> {{ $Budget->ToDateTime }}
        </p>
    </div>
@endsection
