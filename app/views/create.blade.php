@extends('_master')

@section('css')
<link href="../public/css/bootstrap.css" rel="stylesheet">
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
			{{ Form::input('text', 'place') }}
			{{ Form::label('place','Place') }}
		</div>
		<div class="form-group">
			{{ Form::input('date', 'date', null) }}
			{{ Form::label('date', 'Date') }}
		</div>
		<div class="form-group">
			{{ Form::input('text', 'riflenumber', null) }}
			{{ Form::label('riflenumber','Rifle Number') }}
		</div>
		<div class="form-group">
			{{ Form::input('text', 'rangename', null) }}
			{{ Form::label('rangename','Range-Distance') }}
		</div>
		{{ Form::submit('Create', ['class' => 'btn btn-primary']) }}
		<a href="{{ action('PositionsController@index') }}" class="btn btn-link">Cancel</a>
	</form>

    	
                        
@stop

