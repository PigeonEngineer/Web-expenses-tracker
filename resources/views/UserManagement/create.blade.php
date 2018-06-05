@extends('layouts.main')
@section('stuff')
<?php
use Carbon\Carbon;
use App\Budget;
use App\Expense;
use App\Http\Controllers\Redirect;
$name_of_thing = "User";
$name = trans('messages.name');
$email = trans('messages.mail');
$pass = trans('messages.password');
$admin = trans('messages.admin');
$create = trans('messages.add');
 ?>

<ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" href="{{ URL::to('UserManagement') }}">{{trans_choice('messages.allUsers', 1)}}</a>
    </li>
    
  </ul> 

<br>
<h1>@lang('messages.addUsers')</h1>

<!-- if there are creation errors, they will show here -->
{{ Html::ul($errors->all()) }}

{{ Form::open(array('url' => 'UserManagement')) }}
    <div class="form-group">
        {!! Form::label('name', $name) !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}

    </div>

    <div class="form-group">
         {!! Form::label('email', $email) !!}
         {!! Form::email('email', $email, ['class' => 'form-control']) !!}
     </div>
     <div class="form-group">
       {!! Form::label('password', $pass) !!}
       {!! Form::password('password',  ['class' => 'form-control']) !!}
         {{-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

         <div class="col-md-6">
             <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

             @if ($errors->has('password'))
                 <span class="invalid-feedback">
                     <strong>{{ $errors->first('password') }}</strong>
                 </span>
             @endif
         </div> --}}
     </div>
   <div class="form-group row">
     {{Form::label('is_admin', $admin)}}
     {{-- {{ Form::checkbox('is_admin', 1, true) }} --}}
     <input type="checkbox" class="form-check-input" id="exampleCheck1">
   </div>



    {!! Form::submit($create, array('class' => 'btn btn-outline-danger')) !!}

{!! Form::close() !!}


@endsection
