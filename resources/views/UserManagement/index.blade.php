@extends('layouts.main')
@section('stuff')
<?php
$name_of_thing = "User";
$random = trans('messages.delete');
// use resources/views/app.blade.php;
 ?>


<div class="container">
        <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a class="nav-link active" href="{{ URL::to('UserManagement') }}">{{trans_choice('messages.allUsers', 1)}}</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ URL::to('UserManagement/create') }}">{{trans_choice('messages.addUsers', 1)}}</a>
                </li>
              </ul>

    {{-- <nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('Expense') }}">{{$name_of_thing}}s</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('Expense') }}">View {{$name_of_thing}}s </a></li>
        <li><a href="{{ URL::to('Expense/create') }}">Create a {{$name_of_thing}}</a>
    </ul>
</nav> --}}
<br>
<h1>{{trans_choice('messages.allUsers', 1)}}</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>@lang('messages.name')</td>
            <td>@lang('messages.mail')</td>
            <td>@lang('messages.admin')</td>
            <td>@lang('messages.time')</td>
        </tr>
    </thead>
    <tbody>
    @foreach($users as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->email }}</td>
            <td>{{ $value->is_admin}}</td>
            <td>{{ $value->created_at}}</td>
            <td class="col-6">
                    <a class="btn btn-small ">
                {{ Form::open(array('url' => 'UserManagement/' . $value->id, 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit($random, array('class' => 'btn btn-warning')) }}
                {{ Form::close() }} </a>
                <a class="btn btn-small btn-success" href="{{ URL::to('UserManagement/' . $value->id) }}">@lang('messages.showExp')</a>

                <a class="btn btn-small btn-info" href="{{ URL::to('UserManagement/' . $value->id . '/edit') }}">@lang('messages.editExp')</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
@endsection
