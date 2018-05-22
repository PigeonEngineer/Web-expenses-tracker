@extends('layouts.main')

<?php
               
  $cat = array(); $i=0;     ///te buus visu kategoriju nosaukumi
  foreach ($users_categories as $users_category) {
  //echo $users_category->name, PHP_EOL;
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
  // TODO: get rid of ugly flag.
  if ($first)
  {
    //echo $expense->name, '<br>';
  // $first = false;
  // echo $expense->creationTimeStamp, PHP_EOL;
  // echo $expense->amount,PHP_EOL;
  //echo $expense->comments, PHP_EOL;
  
  
  }
  else
  {
  // echo $expense->creationTimeStamp, PHP_EOL;
  // echo $expense->amount,PHP_EOL;
  // echo $expense->comments, PHP_EOL;
  // echo $expense->name, PHP_EOL;
  // echo '<br>';
}
}
}
// dd($users_expenses);
?>


@section('stuff')
<h1> Hello, testing the blade layout feature </h1>
<?php $test='This is simple php';
$check=true;
if ($check) echo $test ?> 
 <div class="row">
    <div class="col-12">
      <h1> The data of the currently logged in user:</h1>
      <?php
        echo 'UserId:',$userId, '<br>';
        echo 'username: ',$username,  '<br>';?>
      <h1> User's categories: </h1>
      <?php
      foreach ($cat as $value) {
        echo $value, ',', ' ';
      }
      ?>
    </div>
  </div>
@endsection