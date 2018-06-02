<!DOCTYPE html>
<?php
$name_of_thing = "Budget";
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
        <a class="navbar-brand" href="{{ URL::to('Budget') }}">{{$name_of_thing}}s</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('Budget') }}">View {{$name_of_thing}}s </a></li>
        <li><a href="{{ URL::to('Budget/create') }}">Create a {{$name_of_thing}}</a>
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
            <td>fromDateTime</td>
            <td>toDateTime</td>
            <td>amount</td>
        </tr>
    </thead>
    <tbody>
    @foreach($budgets as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->fromDateTime }}</td>
            <td>{{ $value->ToDateTime }}</td>
            <td>{{ $value->amount}}</td>
            <td>

                {{ Form::open(array('url' => 'Budget/' . $value->id, 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete this Budget', array('class' => 'btn btn-warning')) }}
                {{ Form::close() }}
                <a class="btn btn-small btn-success" href="{{ URL::to('Budget/' . $value->id) }}">Show this {{$name_of_thing}}</a>

                <a class="btn btn-small btn-info" href="{{ URL::to('Budget/' . $value->id . '/edit') }}">Edit this {{$name_of_thing}}</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
</body>
</html>
