@extends('layouts.main')
@section('stuff')
<?php
$name_of_thing = "User";
 ?>


        <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a class="nav-link" href="{{ URL::to('UserManagement') }}">{{$name_of_thing}}s</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ URL::to('UserManagement/create') }}">Create a {{$name_of_thing}}</a>
                </li>
              </ul>
<br>
<h1>Edit {{ $user->id }}</h1>

<!-- if there are creation errors, they will show here -->
{{ Html::ul($errors->all()) }}

{{ Form::model($user, array('route' => array('UserManagement.update', $user->id), 'method' => 'PUT')) }}


<div class="form-group">
    {!! Form::label('name', 'Name: ') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}

</div>

<div class="form-group">
     {!! Form::label('email', 'Email: ') !!}
     {!! Form::email('email', 'Email', ['class' => 'form-control']) !!}
 </div>
<div class="form-group row">
 {{Form::label('is_admin','Is Admin: ')}}
 {{ Form::checkbox('is_admin', 1, true) }}
</div>

    {{ Form::submit('Edit the User!', array('class' => 'btn btn-outline-danger')) }}

{{ Form::close() }}


@endsection
