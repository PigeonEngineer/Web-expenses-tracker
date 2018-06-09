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

    <title>@lang('messages.title')</title>
  </head>
  <body id="bootstrap-overrides">

  <!--    -------------------------------- -navbar    ---------------------------------------------------- -->


  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="ham"style="font-size:2em; color: white; padding-right: 10px"><i class="fas fa-align-justify" onclick="openNav()"></i>
    </div>

    <a id="button" class="links navbar-brand " href="http://localhost:8000/">@lang('messages.title')  </a>
    <button  class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <!--<li class="nav-item active">
          <a class="nav-link " href="http://localhost:8000">Home <span class="sr-only">(current)</span></a>
        </li>-->

      </ul>
      <div class="btn-group drop">
        <button type="button" class="btn btn-outline-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          @lang('messages.language')
        </button>
        <div class="dropdown-menu dropdown-menu-right">
          <a class="dropdown-item" type="button" href="http://localhost:8000/setLocale/en"> @lang('messages.english')</a>
          <a class="dropdown-item" type="button" href="http://localhost:8000/setLocale/lv">@lang('messages.latvian')</a>
        </div>
      </div>

      <div class="btn-group">
        <button type="button" class="btn btn-outline-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ Auth::user()->name }}
        </button>
        <div class="dropdown-menu dropdown-menu-right">
          <a class="dropdown-item" type="button" href="http://localhost:8000/profile">@lang('messages.profile')</a>
          <a class="dropdown-item" type="button" href="http://localhost:8000/logout">@lang('messages.exit')</a>
        </div>
      </div>
    </div>
  </nav>
<!--          ------------              -navbar end             ---                                        -->

<!--                                          sidebar                                                         -->
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="http://localhost:8000/Budget">@lang('messages.budget')</a>
  <a href="http://localhost:8000/statistics">@lang('messages.stats')</a>
  <a href=http://localhost:8000/about>@lang('messages.about')</a>
  @if (Auth::user() && Auth::user()->is_admin == true)
  <a href=http://localhost:8000/UserManagement>@lang('messages.usrmanage')</a>
  <a href=http://localhost:8000/ExpenseManagement>@lang('messages.userExpenses')</a>
  <a href=http://localhost:8000/BudgetManagement>@lang('messages.userBudgets')</a>
  @endif
</div>

<!--         ----------------------  main part of the page           ---------------------     -->
<div id="main-footer">
  <div id="main">


    <div class="container">
        <!--   -------------------row 1 --------------------------- -->

        @yield ('stuff')

    </div>

  </div>
  <!-- -------------------------------------footer--------------------------------- -->
  <div id="apaksa">
    <div class="footer">
    </div>
    <div class="rights">
      @lang('messages.rights')
    </div>
</div>
</div>
<!----scroll button-->
<button onclick="topFunction()" id="scrollBtn" class="btn  btn-outline-danger" title="Go to top">@lang('messages.top')</button>


{{-- </div> --}}



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

  </body>
</html>
