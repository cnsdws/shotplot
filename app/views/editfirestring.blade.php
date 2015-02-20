@extends('_firestringmaster')
@section('title')
<title>Edit Firestring</title>
@stop

@section('editfirestring')
	
	@foreach($errors->all() as $message) 
    <div class='error'>{{ $message }}</div>
	@endforeach

 	<br>
    <br>
    <!-- Main page section for stock edit -->
        <h3>Edit a String of Fire</h3>

        <div class = "row">
	    	<div class = "col-md-4"> 
        
	        	<form action="{{ action('PositionsController@handleEditFirestring') }}" method="post" role="form">
				
					<input type="hidden" name="id" value="{{ $firestring->id }}" />
					
					<div class="form-group">
						<input type="text" class="form-group" name="fire_string_number" value="{{ $firestring->fire_string_number }}" />
						<label for="fire_string_number">Firestring Number</label>
					</div>
					<div class="form-group">
						<input type="select" class="form-group" name="distance" value="{{ $firestring->distance }}" />
						<label for="distance">Distance</label>
						
					</div>
					<div class="form-group">
						<input type="text" class="form-group" name="target" value="{{ $firestring->target }}" />
						<label for="target">Target Number</label>
					</div>
					<div class="form-group">
						<input type="text" class="form-group" name="relay" value="{{ $firestring->relay }}" />
						<label for="relay">Relay</label>
					</div>
					<div class="form-group">
						<input type="text" class="form-group" name="lightdirection" value="{{ $firestring->lightdirection }}" />
						<label for="lightdirection">Light Direction</label>
					</div>
					<div class="form-group">
						<input type="text" class="form-group" name="winddirection" value="{{ $firestring->winddirection }}" />
						<label for="winddirection">Wind Direction</label>
					</div>
					<div class="form-group">
						<input type="text" class="form-group" name="windspeed" value="{{ $firestring->windspeed }}" />
						<label for="windspeed">Wind Speed</label>
					</div>
					<div class="form-group">
						<input type="text" class="form-group" name="elevation" value="{{ $firestring->elevation }}" />
						<label for="elevation">Elevation</label>
					</div>
					<div class="form-group">
						<input type="text" class="form-group" name="windage" value="{{ $firestring->windage }}" />
						<label for="windage">Windage</label>
					</div>
			</div>
			<div class = "col-md-4"> 
					<div class="form-group">
						<input type="text" class="form-group" name="shot1value" value="{{ $firestring->shot1value }}" />
						<label for="shot1value">Shot 1</label>
					</div>
					<div class="form-group">
						<input type="text" class="form-group" name="shot2value" value="{{ $firestring->shot2value }}" />
						<label for="shot2value">Shot 2</label>
					</div>
					<div class="form-group">
						<input type="text" class="form-group" name="shot3value" value="{{ $firestring->shot3value }}" />
						<label for="shot3value">Shot 3</label>
					</div>
					<div class="form-group">
						<input type="text" class="form-group" name="shot4value" value="{{ $firestring->shot4value }}" />
						<label for="shot4value">Shot 4</label>
					</div>
					<div class="form-group">
						<input type="text" class="form-group" name="shot5value" value="{{ $firestring->shot5value }}" />
						<label for="shot5value">Shot 5</label>
					</div>
			</div>
			<div class = "col-md-4"> 
					<div class="form-group">
						<input type="text" class="form-group" name="shot6value" value="{{ $firestring->shot6value }}" />
						<label for="shot6value">Shot 6</label>
					</div>
					<div class="form-group">
						<input type="text" class="form-group" name="shot7value" value="{{ $firestring->shot7value }}" />
						<label for="shot7value">Shot 7</label>
					</div>
					<div class="form-group">
						<input type="text" class="form-group" name="shot8value" value="{{ $firestring->shot8value }}" />
						<label for="shot8value">Shot 8</label>
					</div>
					<div class="form-group">
						<input type="text" class="form-group" name="shot9value" value="{{ $firestring->shot9value }}" />
						<label for="shot9value">Shot 9</label>
					</div>
					<div class="form-group">
						<input type="text" class="form-group" name="shot10value" value="{{ $firestring->shot10value }}" />
						<label for="shot10value">Shot 10</label>
					</div>
			</div>
					
				
				<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
				<input type="submit"value="Save" class="btn btn-primary" />

				<a href="/indexfirestring/{{ $firestring->match_id }}" class="btn btn-default">Cancel</a>
			
			</form>
		</div>
            
           
                        
@stop


