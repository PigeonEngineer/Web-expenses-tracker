@extends('layouts.main')
@section('stuff')
<?php
$name_of_thing = "Expense";
// use resources/views/app.blade.php;
 ?>

<div class="container">
        <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a class="nav-link" href="{{ URL::to('Expense') }}">{{$name_of_thing}}s</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ URL::to('Expense/create') }}">Create a {{$name_of_thing}}</a>
                </li>
              </ul>

<h1>Showing {{ $Expense->id }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $Expense->amount }}</h2>
        <p>
            <strong>Creation Datetime:</strong> {{ $Expense->creationTimeStamp}}<br>
            <strong>Category:</strong> {{ $category }}
            <strong>Comments:</strong> {{ $Expense->comments}}
        </p>
    </div>

</div>
@endsection
