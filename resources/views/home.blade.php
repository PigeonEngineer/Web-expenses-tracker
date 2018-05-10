<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- My own css and  JS -->
    <script type="text/javascript" src="{{ URL::asset('js/home.js') }}"></script>
    <link rel="stylesheet" href="{{ URL::asset('css/home.css') }}" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
    
    <title>Quick draft</title>
  </head>
  <body id="bootstrap-overrides">

  <!--    -------------------------------- -navbar    ---------------------------------------------------- -->

  
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="ham"style="font-size:2em; color: white; padding-right: 10px"><i class="fas fa-align-justify" onclick="openNav()"></i> 
    </div>
 
    <a id="button" class="links navbar-brand " href="#">Expenses Tracker</a>
    <button  class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <!--<li class="nav-item active">
          <a class="nav-link " href="http://localhost:8000">Home <span class="sr-only">(current)</span></a>
        </li>-->
        <li class="nav-item active">
          <a class="nav-link" href="http://localhost:8000/about">About</a>
        </li>
      </ul>
      <div class="btn-group">
        <button type="button" class="btn btn-outline-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <?php echo $username; ?>
        </button>
        <div class="dropdown-menu dropdown-menu-right">
          <button class="dropdown-item" type="button">Action</button>
          <button class="dropdown-item" type="button">Another action</button>
          <button class="dropdown-item" type="button">Something else here</button>
        </div>
      </div>
    </div>
  </nav>
<!--          ------------              -navbar end             ---                                        -->

<!--                                          sidebar                                                         -->
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
</div>
  <!--  -----------------------------------------Php stuff----------------------- -->
    <?php
              $cat = array();
              $i=0; 
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
                  $cat[$i]=$expense->name;
                  $i++;
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

<!--         ----------------------  main part of the page           ---------------------     -->
<div id="main">
        <!--    --------------the grid system------------------------ -->
  <div class="container">
      <!--   -------------------row 1 --------------------------- --> 
    <div class="row">
      <div class="col">
        <h1>Categories at a glance:</h1>
        <br>
      </div>
    </div>
        <!--   -------------------row 2 --------------------------- --> 
    <div class="row">
      <div class="col-6">
        <div class="jumbotron">
          <h1 class="display-4"> <?php echo $cat[0];?></h1>
         
          <hr class="my-4">
        </div>
      </div>
      <div class="col-6">
        <div class="jumbotron">
          <h1 class="display-4"><?php echo $cat[1];?></h1>
          <hr class="my-4">
        </div>
      </div>
    </div>
<!-- --------------------------------------------------- row 3 ------------------- -->
    <div class="row">
      <div class="col-6">
        <div class="jumbotron">
          <h1 class="display-4"><?php echo $cat[2];?></h1>
          <hr class="my-4">
        </div>
      </div>
      <div class="col-6">
        <div class="jumbotron">
          <h1 class="display-4"><?php echo $cat[3];?></h1>
          <hr class="my-4">
        </div>
      </div>
    </div>
    <!-- -----------------------------collapsable categories---------------------------- -->
    <p>
      <button class="btn  btn-outline-danger" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
      Show more categories
      </button>
    </p>
    <div class="collapse" id="collapseExample">
      <div>
        
        <div class="row">
          <div class="col-6">
            <div class="jumbotron">
              <h1 class="display-4"><?php echo $cat[4];?></h1>
              <hr class="my-4">
            </div>
          </div>
          <div class="col-6">
            <div class="jumbotron">
              <h1 class="display-4"><?php echo $cat[5];?></h1>
              <hr class="my-4">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-6">
            <div class="jumbotron">
              <h1 class="display-4"><?php echo $cat[6];?></h1>
              <hr class="my-4">
            </div>
          </div>
          <div class="col-6">
            <div class="jumbotron">
              <h1 class="display-4"><?php echo $cat[7];?></h1>
              <hr class="my-4">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-6">
            <div class="jumbotron">
              <h1 class="display-4"><?php echo $cat[8];?></h1>
              <hr class="my-4">
            </div>
          </div>
          <div class="col-6">
            <div class="jumbotron">
              <h1 class="display-4"><?php echo $cat[9];?></h1>
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
          echo 'username: ',$username,  '<br>';?>
        <h1> User's categories: </h1>
        <?php 
          foreach ($cat as $value) {
            echo $value, ' ';
          }
          ?>             
      </div>
    </div>
  </div>  
</div>
<!-- -------------------------------------footer--------------------------------- -->
<div class="footer">
</div>
<div class="rights">
	No rights reserved at all - plenty of totally borrowed content!
</div>

<button onclick="topFunction()" id="scrollBtn" title="Go to top">Top</button>	<!----scroll button-->


</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

  </body>
</html>
