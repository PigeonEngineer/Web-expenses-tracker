@extends('layouts.main')
@section('stuff')
<?php
use Carbon\Carbon;
use App\Budget;
use App\Expense;
use App\Http\Controllers\Redirect;
$name_of_thing = "Expense";
$sum = trans('messages.amount');
$comment = trans('messages.comment');
$time = trans('messages.time');
$cat = trans('messages.cat');
$edit = trans('messages.addCat');
 ?>

<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" href="{{ URL::to('Expense') }}">{{trans_choice('messages.catexpense', 1)}}</a>
  </li>
  
</ul> 

<br>
<h1>@lang('messages.addCat')</h1>

<!-- if there are creation errors, they will show here -->
{{ Html::ul($errors->all()) }}

{{ Form::open(array('url' => 'Expense')) }}


{{-- <td>Categories id</td> --}}
{{-- <td>Creation timestamp</td> --}}
    <div class="form-group">
        {!! Form::label('amount', $sum) !!}
        {!! Form::text('amount', null, ['class' => 'form-control']) !!}

    </div>

    <div class="form-group">
         {!! Form::label('comments', $comment) !!}
         {!! Form::text('comments', 'Comments', ['class' => 'form-control']) !!}
     </div>
     <div class="form-group">
     {{Form::label('categorys_id', $cat)}}
    {!! Form::select('categories', $categories, null, array('class' => 'form-control')) !!}
  </div>


    {!! Form::submit($edit, array('class' => 'btn btn-outline-danger')) !!}

{!! Form::close() !!}


@endsection
