@extends('layouts.main')
@section('stuff')
<?php
$name_of_thing = "User";
$name = trans('messages.name');
$email = trans('messages.mail');
$admin= trans('messages.admin');
$edit = trans('messages.editExp');
 ?>


<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" href="{{ URL::to('UserManagement') }}">{{trans_choice('messages.allUsers', 1)}}</a>
  </li>
  
</ul>
<br>
<h1>@lang('messages.editExp') {{ $user->id }}</h1>

<!-- if there are creation errors, they will show here -->
{{ Html::ul($errors->all()) }}

{{ Form::model($user, array('route' => array('UserManagement.update', $user->id), 'method' => 'PUT')) }}


<div class="form-group">
    {!! Form::label('name', $name) !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}

</div>

<div class="form-group">
     {!! Form::label('email', $email) !!}
     {!! Form::email('email', $email, ['class' => 'form-control']) !!}
 </div>
<div class="form-group row">
 {{Form::label('is_admin',$admin)}}
 <input type="checkbox" class="form-check-input" id="exampleCheck1">
 {{-- {{ Form::checkbox('is_admin', 1, true) }} --}}
</div>

    {{ Form::submit($edit, array('class' => 'btn btn-outline-danger')) }}

{{ Form::close() }}


@endsection
