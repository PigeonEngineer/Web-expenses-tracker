@extends('layouts.main')

<!------------------------------------------php---------------------------------------------- ->
<?php
    $name_of_thing = "Category expense";
    $cat = array(); $i=0;     ///te buus visu kategoriju nosaukumi
    foreach ($users_categories as $users_category) {
      $cat[$i]=$users_category->name;
      $i++;
    }
    setcookie("MyCookie", $i);
  function printCat ($value, $cat) {  ///kategoriju nosaukumu drukasana kategoriju blokos
    $skaits=count($cat);
    if ($value<=$skaits-1) {
      echo $cat[$value];
      }
    else return;
  }
  foreach ($users_expenses as $categories) {
    $first = true;

    foreach ($categories as $expense)
    {

      if ($first)
      {
      }
      else
      {
    }
    }
  }
?>

@section('stuff')
<!--         ----------------------  main part of the page           ---------------------     -->
<div id="main">
        <!--    --------------the grid system------------------------ -->
  <div class="container">
      <!--   -------------------row 1 --------------------------- -->
    <div class="row">
      <div class="col">
        <h1>@lang('messages.glance')</h1>
        <br>
      </div>
    </div>

        <!--   -------------------row 2 --------------------------- -->
    <div class="row">
      <div class="col-6">
        <div class="jumbotron" id="work"> 
          <div class="overlay" >
            <div class="overlay_text"> <a class="fadeboxtext" href="http://localhost:8000/Category/1">@lang('messages.view')</a>
              <a class="fadeboxtext" href="{{ URL::to('Expense/create') }}">@lang('messages.add')</a>
            </div>
          </div>
          <h1 class="display-4"> <?php printCat(0, $cat);//echo $cat[0];?></h1>
          <hr class="my-4">
        </div>
      </div>
      <div class="col-6">
        <div class="jumbotron" id="life">
          <div class="overlay">
            <div class="overlay_text"> <a class="fadeboxtext" href="http://localhost:8000/Category/3">@lang('messages.view')</a>
              <a class="fadeboxtext" href="{{ URL::to('Expense/create') }}">@lang('messages.add')</a>
            </div>
          </div>
        <h1 class="display-4"><?php printCat(1, $cat);?></h1>
          <hr class="my-4">
        </div>
      </div>
    </div>
<!-- --------------------------------------------------- row 3 ------------------- -->
    <div class="row">
      <div class="col-6">
        <div class="jumbotron" id="food">
          <div>
          <div class="overlay">
            <div class="overlay_text"> <a class="fadeboxtext" href="http://localhost:8000/Category/2">@lang('messages.view')</a>
              <a class="fadeboxtext" href="{{ URL::to('Expense/create') }}">@lang('messages.add')</a>
            </div>
          </div>
        </div>
        <h1 class="display-4"><?php printCat(2, $cat);?></h1>
          <hr class="my-4">
        </div>
      </div>
      <div class="col-6">
        <div class="jumbotron" id="ent">
          <div class="overlay">
            <div class="overlay_text"> <a class="fadeboxtext" href="http://localhost:8000/Category/4">@lang('messages.view')</a>
              <a class="fadeboxtext" href="{{ URL::to('Expense/create') }}">@lang('messages.add')</a>
            </div>
          </div>
          <h1 class="display-4"><?php printCat(3, $cat)?></h1>
          <hr class="my-4">
        </div>
      </div>
    </div>
    <!-- -----------------------------collapsable categories---------------------------- -->
    <p>
      <button class="btn  btn-outline-danger" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
        @lang('messages.show')
      </button>
      <a class="btn  btn-outline-danger" type="button" href="http://localhost:8000/Category">
        @lang('messages.catcon')
      </a>
    </p>
    <div class="collapse" id="collapseExample">
      <div id="inserthere">

        <div class="row">
          <div class="col-6">
            <div class="jumbotron">
              <h1 class="display-4"><?php printCat(4, $cat);?></h1>
              <hr class="my-4">
            </div>
          </div>
          <div class="col-6">
            <div class="jumbotron">
              <h1 class="display-4"><?php printCat(5, $cat);?></h1>
              <hr class="my-4">
            </div>
          </div>
        </div> 

        <div class="row">
          <div class="col-6">
            <div class="jumbotron">
              <h1 class="display-4"><?php printCat(6, $cat);?></h1>
              <hr class="my-4">
            </div>
          </div>
          <div class="col-6">
            <div class="jumbotron">
              <h1 class="display-4"><?php printCat(7, $cat);?></h1>
              <hr class="my-4">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-6">
            <div class="jumbotron">
              <h1 class="display-4"><?php printCat(8, $cat);;?></h1>
              <hr class="my-4">
            </div>
          </div>
          <div class="col-6">
            <div class="jumbotron">
              <h1 class="display-4"><?php printCat(9, $cat);?></h1>
              <hr class="my-4">
            </div>
          </div>
        </div>

      </div>
    </div>

   <!-- --------------------------------------------------- row 4 ------------------- -->
    <div class="row">
      <div class="col-12">
        <h1> The data of the currently logged in user:</h1>
        <?php
          echo 'UserId:',$userId, '<br>';
          echo 'username: ',$username,  '<br>';
        ?>
        <h1> User's categories: </h1>
        <?php
          foreach ($cat as $value) {
            echo $value, ',', ' ';
          }
          ?>
      </div>
    </div>
  </div>
</div>
@endsection
