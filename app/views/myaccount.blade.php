@extends('_master')


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
						<input type="text" class="form-group" name="firstname" value="{{ Auth::user()->firstname }}" />
						<label for="firstname">First Name</label>
					</div>

					<div class="form-group">
						<input type="text" class="form-group" name="lastname" value="{{ Auth::user()->lastname }}" />
						<label for="lastname">Last Name</label>
					</div>

					<div class="form-group">
						<input type="text" class="form-group" name="email" value="{{ Auth::user()->email }}" />
						<label for="email">Email</label>
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
			        	<input type="text" class="form-group" name="oldpassword" placeholder="password" />
						<label for="oldpassword">Old Password</label>
						@if($errors->has('oldpassword'))
						{{$errors->first('oldpasswrod')}}
						@endif

					</div>
					<div class="form-group">
			        	<input type="password" class="form-group" name="newpassword" placeholder="new password" />
						<label for="newpassword">New Password</label>
						@if($errors->has('newpassword'))
						{{$errors->first('newpasswrod')}}
						@endif
					</div>
					<div class="form-group">
			        	<input type="password" class="form-group" name="confirmpassword" placeholder="confirm password" />
						<label for="confirmpassword">Confirm Password</label>
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


