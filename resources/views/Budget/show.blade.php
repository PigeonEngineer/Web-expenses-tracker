@extends('layouts.main')
@section('stuff')
<?php
$name_of_thing = "Budget";
// use resources/views/app.blade.php;
 ?>

<ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" href="{{ URL::to('Budget') }}">{{trans_choice('messages.catexpense', 0)}}</a>
    </li>
    
  </ul>
<br>
<h1>@lang('messages.budget') {{ $Budget->id }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $Budget->amount }}</h2>
        <p>
            <strong>@lang('messages.from'):</strong> {{ $Budget->fromDateTime }}<br>
            <strong>@lang('messages.to'):</strong> {{ $Budget->ToDateTime }}
        </p>
    </div>
@endsection
