
<?php
$name_of_thing = "Expense";
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>Look! I'm CRUDding</title>
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

<h1>Edit {{ $Expense->id }}</h1>

<!-- if there are creation errors, they will show here -->
{{ Html::ul($errors->all()) }}

{{ Form::model($Expense, array('route' => array('Expense.update', $Expense->id), 'method' => 'PUT')) }}


    <div class="form-group">
        {!! Form::label('amount', 'expense amount') !!}
        {!! Form::text('amount') !!}

    </div>

    <div class="form-group">
         {!! Form::label('comments', 'Comments') !!}
         {!! Form::text('comments', 'Comments') !!}
     </div>

     <div class="form-group">
         {!! Form::label('creationTimeStamp', 'Timestamp:') !!}
         {{-- {!! Form::text('ToDateTime', 'budget end date') !!} --}}
          <input type="date" id = "creationTimeStamp" name="ToDateTime">
     </div>
     <div class="form-group">
     {{Form::label('categorys_id','Category name')}}
    {!! Form::select('categories', $categories, null,array('class' => 'form-control')) !!}
    </div>

    {{ Form::submit('Edit the Expense!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>
