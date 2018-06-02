@extends('layouts.main')
@section('stuff')
<?php
$name_of_thing = "Expense";
 ?>
<div class="container">
        <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a class="nav-link" href="{{ URL::to('Expense') }}">{{$name_of_thing}}s</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ URL::to('Expense/create') }}">Create a {{$name_of_thing}}</a>
                </li>
              </ul>
  
<br>
<h1>Edit {{ $Expense->id }}</h1>

<!-- if there are creation errors, they will show here -->
{{ Html::ul($errors->all()) }}

{{ Form::model($Expense, array('route' => array('Expense.update', $Expense->id), 'method' => 'PUT')) }}


    <div class="form-group">
        {!! Form::label('amount', 'Expense amount:') !!}
        {!! Form::text('amount',null, ['class' => 'form-control']) !!}

    </div>

    <div class="form-group">
         {!! Form::label('comments', 'Comments: ') !!}
         {!! Form::text('comments', 'Comments', ['class' => 'form-control']) !!}
     </div>

     <div class="form-group">
         {!! Form::label('creationTimeStamp', 'Timestamp:') !!}
         {{-- {!! Form::text('ToDateTime', 'budget end date') !!} --}}
          <input class="form-control" type="date" id = "creationTimeStamp" name="ToDateTime">
     </div>
     <div class="form-group">
     {{Form::label('categorys_id','Category name')}}
    {!! Form::select('categories', $categories, null,array('class' => 'form-control')) !!}
    </div>

    {{ Form::submit('Edit the Expense!', array('class' => 'btn btn-outline-danger')) }}

{{ Form::close() }}

</div>
@endsection
