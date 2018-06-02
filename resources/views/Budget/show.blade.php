
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
          <a class="navbar-brand" href="{{ URL::to('Budget') }}">{{$name_of_thing}}s</a>
      </div>
      <ul class="nav navbar-nav">
          <li><a href="{{ URL::to('Budget') }}">View {{$name_of_thing}}s </a></li>
          <li><a href="{{ URL::to('Budget/create') }}">Create a {{$name_of_thing}}</a>
      </ul>
  </nav>

<h1>Showing {{ $Budget->id }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $Budget->amount }}</h2>
        <p>
            <strong>from date time:</strong> {{ $Budget->fromDateTime }}<br>
            <strong>to date time:</strong> {{ $Budget->ToDateTime }}
        </p>
    </div>

</div>
</body>
</html>
