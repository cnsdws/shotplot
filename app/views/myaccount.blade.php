@extends('_master')
@section('title')
<title>My Account</title>
@end


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
        <div class = "row">
	    	<div class = "col-md-4"> 
       			<p>
		   		<form action="{{ action('PositionsController@handleMyAccount') }}" method="post" role="form">
		    
					<div class="form-group">
						<label for="firstname">First Name</label>
						<input type="text" class="form-group" name="firstname" value="{{ Auth::user()->firstname }}" />
					</div>

					<div class="form-group">
						<label for="lastname">Last Name</label>
						<input type="text" class="form-group" name="lastname" value="{{ Auth::user()->lastname }}" />
					</div>

					<div class="form-group">
						<label for="email">Email</label>
						<input type="text" class="form-group" name="email" value="{{ Auth::user()->email }}" />
					</div>
					<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
					<input type="submit"value="Save" class="btn btn-primary" />
					<a href="{{ action('PositionsController@index') }}" class="btn btn-link">Cancel</a>
				</form>
				</p>
			</div>
		
		<!-- Update password -->
		<div class = "col-md-4"> 
			<p>
				<form action="{{ action('PositionsController@updatePassword') }}" method="post" role="form">

			        <div class="form-group">
			        	<label for="oldpassword">Old Password</label>
			        	<input type="text" class="form-group" name="oldpassword" placeholder="password" />
						@if($errors->has('oldpassword'))
						{{$errors->first('oldpasswrod')}}
						@endif
					</div>
					<div class="form-group">
			        	<label for="newpassword">New Password</label>
			        	<input type="password" class="form-group" name="newpassword" placeholder="new password" />
						@if($errors->has('newpassword'))
						{{$errors->first('newpasswrod')}}
						@endif
					</div>
					<div class="form-group">
			        	<label for="confirmpassword">Confirm Password</label>
			        	<input type="password" class="form-group" name="confirmpassword" placeholder="confirm password" />
						@if($errors->has('confirmpassword'))
						{{$errors->first('confirmpasswrod')}}
						@endif
					</div>
			    	<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
					<input type="submit"value="Change Password" class="btn btn-primary" />
					<a href="{{ action('PositionsController@index') }}" class="btn btn-link">Cancel</a>
		   		</form>   
		 	</p>
		 </div>
	 </div>        
                        
@stop


