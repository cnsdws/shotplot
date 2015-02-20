@extends('_master')
@section('title')
<title>Create a Match</title>
@stop

<br>
<br>
@section('Create')
	@foreach($errors->all() as $message) 
    <div class='error'>{{ $message }}</div>
	@endforeach

    <!-- Main page section for create position -->
    <h3>Add a new Match</h3>

    <form action="{{ action('PositionsController@handleCreate') }}" method="post" role="form">

		<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

		<div class="form-group">
			{{ Form::label('place','Place') }}
			{{ Form::input('text', 'place') }}
			
		</div>
		<div class="form-group">
			{{ Form::label('date', 'Date') }}
			{{ Form::input('date', 'date', null) }}
		</div>
		<div class="form-group">
			{{ Form::label('riflenumber','Rifle Number') }}
			{{ Form::input('text', 'riflenumber', null) }}
		</div>
		<div class="form-group">
			{{ Form::label('rangename','Range-Distance') }}
			{{ Form::input('text', 'rangename', null) }}
		</div>
		{{ Form::submit('Create', ['class' => 'btn btn-primary']) }}
		<a href="{{ action('PositionsController@index') }}" class="btn btn-link">Cancel</a>
	</form>

    	
                        
@stop

