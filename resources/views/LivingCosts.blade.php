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
<h1> This is Living Costs view</h1>

 <div class="row">
    <div class="col-12">
      <h2> The data of the currently logged in user:</h2>
      <?php
        echo 'UserId:',$userId, '<br>';
        echo 'username: ',$username,  '<br>';?>
      <h2> User's categories: </h2>
      <?php
      foreach ($cat as $value) {
        echo $value, ',', ' ';
      }
      ?>
    </div>
  </div>
@endsection