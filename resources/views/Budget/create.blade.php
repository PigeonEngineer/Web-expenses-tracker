<!DOCTYPE html>
<?php
use Carbon\Carbon;
use App\Budget;
use App\Http\Controllers\Redirect;
$name_of_thing = "Budget";
$Budget = new Budget( );
 ?>
<html>
<head>
    <title>TODO:change my name</title>
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

<h1>Create a {{$name_of_thing}}</h1>

<!-- if there are creation errors, they will show here -->
{{ Html::ul($errors->all()) }}

{{ Form::open(array('url' => 'Budget')) }}


    <div class="form-group">
         {!! Form::label('fromDateTime', 'date this budget should start') !!}
         {{-- {!! Form::text('fromDateTime', 'budget start date') !!} --}}
         <input type="date" id = "fromDateTime" name="fromDateTime">
     </div>

     <div class="form-group">
         {!! Form::label('ToDateTime', 'date this budget should end') !!}
         {{-- {!! Form::text('ToDateTime', 'budget end date') !!} --}}
          <input type="date" id = "ToDateTime" name="ToDateTime">
     </div>

     <div class="form-group">
         {!! Form::label('amount', 'budget ceiling') !!}
         {!! Form::text('amount') !!}

   </div>

    {!! Form::submit('Create the Budget!', array('class' => 'btn btn-primary')) !!}

{!! Form::close() !!}

</div>
</body>
</html>
