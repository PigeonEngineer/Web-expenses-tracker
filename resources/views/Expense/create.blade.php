<!DOCTYPE html>
<?php
use Carbon\Carbon;
use App\Budget;
use App\Expense;
use App\Http\Controllers\Redirect;
$name_of_thing = "Expense";
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
          <a class="navbar-brand" href="{{ URL::to('Expense') }}">{{$name_of_thing}}s</a>
      </div>
      <ul class="nav navbar-nav">
          <li><a href="{{ URL::to('Expense') }}">View {{$name_of_thing}}s </a></li>
          <li><a href="{{ URL::to('Expense/create') }}">Create a {{$name_of_thing}}</a>
      </ul>
  </nav>

<h1>Create a {{$name_of_thing}}</h1>

<!-- if there are creation errors, they will show here -->
{{ Html::ul($errors->all()) }}

{{ Form::open(array('url' => 'Expense')) }}


{{-- <td>Categories id</td> --}}
{{-- <td>Creation timestamp</td> --}}
    <div class="form-group">
        {!! Form::label('amount', 'expense amount') !!}
        {!! Form::text('amount') !!}

    </div>

    <div class="form-group">
         {!! Form::label('comments', 'Comments') !!}
         {!! Form::text('comments', 'Comments') !!}
     </div>
     <div class="form-group">
     {{Form::label('categorys_id','Category name')}}
    {!! Form::select('categories', $categories, null,array('class' => 'form-control')) !!}
  </div>


    {!! Form::submit('Create the Budget!', array('class' => 'btn btn-primary')) !!}

{!! Form::close() !!}

</div>
</body>
</html>
