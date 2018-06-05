@extends('layouts.main')
@section('stuff')
<?php
$name_of_thing = "Budget";
$random = trans('messages.delete');
// use resources/views/app.blade.php;
 ?>


<div class="container">

    <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" href="{{ URL::to('Budget') }}">{{trans_choice('messages.budgets', 1)}}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ URL::to('Budget/create') }}">{{trans_choice('messages.add', 1)}}</a>
          </li>
        
      </ul>  

{{-- <nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('Budget') }}">{{$name_of_thing}}s</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('Budget') }}">View {{$name_of_thing}}s </a></li>
        <li><a href="{{ URL::to('Budget/create') }}">Create a {{$name_of_thing}}</a>
    </ul>
</nav> --}}
<br>
<h1>@lang('messages.budgets')</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>@lang('messages.from')</td>
            <td>@lang('messages.to')</td>
            <td>@lang('messages.amount')</td>
        </tr>
    </thead>
    <tbody>
    @foreach($budgets as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->fromDateTime }}</td>
            <td>{{ $value->ToDateTime }}</td>
            <td>{{ $value->amount}}</td>
            <td class="col-6">
                    <a class="btn btn-small ">
                {{ Form::open(array('url' => 'Budget/' . $value->id, 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit($random, array('class' => 'btn btn-warning')) }}
                {{ Form::close() }} </a>
                <a class="btn btn-small btn-success" href="{{ URL::to('Budget/' . $value->id) }}">@lang('messages.showExp')</a>

                <a class="btn btn-small btn-info" href="{{ URL::to('Budget/' . $value->id . '/edit') }}">@lang('messages.editExp')</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
@endsection
