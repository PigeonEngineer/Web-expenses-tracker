@extends('layouts.main')
@section('stuff')
<?php
$name_of_thing = "Category";
$from = trans('messages.from');
$to = trans('messages.to');
$ceiling = trans('messages.ceiling');
$edit = trans('messages.editExp');
 ?>


 <ul class="nav nav-tabs">
         <li class="nav-item">
           <a class="nav-link active" href="{{ URL::to('Category') }}">{{trans_choice('messages.allExp', 0)}}</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="{{ URL::to('Category/create') }}"> @lang('messages.addCat')</a>
         </li>
       </ul>
<br>
<h1>@lang('messages.editExp') {{ $Category->id }}</h1>

<!-- if there are creation errors, they will show here -->
{{ Html::ul($errors->all()) }}

{{ Form::model($Category, array('route' => array('Category.update', $Category->id), 'method' => 'PUT')) }}

 <div class="form-group">
      {!! Form::label('name', 'the name of the category') !!}
      {!! Form::text('name', $Category->name, ['class' => 'form-control']) !!}
  </div>

    {{ Form::submit($edit, array('class' => 'btn btn-outline-danger')) }}

{{ Form::close() }}


@endsection
