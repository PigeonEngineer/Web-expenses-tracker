@extends('layouts.main')
@section('stuff')
<?php
$name_of_thing = "BudgetManagement";
 ?>


        <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a class="nav-link" href="{{ URL::to('BudgetManagement') }}">{{$name_of_thing}}s</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ URL::to('BudgetManagement/create') }}">Create a {{$name_of_thing}}</a>
                </li>
              </ul>
<br>
<h1>Edit {{ $Budget->id }}</h1>

<!-- if there are creation errors, they will show here -->
{{ Html::ul($errors->all()) }}

{{ Form::model($Budget, array('route' => array('BudgetManagement.update', $Budget->id), 'method' => 'PUT')) }}


    <div class="form-group">
         {!! Form::label('fromDateTime', 'Start date: ') !!}
         {{-- {!! Form::text('fromDateTime', 'budget start date') !!} --}}
         <input class="form-control" type="date" id = "fromDateTime" name="fromDateTime" class="form-group">
     </div>

     <div class="form-group">
         {!! Form::label('ToDateTime', 'End date: ') !!}
         {{-- {!! Form::text('ToDateTime', 'budget end date') !!} --}}
         <input class="form-control" type="date" id = "ToDateTime" name="ToDateTime">
     </div>

     <div class="form-group">
         {!! Form::label('amount', 'budget ceiling') !!}
         {!! Form::text('amount' ,null, ['class' => 'form-control']) !!}

   </div>

    {{ Form::submit('Edit the budget!', array('class' => 'btn btn-outline-danger')) }}

{{ Form::close() }}


@endsection
