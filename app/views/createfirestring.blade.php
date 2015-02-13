@extends('_firestringmaster')


<br>
<br>
@section('createfirestring')

	@foreach($errors->all() as $message) 
    <div class='error'>{{ $message }}</div>
	@endforeach

    <!-- Main page section for create position -->
    <h4>Add a new String of Fire</h4>
    <br>

<div class = "row">
	    <div class = "col-md-4"> 
    
   			<form action="{{ action('PositionsController@handleCreateFirestring') }}" method="post" role="form">

			<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

			
			<div class="form-group">
				{{ Form::input('text', 'fire_string_number') }}
				{{ Form::label('fire_string_number','Fire String Number') }}
			</div>
			<div class="form-group">
				{{ Form::select('distance', array(
					'200 Yard Slow Fire' => '200 Yard Slow Fire',
					'200 Yard Rapid Fire' => '200 Yard Rapid Fire',
					'300 Yard Rapid Fire' => '300 Yard Rapid Fire',
					'600 Yard Slow Fire' => '600 Yard Slow Fire',
					), '200 Yard Slow Fire') }}
				{{ Form::label('distance','Distance') }}
			</div>
			<div class="form-group">
				{{ Form::input('text', 'target') }}
				{{ Form::label('target','Target Number') }}
			</div>
			<div class="form-group">
				{{ Form::input('text', 'relay') }}
				{{ Form::label('relay','Relay Number') }}
			</div>
			<div class="form-group">
				{{ Form::select('lightdirection', array(
					'1:00' => '1:00',
					'2:00' => '2:00',
					'3:00' => '3:00',
					'4:00' => '4:00',
					'5:00' => '5:00',
					'6:00' => '6:00',
					'7:00' => '7:00',
					'8:00' => '8:00',
					'9:00' => '9:00',
					'10:00' => '10:00',
					'11:00' => '11:00',
					'12:00' => '12:00',
					), '1:00') }}
				{{ Form::label('lightdirection','Light Direction') }}
			</div>
			<div class="form-group">
				{{ Form::select('winddirection', array(
					'1:00' => '1:00',
					'2:00' => '2:00',
					'3:00' => '3:00',
					'4:00' => '4:00',
					'5:00' => '5:00',
					'6:00' => '6:00',
					'7:00' => '7:00',
					'8:00' => '8:00',
					'9:00' => '9:00',
					'10:00' => '10:00',
					'11:00' => '11:00',
					'12:00' => '12:00',
					), '1:00') }}
				{{ Form::label('winddirection','Wind Direction') }}
			</div>
			<div class="form-group">
				{{ Form::input('text', 'windspeed') }}
				{{ Form::label('windspeed','Wind Speed (MPH)') }}
			</div>
			<div class="form-group">
				{{ Form::input('text', 'elevation') }}
				{{ Form::label('elevation','Rifle Elevation') }}
			</div>
			<div class="form-group">
				{{ Form::input('text', 'windage') }}
				{{ Form::label('windage','Rifle Windage') }}
			</div>
		</div>
		<h4>Scores</h4>
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

		
		{{ Form::input('hidden', 'match_id', $match_id) }}
		{{ Form::submit('Create', ['class' => 'btn btn-primary']) }}
		
		<a href="{{ URL::to('/indexfirestring/'.$match_id) }}" class="btn btn-link">Cancel</a>


		
	</form>

    
                        
@stop

