<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>shotplot.net</title>

    <link href="../css/bootstrap.css" rel="stylesheet">
   

    <!-- Bootstrap -->
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <body>
  
  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         <!--  <a class="navbar-brand" href="http://dwa15.com">CSCI - E15</a> -->
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="http://www.shotplot.net">Home</a></li>
            <li><a href="{{ action('PositionsController@index') }}" class="navbar-brand">Matches</a></li> 
          </ul>
        </div>
        <!--/.nav-collapse -->  
        
        <!-- Check for login-auth -->
        @if(Auth::check())
         <a href='/logout'>Log out {{ Auth::user()->firstname }}</a>
        @else 
        <a href='/signup'>Sign up</a> or <a href='/login'>Login</a>
        @endif
      </div>
  </div>
  <br>
  <br>
  <br>
  <div class="container">
    <div class="starter-template">
      <ul class="media-list">
        <li class="media">
          <div class="media-body">

            @if(Session::get('flash_message'))
            <div class='flash-message'>{{ Session::get('flash_message') }}</div>
            @endif
            <!-- Yield to various viewer blades -->
           
            @yield('createfirestring')
            @yield('editfirestring')
            @yield('deletefirestring')
            @yield('indexfirestring')
              
                   
          </div>
        </li>
      </ul>
    </div>
  </div>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../js/bootstrap.js"></script>
  </body>
</html>