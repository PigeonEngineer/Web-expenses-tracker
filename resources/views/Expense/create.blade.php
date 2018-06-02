@extends('layouts.main')
@section('stuff')
<?php
use Carbon\Carbon;
use App\Budget;
use App\Expense;
use App\Http\Controllers\Redirect;
$name_of_thing = "Expense";
 ?>

        <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a class="nav-link" href="{{ URL::to('Expense') }}">{{$name_of_thing}}s</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="{{ URL::to('Expense/create') }}">Create a {{$name_of_thing}}</a>
                </li>
              </ul>  

<br>
<h1>Create a {{$name_of_thing}}</h1>

<!-- if there are creation errors, they will show here -->
{{ Html::ul($errors->all()) }}

{{ Form::open(array('url' => 'Expense')) }}


{{-- <td>Categories id</td> --}}
{{-- <td>Creation timestamp</td> --}}
    <div class="form-group">
        {!! Form::label('amount', 'Expense amount: ') !!}
        {!! Form::text('amount', null, ['class' => 'form-control']) !!}

    </div>

    <div class="form-group">
         {!! Form::label('comments', 'Comments: ') !!}
         {!! Form::text('comments', 'Comments', ['class' => 'form-control']) !!}
     </div>
     <div class="form-group">
     {{Form::label('categorys_id','Category name: ')}}
    {!! Form::select('categories', $categories, null, array('class' => 'form-control')) !!}
  </div>


    {!! Form::submit('Create the Expense!', array('class' => 'btn btn-outline-danger')) !!}

{!! Form::close() !!}


@endsection
