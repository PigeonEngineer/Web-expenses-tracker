@extends('layouts.main')
@section('stuff')
<?php
$name_of_thing = "User";
// use resources/views/app.blade.php;
 ?>

<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" href="{{ URL::to('UserManagement') }}">{{trans_choice('messages.allUsers', 0)}}</a>
  </li>
  
</ul>
<br>
<h1>@lang('messages.user') {{ $User->id }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $User->name }}</h2>
        <p>

          <strong>@lang('messages.mail'): </strong>{{$User->email}} <br>
        </p>
    </div>
@endsection
