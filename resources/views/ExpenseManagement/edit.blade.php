@extends('layouts.main')
@section('stuff')
<?php
$name_of_thing = "Expense";
$sum = trans('messages.amount');
$comment = trans('messages.comment');
$time = trans('messages.time');
$cat = trans('messages.cat');
$edit = trans('messages.editExp');
 ?>
        <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link active" href="{{ URL::to('ExpenseManagement') }}">{{trans_choice('messages.allExp', 1)}}</a>
            </li>

          </ul>

<br>
<h1>@lang('messages.editExp') {{ $Expense->id }}</h1>

<!-- if there are creation errors, they will show here -->
{{ Html::ul($errors->all()) }}

{{ Form::model($Expense, array('route' => array('ExpenseManagement.update', $Expense->id), 'method' => 'PUT')) }}


    <div class="form-group">
        {!! Form::label('amount', $sum) !!}
        {!! Form::text('amount',null, ['class' => 'form-control']) !!}

    </div>

    <div class="form-group">
         {!! Form::label('comments', $comment) !!}
         {!! Form::text('comments', $comment, ['class' => 'form-control']) !!}
     </div>

     <div class="form-group">
         {!! Form::label('creationTimeStamp', $time) !!}
         {{-- {!! Form::text('ToDateTime', 'budget end date') !!} --}}
          <input class="form-control" type="date" id = "creationTimeStamp" name="ToDateTime">
     </div>
     <div class="form-group">
     {{Form::label('categorys_id',$cat)}}
    {!! Form::select('categories', $categories, null,array('class' => 'form-control')) !!}
    </div>

    {{ Form::submit($edit, array('class' => 'btn btn-outline-danger')) }}

{{ Form::close() }}
@endsection
