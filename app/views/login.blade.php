@extends('_newmaster')


@section('login')
<br>
<div class = "container">
    <div class = "row">
	    <div class = "col-md-4"> 
            <a class="float-right" href="#">
            <img class="media-object" src="images/ShotPlotLogo.jpg" alt = "ShotPlot" width="300" height="160" style="float:center">
            </a>
            <h2> Login</h2>
    	    {{ Form::open(array('url' => '/login')) }}

                Email<br>
                {{ Form::text('email') }}<br><br>

                Password:<br>
                {{ Form::password('password') }}<br><br>

                {{ Form::submit('Login') }}

            {{ Form::close() }}

            or
            <a href='signup'>Sign up</a>   
            <br>
            <br>
            <a href='forgotpassword'>Forgot Password</a>  
        </div>
        <div class = "col-md-8"> 
            <a class="float-right" href="#">
            <img class="media-object" src="images/campperry.jpg" alt = "Login" width="599" height="330" style="float:center">
            </a>

            <h3>Welcome to Shotplot. The best shooting site on the web!</h3> 
            <p>
                Shotplot will let you keep track of your Service Rifle matches, firing strings as well as other important competitive
                shooting data. Shotplot was designed by shooters, for shooters and Shotplot has the only free ballistic 
                analyzer available on the web that will put you on the X ring.
            <p>
            <h3>Sign up now and give it a try.</h3>
        </div>
    </div>
</div>
@stop