@extends('layouts.main')
@section('stuff')
<?php
$name_of_thing = "Expense";
// use resources/views/app.blade.php;
 ?>

        <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a class="nav-link active" href="{{ URL::to('ExpenseManagement') }}">{{trans_choice('messages.allExp', 0)}}</a>
                </li>

              </ul>
<br>
<h1>@lang('messages.expID') {{ $Expense->id }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $Expense->amount }}</h2>
        <p>
            <strong>@lang('messages.time'):</strong> {{ $Expense->creationTimeStamp}}<br>
            <strong>@lang('messages.cat')</strong> {{ $category }}
            <strong>@lang('messages.comment'):</strong> {{ $Expense->comments}}
        </p>
    </div>


@endsection
