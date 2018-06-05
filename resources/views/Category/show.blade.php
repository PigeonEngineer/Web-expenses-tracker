@extends('layouts.main')
@section('stuff')
<?php
$name_of_thing = trans_choice('messages.catexpense', 0);
$random = trans('messages.delete');

// use resources/views/app.blade.php;
 ?>


<div class="container">
        <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a class="nav-link active" href="{{ URL::to('Expense') }}">{{trans_choice('messages.allExp', 0)}}</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ URL::to('Expense/create') }}"> @lang('messages.addCat')</a>
                </li>
              </ul>
<br>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
{{-- <h1>Showing {{ $Category->id }}</h1> --}}
<h1>{{ $Category->name }}</h1>
    {{-- <div class="jumbotron text-center">
        <h2>{{ $Category->name }}</h2>
        <p>


        </p>
    </div> --}}
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            {{-- <td>ID</td> --}}
            <td> @lang('messages.amount')</td>
            {{-- <td>Categories id</td> --}}
            <td>@lang('messages.comment')</td>
            <td>@lang('messages.time')</td>
        </tr>
    </thead>
    <tbody>
    @foreach($expenses as $key => $value)
        <tr>
            {{-- <td>{{ $value->id }}</td> --}}
            <td>{{ $value->amount }}</td>
            {{-- <td>{{ $value->categorys_id }}</td> --}}
            <td>{{ $value->comments}}</td>
            <td>{{ $value->creationTimeStamp}}</td>
            <td class="col-8">
                    <a class="btn btn-small ">
                {{ Form::open(array('url' => 'Expense/' . $value->id, 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit($random, array('class' => 'btn btn-outline-danger')) }}
                {{ Form::close() }} </a>
                <a class="btn btn-small btn-outline-danger" href="{{ URL::to('Expense/' . $value->id) }}"> @lang('messages.showExp')</a>

                <a class="btn btn-small btn-outline-danger" href="{{ URL::to('Expense/' . $value->id . '/edit') }}">@lang('messages.editExp')</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
@endsection
