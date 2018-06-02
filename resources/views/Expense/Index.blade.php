<!DOCTYPE html>
<?php
$name_of_thing = "Expense";
// use resources/views/app.blade.php;
 ?>

<html>
<head>
    <title>CHANGE MY NAME</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('Expense') }}">{{$name_of_thing}}s</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('Expense') }}">View {{$name_of_thing}}s </a></li>
        <li><a href="{{ URL::to('Expense/create') }}">Create a {{$name_of_thing}}</a>
    </ul>
</nav>

<h1>All the {{$name_of_thing}}s</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Amount</td>
            <td>Categories id</td>
            <td>Comments</td>
            <td>Creation timestamp</td>
        </tr>
    </thead>
    <tbody>
    @foreach($expenses as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->amount }}</td>
            <td>{{ $value->categorys_id }}</td>
            <td>{{ $value->comments}}</td>
            <td>{{ $value->creationTimeStamp}}</td>
            <td>

                {{ Form::open(array('url' => 'Expense/' . $value->id, 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete this Expense', array('class' => 'btn btn-warning')) }}
                {{ Form::close() }}
                <a class="btn btn-small btn-success" href="{{ URL::to('Expense/' . $value->id) }}">Show this {{$name_of_thing}}</a>

                <a class="btn btn-small btn-info" href="{{ URL::to('Expense/' . $value->id . '/edit') }}">Edit this {{$name_of_thing}}</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
</body>
</html>
