@extends('_firestringmaster')

@section('css')
<link href="../public/css/bootstrap.css" rel="stylesheet">
@stop
<br>
<br>
@section('createfirestring')

	@foreach($errors->all() as $message) 
    <div class='error'>{{ $message }}</div>
	@endforeach

    <!-- Main page section for create position -->
    <h4>View FireString</h4>

<div class = "row">
	    <div class = "col-md-4"> 
    
   			<form action="{{ action('PositionsController@handleCreateFireString') }}" method="post" role="form">

			<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

			
			<div class="form-group">
				{{ Form::input('text', 'fire_string_number') }}
				{{ Form::label('fire_string_number','Target Number') }}
			</div>
			<div class="form-group">
				{{ Form::input('text', 'distance') }}
				{{ Form::label('distance','Distance') }}
			</div>
			<div class="form-group">
				{{ Form::input('text', 'target') }}
				{{ Form::label('target','Target Type') }}
			</div>
			<div class="form-group">
				{{ Form::input('text', 'relay') }}
				{{ Form::label('relay','Relay Number') }}
			</div>
			<div class="form-group">
				{{ Form::input('text', 'lightdirection') }}
				{{ Form::label('lightdirection','Light Direction') }}
			</div>
			<div class="form-group">
				{{ Form::input('text', 'winddirection') }}
				{{ Form::label('winddirection','Wind Direction') }}
			</div>
			<div class="form-group">
				{{ Form::input('text', 'windspeed') }}
				{{ Form::label('windspeed','Wind Speed') }}
			</div>
			<div class="form-group">
				{{ Form::input('text', 'elevation') }}
				{{ Form::label('elevation','Elevation') }}
			</div>
			<div class="form-group">
				{{ Form::input('text', 'windage') }}
				{{ Form::label('windage','Windage') }}
			</div>
		</div>

		<div class = "col-md-2"> 
			<div class="form-group">
			{{ Form::input('text', 'shot1value', null, ['size' => '2', 'maxlength'=>'3']) }}
			{{ Form::label('shot1value','Shot 1') }}
			</div>
			<div class="form-group">
				{{ Form::input('text', 'shot2value', null, ['size' => '2', 'maxlength'=>'3']) }}
				{{ Form::label('shot2value','Shot 2') }}
			</div>
			<div class="form-group">
				{{ Form::input('text', 'shot3value', null, ['size' => '2', 'maxlength'=>'3']) }}
				{{ Form::label('shot3value','Shot 3') }}
			</div>
			<div class="form-group">
				{{ Form::input('text', 'shot4value', null, ['size' => '2', 'maxlength'=>'3']) }}
				{{ Form::label('shot4value','Shot 4') }}
			</div>
			<div class="form-group">
				{{ Form::input('text', 'shot5value', null, ['size' => '2', 'maxlength'=>'3']) }}
				{{ Form::label('shot5value','Shot 5') }}
			</div>
		</div>

		<div class = "col-md-2"> 
			<div class="form-group">
				{{ Form::input('text', 'shot6value', null, ['size' => '2', 'maxlength'=>'3']) }}
				{{ Form::label('shot6value','Shot 6') }}
			</div>
			<div class="form-group">
				{{ Form::input('text', 'shot7value', null, ['size' => '2', 'maxlength'=>'3']) }}
				{{ Form::label('shot7value','Shot 7') }}
			</div>
			<div class="form-group">
				{{ Form::input('text', 'shot8value', null, ['size' => '2', 'maxlength'=>'3']) }}
				{{ Form::label('shot8value','Shot 8') }}
			</div>
			<div class="form-group">
				{{ Form::input('text', 'shot9value', null, ['size' => '2', 'maxlength'=>'3']) }}
				{{ Form::label('shot9value','Shot 9') }}
			</div>
			<div class="form-group">
				{{ Form::input('text', 'shot10value', null, ['size' => '2', 'maxlength'=>'3']) }}
				{{ Form::label('shot10value','Shot 10') }}
			</div>
		</div>	
	</div>

		

		{{ Form::submit('Create', ['class' => 'btn btn-primary']) }}
		
		<a href="{{ action('PositionsController@indexfirestring') }}" class="btn btn-link">Cancel</a>


		
	</form>

    
                        
@stop

