@extends('layouts.main')
@section('stuff')
<?php
$name_of_thing = "Category expense";
// use resources/views/app.blade.php;
 ?>


<div class="container">
        <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a class="nav-link active" href="{{ URL::to('Expense') }}">{{$name_of_thing}}s</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ URL::to('Expense/create') }}">Create an {{$name_of_thing}}</a>
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
            <td>Amount</td>
            {{-- <td>Categories id</td> --}}
            <td>Comments</td>
            <td>Creation timestamp</td>
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
                    {{ Form::submit('Delete this Expense', array('class' => 'btn btn-warning')) }}
                {{ Form::close() }} </a>
                <a class="btn btn-small btn-success" href="{{ URL::to('Expense/' . $value->id) }}">Show this {{$name_of_thing}}</a>

                <a class="btn btn-small btn-info" href="{{ URL::to('Expense/' . $value->id . '/edit') }}">Edit this {{$name_of_thing}}</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
@endsection
