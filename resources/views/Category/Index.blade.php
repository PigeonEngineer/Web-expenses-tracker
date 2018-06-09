@extends('layouts.main')
@section('stuff')
<?php
$name_of_thing = "Category";
$random = trans('messages.delete');
// use resources/views/app.blade.php;
 ?>


<div class="container">
  <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link active" href="{{ URL::to('Category') }}">{{trans_choice('messages.allExp', 0)}}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ URL::to('Category/create') }}"> @lang('messages.addCat')</a>
          </li>
        </ul>Category
<br>
<h1>Categorijas</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
        </tr>
    </thead>
    <tbody>
    @foreach($categories as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>
            <td class="col-6">
                    <a class="btn btn-small ">
                {{ Form::open(array('url' => 'Category/' . $value->id, 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit($random, array('class' => 'btn btn-warning')) }}
                {{ Form::close() }} </a>
                <a class="btn btn-small btn-success" href="{{ URL::to('Category/' . $value->id) }}">@lang('messages.showExp')</a>

                <a class="btn btn-small btn-info" href="{{ URL::to('Category/' . $value->id . '/edit') }}">@lang('messages.editExp')</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
@endsection
