@extends('layouts.main')
@section('stuff')
<?php
$name_of_thing = "Budget";
$from = trans('messages.from');
$to = trans('messages.to');
$ceiling = trans('messages.ceiling');
$edit = trans('messages.editExp');
 ?>


<ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" href="{{ URL::to('BudgetManagement') }}">{{trans_choice('messages.budgets', 1)}}</a>
    </li>
    
  </ul> 
<br>
<h1>@lang('messages.editExp') {{ $Budget->id }}</h1>

<!-- if there are creation errors, they will show here -->
{{ Html::ul($errors->all()) }}

{{ Form::model($Budget, array('route' => array('Budget.update', $Budget->id), 'method' => 'PUT')) }}


    <div class="form-group">
         {!! Form::label('fromDateTime', $from) !!}
         {{-- {!! Form::text('fromDateTime', 'budget start date') !!} --}}
         <input class="form-control" type="date" id = "fromDateTime" name="fromDateTime" class="form-group">
     </div>

     <div class="form-group">
         {!! Form::label('ToDateTime', $to) !!}
         {{-- {!! Form::text('ToDateTime', 'budget end date') !!} --}}
         <input class="form-control" type="date" id = "ToDateTime" name="ToDateTime">
     </div>

     <div class="form-group">
         {!! Form::label('amount', $ceiling) !!}
         {!! Form::text('amount' ,null, ['class' => 'form-control']) !!}

   </div>

    {{ Form::submit($edit, array('class' => 'btn btn-outline-danger')) }}

{{ Form::close() }}


@endsection
