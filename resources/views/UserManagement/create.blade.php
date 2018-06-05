@extends('layouts.main')
@section('stuff')
<?php
use Carbon\Carbon;
use App\Budget;
use App\Expense;
use App\Http\Controllers\Redirect;
$name_of_thing = "User";
 ?>

        <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a class="nav-link" href="{{ URL::to('UserManagement') }}">{{$name_of_thing}}s</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="{{ URL::to('UserManagement/create') }}">Create a {{$name_of_thing}}</a>
                </li>
              </ul>

<br>
<h1>Create a {{$name_of_thing}}</h1>

<!-- if there are creation errors, they will show here -->
{{ Html::ul($errors->all()) }}

{{ Form::open(array('url' => 'UserManagement')) }}
    <div class="form-group">
        {!! Form::label('name', 'Name: ') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}

    </div>

    <div class="form-group">
         {!! Form::label('email', 'Email: ') !!}
         {!! Form::email('email', 'Email', ['class' => 'form-control']) !!}
     </div>
     <div class="form-group">
       {!! Form::label('password', 'Password: ') !!}
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
     {{Form::label('is_admin','Is Admin: ')}}
     {{ Form::checkbox('is_admin', 1, true) }}
   </div>



    {!! Form::submit('Create the User!', array('class' => 'btn btn-outline-danger')) !!}

{!! Form::close() !!}


@endsection
