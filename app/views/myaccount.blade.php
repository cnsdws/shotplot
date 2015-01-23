@extends('_master')

@section('css')
<link href="../public/css/bootstrap.css" rel="stylesheet">
@stop


@section('Edit')
	
	@foreach($errors->all() as $message) 
    <div class='error'>{{ $message }}</div>
	@endforeach

 	<br>
    <br>
    <!-- Main page section for stock edit -->
        <h3>Edit my account</h3>

        <!-- Update email -->
        <br>
       	<p>
   		<form action="{{ action('PositionsController@handleMyAccount') }}" method="post" role="form">
    
			<div class="form-group">
				<input type="text" class="form-group" name="email" value="{{ Auth::user()->email }}" />
				<label for="email">Email</label>
			</div>
			<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
			<input type="submit"value="Save" class="btn btn-primary" />

		</form>
		</p>
		<br>
		<br>
		<!-- Update password -->
		<p>
		<form action="{{ action('PositionsController@updatePassword') }}" method="post" role="form">

	        <div class="form-group">
	        	<input type="text" class="form-group" name="oldpassword" placeholder="password" />
				<label for="oldpassword">Old Password</label>
			</div>
			<div class="form-group">
	        	<input type="password" class="form-group" name="newpassword" placeholder="new password" />
				<label for="newpassword">New Password</label>
			</div>
			<div class="form-group">
	        	<input type="password" class="form-group" name="confirmpassword" placeholder="confirm password" />
				<label for="confirmpassword">Confirm Password</label>
			</div>


	    	<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
			<input type="submit"value="Change Password" class="btn btn-primary" />
	    </form>   
		 </p>        
                        
@stop


