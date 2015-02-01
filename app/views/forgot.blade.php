@extends('_newmaster')


<!-- Sign up page -->
<div class = "container">
    <div class = "row">
        <div class = "col-md-4"> 
            <br>
            <a class="float-right" href="#">
            <img class="media-object" src="images/ShotPlotLogo.jpg" alt = "ShotPlot" width="300" height="160" style="float:center">
            </a>
            <h2>Welcome to Shotplot!</h2>

            @foreach($errors->all() as $message) 
            <div class='error'>{{ $message }}</div>
            @endforeach

            <h3>Let's Reset Your Password</h3>
            <br>
        
            {{ Form::open(array('url' => '/forgotpassword')) }}

                Enter your registered Email address<br>
                {{ Form::text('email') }}
                {{ Form::submit('Reset') }}
                
            {{ Form::close() }}   

                  
        </div>
    </div>
</div>
