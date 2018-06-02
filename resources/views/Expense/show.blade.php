
<?php
$name_of_thing = "Budget";
// use resources/views/app.blade.php;
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>Look! I'm CRUDding</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

  <nav class="navbar navbar-inverse">
      <div class="navbar-header">
          <a class="navbar-brand" href="{{ URL::to('Expense') }}">{{$name_of_thing}}s</a>
      </div>
      <ul class="nav navbar-nav">
          <li><a href="{{ URL::to('Expense') }}">View {{$name_of_thing}}s </a></li>
          <li><a href="{{ URL::to('Expense/create') }}">Create a {{$name_of_thing}}</a>
      </ul>
  </nav>

<h1>Showing {{ $Expense->id }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $Expense->amount }}</h2>
        <p>
            <strong>Creation Datetime:</strong> {{ $Expense->creationTimeStamp}}<br>
            <strong>Category:</strong> {{ $category }}
            <strong>Comments:</strong> {{ $Expense->comments}}
        </p>
    </div>

</div>
</body>
</html>
