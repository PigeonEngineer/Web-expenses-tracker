@extends('layouts.main')

@section('stuff')
<h1> @lang('messages.profile')</h1>
<br>
 <div class="row">
    <div class="col-12">
      <h2>@lang('messages.col') </h2>
      <div class="dropdown show">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          @lang('messages.drop')
        </a>
      
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a id="def"class="dropdown-item" href="#" onclick="changeColor('white')"> @lang('messages.def')</a>
          <a id="red" class="dropdown-item" href="#" onclick="changeColor('red')">  @lang('messages.red') </a>  
          <a id="red" class="dropdown-item" href="#" onclick="changeColor('green')">  @lang('messages.green') </a>
        </div>
      </div>
    
    </div>

  
  </div> 
   <hr>
   <div class="row">
    <div class="col-12">
      
    </div>
  </div>
@endsection