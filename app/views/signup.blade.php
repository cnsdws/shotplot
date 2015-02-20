@extends('_newmaster')

@section('title')
<title>Sign Up for Shotplot.net</title>
@stop

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

            <h3>Sign up now!</h3>
            <br>
        </div>

        <div class = "col-md-4"> 
            <br>
            <br>
            <p>
            Please enter your name, a valid email, and password of at least 6 characters to sign up.
            <p>

            {{ Form::open(array('url' => '/signup')) }}

                First Name<br>
                {{ Form::text('firstname') }}<br><br>
                
                Last Name<br>
                {{ Form::text('lastname') }}<br><br>

                Email<br>
                {{ Form::text('email') }}<br><br>

                Password:<br>
                {{ Form::password('password') }}<br><br>

                {{ Form::submit('Submit') }}

            {{ Form::close() }}            
        </div>
    </div>
</div>
