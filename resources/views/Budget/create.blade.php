@extends('layouts.main')
@section('stuff')
<?php
use Carbon\Carbon;
use App\Budget;
use App\Http\Controllers\Redirect;
$name_of_thing = "Budget";
$from = trans('messages.from');
$to = trans('messages.to');
$ceiling = trans('messages.ceiling');
$create = trans('messages.add');
$Budget = new Budget( );
 ?>

<ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" href="{{ URL::to('Budget') }}">{{trans_choice('messages.catexpense', 1)}}</a>
    </li>
    
  </ul>  
{{-- <nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('Budget') }}">{{$name_of_thing}}s</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('Budget') }}">View {{$name_of_thing}}s </a></li>
        <li><a href="{{ URL::to('Budget/create') }}">Create a {{$name_of_thing}}</a>
    </ul>
</nav> --}}
<br>
<h1>@lang('messages.addBudget') </h1>

<!-- if there are creation errors, they will show here -->
{{ Html::ul($errors->all()) }}

{{ Form::open(array('url' => 'Budget')) }}


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
         {!! Form::label('amount', $ceiling ) !!}
         {!! Form::text('amount',null, ['class' => 'form-control']) !!} 
        

   </div>

    {!! Form::submit($create, array('class' => 'btn btn-outline-danger')) !!}

{!! Form::close() !!}

@endsection
