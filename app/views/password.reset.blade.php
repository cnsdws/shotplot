@extends('_master')


@section('Edit')
	
	@foreach($errors->all() as $message) 
    <div class='error'>{{ $message }}</div>
	@endforeach

 	<br>
    <br>
    <!-- Main page section for stock edit -->
        <h3>Reset Password</h3>

        <!-- Reset Password -->
        <br>
        <form action="{{ action('RemindersController@postReset') }}" method="POST">
		    <input type="hidden" name="token" value="{{ $token }}">
		    <input type="email" name="email">
		    <input type="password" name="password">
		    <input type="password" name="password_confirmation">
		    <input type="submit" value="Reset Password">
		</form>
                        
@stop


