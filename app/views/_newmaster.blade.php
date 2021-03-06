<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="ShotPlot is a website for tracking data collected in NRA Service Rifle Competitions.">
    @yield('title')
    
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
      
    @if(Auth::check())
     <a href='/logout'>Log out {{ Auth::user()->firstname }}</a>
    @endif
  
    @if(Session::get('flash_message'))
     <div class='flash-message'>{{ Session::get('flash_message') }}</div>
    @endif
    <!-- Yield to various viewer blades -->
		@yield('signup')
    @yield('login')
	              
     

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
  </body>
</html>