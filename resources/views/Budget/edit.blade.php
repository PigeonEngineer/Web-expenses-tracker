
<?php
$name_of_thing = "Budget";
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
          <a class="navbar-brand" href="{{ URL::to('Budget') }}">{{$name_of_thing}}s</a>
      </div>
      <ul class="nav navbar-nav">
          <li><a href="{{ URL::to('Budget') }}">View {{$name_of_thing}}s </a></li>
          <li><a href="{{ URL::to('Budget/create') }}">Create a {{$name_of_thing}}</a>
      </ul>
  </nav>

<h1>Edit {{ $Budget->id }}</h1>

<!-- if there are creation errors, they will show here -->
{{ Html::ul($errors->all()) }}

{{ Form::model($Budget, array('route' => array('Budget.update', $Budget->id), 'method' => 'PUT')) }}


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

    {{ Form::submit('Edit the budget!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>
