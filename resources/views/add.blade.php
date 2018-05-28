@extends('layouts.main')

<!------------------------------------------php---------------------------------------------- ->
<?php             
    $cat = array(); $i=0;     ///te buus visu kategoriju nosaukumi
    foreach ($users_categories as $users_category) {
      $cat[$i]=$users_category->name;
      $i++;
    }
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
<h1> Add category page </h1>
<br>
<div class="container">
  <div class='row'>
    <div class="col-9">
      <form>
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Amount:</label>
          <div class="col-sm-10">
            <input type="input" class="form-control" id="inputEmail3" placeholder="Amount">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Comment:</label>
          <div class="col-sm-10">
            <input type="textarea" class="form-control" id="inputPassword3" placeholder="Comment">
          </div>
        </div>
        <div class="form-group row">
          <label for="select" class="col-sm-2 col-form-label">Category:</label>
            <div class="col-sm-10">
              <select class="custom-select" id='select'>
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
      </div>
        
        <div class="form-group row">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-outline-danger">Add</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection