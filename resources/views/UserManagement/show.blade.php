@extends('layouts.main')
@section('stuff')
<?php
$name_of_thing = "User";
// use resources/views/app.blade.php;
 ?>

        <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a class="nav-link" href="{{ URL::to('UserManagement') }}">{{$name_of_thing}}s</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ URL::to('UserManagement/create') }}">Create a {{$name_of_thing}}</a>
                </li>
              </ul>
<br>
<h1>Showing {{ $User->id }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $User->name }}</h2>
        <p>

          <strong>Email: </strong>{{$User->email}} <br>
        </p>
    </div>
@endsection
